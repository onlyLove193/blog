<?php
	namespace Admin\Controller;

	class BmanageController extends CommonController{
		/**
		 * 博文列表首页
		 * @return [type] [description]
		 */
		public function index(){
			$article = M('article');
			$count = $article->where('status=1')->order('wtime desc')->count();
			$page = getpage($count,10);
			$show = $page->show();
			$this->list = $article->join('bl_author on bl_author.tid=bl_article.auid')->where('bl_article.status=1')->order('wtime desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('page',$show);
			$this->title = '博文管理';
			$this->navi = ['Blist'=>'博文模块','博文管理'];
			$this->display();
		}
		/**
		 * 博文信息查看
		 * @return [type] [description]
		 */
		public function bshow(){
			$aid = I('get.aid','','intval');
			echo $aid;
		}
		/**
		 * 删除博文
		 * @return [type] [description]
		 */
		public function bdelete(){
			$aid = I('get.aid','','intval');
			$article = M('article');
			$data = array('status'=>0);
			$res = $article->where('aid='.$aid)->save($data);
			if(!$res){
				$this->error('删除失败！','bdelete',5);
			}else{
				$this->success('删除成功！',U('Blist/index',3));
			}
		}
	}
?>