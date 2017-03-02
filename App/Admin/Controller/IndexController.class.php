<?php
namespace Admin\Controller;
class IndexController extends CommonController {
    /**
     * 后台首页框架
     * @return [type] [description]
     */
    public function index(){
        $this->display("main");
        }
    /**
     * 后台首页头部
     * @return [type] [description]
     */
    public function top(){
        $this->display();
    }
    /**
     * 首页左边部分
     * @return [type] [description]
     */
    public function left(){
        $this->display();
    }
    /**
     * 后台首页主体部分
     * @return [type] [description]
     */
    public function main(){
        $this->display("index");
    }
    public function right(){
        $this->display();
    }
    
    /**
     * 修改账户信息（密码）
     * @return [type] [description]
     */
    public function account(){
        $this->display();
    }
    /**
     * 账户信息处理
     * @return [type] [description]
     */
    public function accountHandle(){
        if(!IS_AJAX){
            $this->error('页面不存在！',U('Index/index',5));
            return;
        }
        $pwd = I('post.pwd','','addslashes,htmlspecialchars,md5');
        $id = session('id');
        $data = array('passwd'=>$pwd,'log_time'=>time(),'log_ip'=>get_client_ip());
        if(M('user')->where($id)->save($data)){
            echo json_encode(array('status'=>1));
            return ;
        }else{
            echo json_encode(array('status'=>0));
            return;
        }
    }
    
}