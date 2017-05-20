<?php
	namespace Admin\Controller;
	class BlistController extends CommonController{
		/**
		 * 博文列表首页
		 * @return [type] [description]
		 */
		public function index(){
			$article = M('article');
			$count = $article->count();
			$page = getpage($count,5);
			$show = $page->show();
			$field = ['bl_article.aid'=>'aid','bl_article.title'=>'title','bl_article.wtime'=>'wtime','bl_article.red'=>'red','bl_article.status'=>'status','bl_article.aimg'=>'aimg','bl_author.uname'=>'author','bl_author.status'=>'austatus','bl_category.gid'=>'gid','bl_category.cname'=>'cname'];
			$this->list = $article->field($field)->join("bl_author on bl_author.tid=bl_article.auid")->join("bl_category on bl_category.gid=bl_article.cid")->where(array('bl_article.status'=>1,'bl_author.status'=>1,'bl_category.status'=>1))->limit($page->firstRow.','.$page->listRows)->order("wtime desc")->select();
			$this->assign('page',$show);
			$this->title = '博文列表';
			$this->navi = ["Blist"=>'博文模块','博文列表'];
			$this->display();

		}
		
	}
?>