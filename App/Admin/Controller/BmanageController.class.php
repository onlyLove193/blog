<?php
	namespace Admin\Controller;

	class BmanageController extends CommonController{
		/**
		 * 博文列表首页
		 * @return [type] [description]
		 */
		public function index(){
			$article = M('article');
			$count = $article->order('wtime desc')->count();
			$page = getpage($count,10);
			$show = $page->show();
			$field = [
				'bl_article.aid'=>'aid','bl_article.title'=>'title','bl_article.status'=>'status','bl_article.wtime'=>'wtime','bl_author.uname'=>'author'
			];
			$this->list = $article->field($field)->join('bl_author on bl_author.tid=bl_article.auid')->order('wtime desc')->limit($page->firstRow.','.$page->listRows)->select();
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
			/**
			 * [$field description]过滤字段信息
			 * @var [type]
			 */
			$field = ['bl_article.aid'=>'aid','bl_article.title'=>'title','bl_article.keywords'=>'keywords','bl_article.preread'=>'preread','bl_article.status'=>'status','bl_article.aimg'=>'aimg','bl_article.content'=>'content','bl_author.uname'=>'author','bl_category.gid'=>'gid','bl_category.cname'=>'cname'];
			/**
			 * [$article description]提取关联字段
			 * @var [type]
			 */
			$this->article = M('article')->field($field)->join('bl_author on bl_article.auid=bl_author.tid')->join('bl_category on bl_article.cid=bl_category.gid')->where(['aid'=>$aid])->find();

			$category = M('category')->where(['status'=>1])->select();
			$this->category = getRow($category);
			$this->title = '博文管理';
			$this->navi = ['Blist'=>'博文模块','博文管理'];
			$this->display();

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

		public function editHandle()
		{
			$aid = I('post.aid'); 
			if(!IS_POST){
				$this->error('页面不存在！',U('index'),5);
				return;
			}
			$data = [];
			$data['cid'] = I('post.cid','');
			$data['keywords'] = I('post.keywords','','htmlspecialchars');
			$data['preread'] = I('post.preread','','htmlspecialchars');
			$data['content'] = I('post.content','','htmlspecialchars');
			$data['status'] = I('post.status','1');

			$res = M('article')->where(['aid'=>$aid])->save($data);
			if($res) 
				$this->success('文章编辑成功！',U('Blist/index'),3);
			else
				$this->error('文章编辑失败！',U('index'),5);
			return;
		}
	}
?>