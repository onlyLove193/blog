<?php
	namespace Admin\Controller;
	class UlistController extends CommonController{
		public function index(){
			$user = M('author');
			$count = $user->order('tid desc')->count();
			$page = getpage($count,10);
			$show = $page->show();
			$this->list = $user->order('tid desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('page',$show);
			$this->title = '用户列表';
			$this->navi = ['Ulist'=>'用户模块','用户列表'];
			$this->display();
		}
	}
?>