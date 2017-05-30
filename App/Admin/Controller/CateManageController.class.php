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
		$res = $category->where(['gid'=>$gid])->find();

		$cat = $category->field(array('gid','cname','pid'))->select();
		
		$self = getRow($cat,$gid);
		array_unshift($self, $res);
		$cat = getRow($cat);
		foreach($cat as $k=>$v){
			foreach($self as $value){
				if($v['gid'] === $value['gid']){
					unset($cat[$k]);
					break;
				}
			}
		}		
		$this->assign('res',$res);
		$this->assign('cat',$cat);
		$this->title = '编辑栏目';
		$this->navi = ['Clist'=>'栏目模块','CateAdd'=>'编辑栏目'];
		$this->display();
	}

	public function cdelete()
	{
		$gid = I('get.gid','','htmlspecialchars');
		if(!IS_GET || !is_numeric($gid)){
			$this->error('页面不存在！',U('index'),5);
			return;
		}

		$cat = M('category')->field(array('gid','cname','pid'))->select();
		
		$self = getRow($cat,$gid);
		//存在子栏目部允许删除
		if(!empty($self)){
			$this->error('该栏目存在子栏目，不允许删除！',U('index'),5);
			return;
		}
		//栏目下存在文章不允许删除
		$artilceNum = M('article')->where(['cid'=>$gid])->count();
		if($artilceNum){
			$this->error('该栏目下存在文章，请先删除文章再删除！',U('index'),5);
			return;
		}
		$res = M('category')->where(['gid'=>$gid])->delete();
		if($res){
			$this->success('删除成功！',U('index'),3);
		}else{
			$this->error('删除失败！',U('index'),5);
		}
	}

	public function manageHandle()
	{
		$gid = I('post.gid');
		if(!IS_POST || !is_numeric($gid)){
			$this->error('页面不存在！',U('index'),5);
			return;
		}

		$data = [];
		$data['gid'] = $gid;
		$data['cname'] = I('post.cname','','htmlspecialchars');
		$data['pid'] = I('post.pid','0','htmlspecialchars');
		$data['descript'] = I('post.descript','','htmlspecailchars');
		$data['keywords'] = I('post.keywords','','htmlspecialchars');
		$data['status'] = I('post.status','0','htmlspecialchars');
		$res = M('category')->save($data);

		if($res){
			$this->success('数据更新成功！',U('Clist/index'),3);
			return;
		}else{
			$this->error('数据更新失败！',U('index'),5);
			return;
		}
	}
}