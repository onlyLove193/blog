<?php
	namespace Admin\Controller;
	class UmanageController extends CommonController{
		/**
		 * 用户管理
		 * @return [type] [description]
		 */
		public function index(){
			$author = M('author');
			$count = $author->where('status=1')->order('tid desc')->count();
			$page = getpage($count,10);
			$show = $page->show();
			$this->list = $author->order('tid desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('page',$show);
			$this->title = '用户管理';
			$this->navi = ['Ulist'=>'用户模块','用户管理'];
			$this->display();
		}
		/**
		 * 删除用户
		 * @return [type] [description]
		 */
		public function udelete(){
			$tid = I('get.tid','','intval');
			$article = M('article');
			$res = $article->where('auid='.$tid)->select();
			if($res){
				$this->error('删除失败！请先删除该用户博文',U('Ulist/index'),5);
				return;
			}
			$res = M('author')->where('tid='.$tid)->delete();
			if(!$res){
				$this->error('用户信息删除失败！',U('Umanage/index'),5);
				return;
			}else{
				$this->success('删除成功！',U('Ulist/index'),3);
				return;
			}
		}
		/**
		 * 锁定用户
		 */
		public function uflock(){
			$tid = I('get.tid','','intval');
			$author = M('author');
			$status = $author->where(['tid'=>$tid])->getField('status');
			if(!$status){
				$data = array('status'=>1);
				$res = $author->where('tid='.$tid)->save($data);
				if(!$res){
					$this->error('解锁失败！',U('Umanage/index'),5);
				}else{
					$this->success('解锁成功！',U('Ulist/index',3));
				}
			}else{
				$data = array('status'=>0);
				$res = $author->where('tid='.$tid)->save($data);
				if(!$res){
					$this->error('锁定失败！',U('Umanage/index'),5);
				}else{
					$this->success('锁定成功！',U('Ulist/index',3));
				}
			}
		}
	}
?>