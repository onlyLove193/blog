<?php
namespace Home\Controller;
use Think\Controller;
class NewController extends Controller{
	public function index(){
		$article = M('article');
		$def = $article->field('aid')->order('wtime desc')->limit(1)->find();
		//获取显示文章ID
		$id = I('get.id',$def['aid'],'htmlspecialchars');

		//上一篇
		$prev = $article->field(['aid','title'])->where('aid < '.$id)->order('aid desc')->limit(1)->find();
		$this->prev = $prev;

		//所请求文章
		$res = $article->join('bl_author on bl_article.auid=bl_author.tid')->where('aid='.$id)->select();

		$this->res = $res[0];

		//下一篇
		$next = $article->field(['aid','title'])->where('aid > '.$id)->order('aid asc')->limit(1)->find();
		$this->next = $next;

		//相关文章
		// $smap['aid'] = ['eq',$id]; 
		$subSql = $article->field('cid')->where('aid = '.$id)->select(false);
		$map['cid'] = array('eq','('.$subSql.')');
		$relatives = $article->field(['aid','title'])->where('cid = ('.$subSql.')')->order('wtime desc')->limit(5)->select();
		// $relatives = $article->field(['aid','title'])->where($map)->order('wtime desc')->limit(5)->select();
		$this->relatives = $relatives;

		$this->display(); // 输出模板
	}
}
?>