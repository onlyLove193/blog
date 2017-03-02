<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _before_index(){
		$sname = session('name');
		if(session('name') === null || empty($sname)){
			/*$_SESSION = array();
			if(ini_get("session.use_cookies")){
				$params = session_get_cookie_params();
				setcookie(session_name(),'',time()-1,$params['path'],$params['domain'],$params['secure'],$params['httponly']);
			}
			session_destroy();*/
			$this->error('请登录！',U('Login/index'),5);
		}
	}
} 
?>