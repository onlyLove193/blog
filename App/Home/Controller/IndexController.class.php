<?php
	namespace Home\Controller;
	use Think\Controller;
	class IndexController extends Controller{
		public function index(){
			$res = M('article');
			$rows = $res->join('bl_author on bl_article.auid = bl_author.tid')->join('bl_category on bl_article.cid = bl_category.gid')->order('bl_article.aid desc')->limit(2,5)->select();
			$this->rows = $rows;
			$this->display();
		}
	}
?>