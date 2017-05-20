<?php
	namespace Admin\Controller;
	class TrailController extends CommonController{
		/**
		 * 回收站首页
		 * @return [type] [description]
		 */
		public function index(){
			$article = M('article');
			$count = $article->where('status=0')->order('wtime desc')->count();
			$page = getpage($count,10);
			$show = $page->show();
			$this->list = $article->join('bl_author on bl_author.tid=bl_article.auid')->where('bl_article.status=0')->order('wtime desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('page',$show);
			$this->title = '回收站';
			$this->navi = ["Trail"=>'其它模块','回收站'];
			$this->display();
		}
		/**
		 * 彻底删除博文
		 */
		public function Tdelete(){
			$aid = I('get.aid','','intval');
			$article = M('article');
			$res = $article->where('aid='.$aid)->delete();
			if(!$res){
				$this->error('移出失败！','bdelete',5);
			}else{
				$this->success('移出成功！',U('Blist/index',3));
			}
		}
		/**
		 * 博文恢复（移出回收站）
		 */
		public function Trecover(){
			$aid = I('get.aid','','intval');
			$article = M('article');
			$data = array('status'=>1);
			$res = $article->where('aid='.$aid)->save($data);
			if(!$res){
				$this->error('移出失败！','Tdelete',5);
			}else{
				$this->success('移出成功！',U('Blist/index',3));
			}
		}
	}
?>