<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function index(){
        $user = session('userinfo');
        if(session('status') === 0 || empty($user)){
            $user = ['name'=>'','pwd'=>''];
        }
        $this->assign('user',$user);
        $this->display();
    }
    /**
     * 引入验证码
     */
    public function verify(){
         $verConfig = array(
             'fontSize' => 12,
             'length' => 4,
             'imageW' => 106,
             'imageH'=> 36,
             'useCurve' => false,
             'useNoise' => false
         );
         $verify = new \Think\Verify($verConfig);
         $verify->entry();
    }
    /**
     * 用户验证
     */
    public function authUser(){
        if(!IS_POST){
            $this->error('页面不存在!','index',5);
            return ;
        }
        $user = I('post.name','','addslashes,htmlspecialchars');
        $arr = M('user')->where(array('name'=>$user))->find();
        if(empty($arr)){
            $arr = array('status'=>0,'msg'=>'用户不存在');
            echo json_encode($arr);
            return ;
        }else{
            session('data',$arr);
            $arr = array('status'=>1,'msg'=>'验证成功');
            echo json_encode($arr);
            return ;
        }
    }
    /**
     * 密码验证
     */
    public function authPwd(){
        if(!IS_AJAX){
            $this->error('页面不存在！','index',5);
            return ;
        }
        $pwd = I('post.pwd','','addslashes,htmlspecialchars');
        if(in_array(md5($pwd),session('data'))){
            cookie('user',$pwd);
            $arr = array('status'=>1,'msg'=>'验证成功');
            echo json_encode($arr);
            return ;
        }else{
            $arr = array('status'=>0,'msg'=>'密码错误！');
            echo json_encode($arr);
            return ;
        }
        
    }
    /**
     * 验证码检测
     * @return [type] [description]
     */
    public function authVerify(){
        if(!IS_AJAX){
            $this->error('页面不存在！','index',5);
            return ;
        }
        $code = I('post.verify');
        $verify =  new \Think\Verify();
        if($verify->check($code)){
            $arr = array('status'=>1,'msg'=>'验证通过');
            echo json_encode($arr);
            return ;
        }else{
            $arr = array('status'=>0,'msg'=>'验证码错误');
            echo json_encode($arr);
            return;
        }
    }
    /**
     * 记住密码
     * @return [type] [description]
     */
    public function rember(){
        $name = session('userinfo.name');
        $pwd = session('userinfo.pwd');
        if(!IS_AJAX){
            $this->error('页面不存在！','index',5);
            return;
        }else{
            if(I('post.rember')){
                cookie('rember',true);
            }else if(I('post.uname') === $name && I('post.upwd') === $pwd){
                echo json_encode(['status'=>1]);
                return;
             }
        }
        return;
    }
    /**
     * 登录处理
     * @return [type] [description]
     */
    public function logHandle(){
        if(!IS_AJAX){
            $this->error('页面不存在！','index',5);
            return ;
        }
        $pwd = cookie('user') ? cookie('user') : session('userinfo.pwd');
        $rem = cookie('rember') ? cookie('rember') : false;
        setcookie('user',null,time()-1,'/');
        setcookie('rember',null,time()-1,'/');
        $id = session('data.id') ? session('data.id') : session('id');
        $name = session('data.name') ? session('data.name') : session('userinfo.name');
        $lastTime = session('data.log_time') ? session('data.log_time') : session('userinfo.lasttime');
        $arr = array('log_time'=>time(),'log_ip'=>get_client_ip());
        if(M('user')->where(['id'=>$id])->save($arr)){
            $_SESSION = array();
            session('id',$id);
            session('name',$name);
            session('info',$arr);
            session('userinfo.name',$name);
            session('userinfo.pwd',$pwd);
            session('userinfo.lasttime',$lastTime);
            if(!empty($pwd) && $rem){
                session('status',1);
            }else{
                session('status',0);
            }
            //$this->success('登录成功！',U('Index/index',''),3);
            $data['status'] = 1;
            $data['info'] = '登录成功！';
            $data['url'] = U('Index/index');
            $this->ajaxReturn($data);
        }else{
            $this->error('登录失败！',U('index',''),5);
        }
    }
    /**
     * 退出登录
     * @return [type] [description]
     */
    public function logOut(){
        $sess = I('session.');
        if(!I('get.come') || empty($sess)){
            $this->error('页面不存在！',U('Login/index'),5);
            return;
        }
        // $_SESSION = array();
        // session('id',null);
        session('name',null);
        session('info',null);
        /*if(ini_get('session.use_cookies')){
            $params = session_get_cookie_params();
            setcookie(session_name(),'',time()-1,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
        }
        session_destroy();*/
        $this->success('退出成功！',U('Login/index'),3);
    }
}
