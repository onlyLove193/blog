<?php
	namespace Home\Controller;
	use Think\Controller;
	class IndexController extends Controller{
		public function index(){
			/**
			 * main content
			 * @var [type]
			 */
			$res = M('article');
			$rows = $res->join('bl_author on bl_article.auid = bl_author.tid')->join('bl_category on bl_article.cid = bl_category.gid')->order('bl_article.aid desc')->limit(0,5)->select();
			$this->rows = $rows;

			$cols = $res->field('title')->where(['hot'=>1])->order('aid desc')->limit(20)->select();
			$this->hots = array_rand($cols,8);
			$this->recoms = array_rand($cols,8);
			$this->cols = $cols;
			$this->display();
		}
	}
?>