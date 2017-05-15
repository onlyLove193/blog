<?php
namespace Admin\Controller;

class CateManageController extends CommonController
{
	public function index()
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
	public function cshow()
	{
		$gid = I('get.gid','','htmlspecialchars');
		if(!IS_GET || !is_numeric($gid)) {
			$this->error('页面不存在！',U('index'),5);
			return ;
		}
		$category = M('category');
		$this->res = $category->where(['gid'=>$gid])->find();

		$cat = $category->field(array('gid','cname','pid'))->select();
		$this->cat = getRow($cat);
		
		$this->title = '编辑栏目';
		$this->navi = ['Clist'=>'栏目模块','CateAdd'=>'编辑栏目'];
		$this->display();
	}
}