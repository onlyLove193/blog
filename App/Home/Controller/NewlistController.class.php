<?php
namespace Home\Controller;
use Think\Controller;
class NewlistController extends Controller{
	public function index()
	{
		//文章分页处理
		$article = M('article');
		$count = $article->where('status = 1')->count();
		$page = new \Think\Page($count,8);
		//定制分页样式
		$page->setConfig('header','共 %TOTAL_ROW% 条记录');
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');

		$show = $page->show();

		//根据分页页数从数据表取出数据
		$list = $article->join('bl_author on bl_article.auid=bl_author.tid')->join('bl_category on bl_article.cid=bl_category.gid')->where('bl_article.status = 1')->order('wtime desc')->limit($page->firstRow.','.$page->listRows)->select();

		/**
		 * 右侧点击排行内容
		 */
		$relist = $article->field(['aid','title'])->order("red desc")->limit(9)->select();

		/**
		 * 右侧栏目排行内容
		 */
		$calist = M("category")->field(['gid','cname'])->select();
		$key = array_rand($calist,9);

		//分配数据
		$this->show = $show;
		$this->list = $list;
		$this->relist = $relist;
		$this->calist = $calist;
		$this->ca_key = $key;
		$this->display();
	}
}
?>