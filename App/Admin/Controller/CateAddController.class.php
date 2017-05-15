<?php
namespace Admin\Controller;

class CateAddController extends CommonController
{
	public function index()
	{
		$cat = M('category')->field(array('gid','cname','pid'))->select();
		// $cat = getRow($cat);
		
		
		p($cat);exit;
		// $this->title = '添加栏目';
		// $this->navi = ['Clist'=>'栏目模块','CateAdd'=>'添加栏目'];
		// $this->display();
	}

	protected function Multi_tree()
	{

	}
}