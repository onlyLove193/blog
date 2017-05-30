<?php
namespace Home\Controller;
use Think\Controller;
class NewController extends Controller
{
	public function index()
	{
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

		/**
		 * 文章评论
		 */
		$field = ['cid'=>'id','auname'=>'user_name','time','pcid'=>'sort_id','content'];
		$comment = M('comment')->field($field)->where(['aid'=>$id])->order('time asc')->select();
		$this->comment = json_encode($comment);
		//下一篇
		$next = $article->field(['aid','title'])->where('aid > '.$id)->order('aid asc')->limit(1)->find();
		$this->next = $next;

		//相关文章
		// $smap['aid'] = ['eq',$id]; 
		$subSql = $article->field('cid')->where('aid = '.$id)->select(false);
		$map['cid'] = array('eq','('.$subSql.')');
		$this->relatives = $article->field(['aid','title'])->where('cid = ('.$subSql.')')->order('wtime desc')->limit(5)->select();
		// $relatives = $article->field(['aid','title'])->where($map)->order('wtime desc')->limit(5)->select();

		$this->display(); // 输出模板
	}

	public function comment()
	{
		if(! IS_POST){
			$this->error('页面不存在！',U('index'),5);
			return;
		}

		$data = [];
		$data['auname'] = I('post.name','','htmlspecialchars');
		$data['auemail'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL) ? filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL) : '';	
		$data['pcid'] = I('post.pcode','',['htmlspecialchars','intval']);
		$data['aid'] = I('post.aid','');
		$data['content'] = I('post.content','','htmlspecialchars');	
		$data['comment_ip'] = get_client_ip();
		$data['time'] = time();

		$comment = M('comment');
		$res = $comment->data($data)->add();
		if(!$res){
			echo json_encode(['status'=> 0,'info'=>'评论发布失败']);
			return ;
		}else {
			echo json_encode(['status'=> 1,'info'=>'评论发布失败','id'=>$res,'time'=>date('Y-m-d H:i:s',$data['time'])]);
		}
		return;
	}
}
?>