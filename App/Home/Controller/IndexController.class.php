<?php
	namespace Home\Controller;
	use Think\Controller;
	class IndexController extends Controller{
		public function index(){
			echo "<pre>";
			print_r($_SESSION);
			//$this->display();
		}
	}
?>