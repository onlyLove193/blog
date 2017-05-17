<?php
namespace Admin\Controller;

class CateAddController extends CommonController
{
	public function index()
	{
		$cat = M('category')->field(array('gid','cname','pid'))->where(['status'=>1])->select();
		$this->cat = getRow($cat);
		
		$this->title = '添加栏目';
		$this->navi = ['Clist'=>'栏目模块','CateAdd'=>'添加栏目'];
		$this->display();
	}

	public function addHandle()
	{
		if(!IS_POST){
			$this->error('页面不存在','index',5);
			return;
		}
		$data = [];
		$data['cname'] = I('post.cname','','htmlspecialchars');
		$data['pid'] = I('post.pid','0','htmlspecialchars');
		$data['descript'] = I('post.descript','','htmlspecailchars');
		$data['keywords'] = I('post.keywords','','htmlspecialchars');
		$data['status'] = I('post.status','0','htmlspecialchars');

		$res = M('category')->add($data);
		if($res) $this->success('栏目添加成功！',U('Clist/index'),3);
		else $this->error('栏目添加失败！',U('index'),5);
 	}

}