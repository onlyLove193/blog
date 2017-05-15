<?php
namespace Admin\Controller;

class ClistController extends CommonController
{
	public function index () 
	{
		$clist = M('category');
		$count = $clist->count();
		$page = getpage($count,10);
		$show = $page->show();
		$this->list = $clist->field(['descript','keywords'],true)->order('gid asc')->limit($page->firstRow.' , '.$page->listRows)->select();
		$this->assign('page',$show);
		$this->title = '栏目列表';
		$this->navi = ["Clist"=>'栏目模块','栏目列表'];
		$this->display();
	}
}