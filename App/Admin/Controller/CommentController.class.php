<?php
namespace Admin\Controller;

class CommentController extends CommonController
{
	public function index()
	{
		$comment = M('comment');
		$count = $comment->count();
		$page = getpage($count,10);
		$show = $page->show();
		$field = ['bl_comment.cid'=>'cid','bl_comment.auname'=>'name','bl_comment.auemail'=>'email','bl_article.title'=>'title','bl_comment.comment_ip'=>'ip','bl_comment.time'=>'time'];
		$this->list = $comment->join('bl_article on bl_article.aid=bl_comment.aid')->field($field)->order('bl_comment.time desc')->limit($page->firstRow.' , '.$page->listRows)->select();
		$this->assign('page',$show);
		$this->title = '评论列表';
		$this->navi = ["Comment"=>'评论模块','评论管理'];
		$this->display();
	}

	public function comManage()
	{
		$id = I('get.id','','htmlspecialchars');
		$comment = M('comment');
		if(!is_numeric($id)){
			$this->error('页面不存在!',U('Login/index'),5);
			return ;
		}
		$field = ['bl_comment.cid'=>'cid','bl_comment.auname'=>'name','bl_comment.auemail'=>'email','bl_article.title'=>'title','bl_comment.comment_ip'=>'ip','bl_comment.time'=>'time','bl_comment.content'=>'content'];
		$this->data = $comment->join('bl_article on bl_article.aid=bl_comment.aid')->field($field)->where(['bl_comment.cid'=>$id])->find();
		$this->title = '查看评论';
		$this->navi = ["Comment"=>'评论模块','查看评论'];
		$this->display();
	}

	public function comDelete()
	{
		//页眉来源必须为评论列表页面，此控制器下的index页面。
		$url = U('index');
		$comment = M('comment');
		$id = I('get.id','','htmlspecialchars');
		$preUrl = $_SERVER['HTTP_REFERER'];
		if(!is_numeric($id) || !strrpos($preUrl,$url)){
			$this->error('页面不存在!',U('Login/index'),5);
			return ;
		}
		$res = $comment->where(['cid'=>$id])->delete();
		if($res)
			$this->error('删除成功!',U('index'),3);
		else
			$this->error('删除失败，请稍后重试!',U('index'),5);
		return;
	}
}