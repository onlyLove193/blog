<?php
namespace Admin\Controller;
use Admin\Controller;
class BlogController extends CommonController{
	/**
	 * 发表博文表单页面
	 * @return [type] [description]
	 */
	public function index(){
		$cat = M('category')->field(array('gid','cname','pid'))->select();
		$this->cat = getRow($cat);
		$this->title = '发表博文';
		$this->navi = ['Blist'=>'博文模块','Blog'=>'发表博文'];
		$this->display();
	}	
	/**
	 * 博文配图提交处理
	 * @return [type] [description]
	 */
	public function uploadImg(){
		session_start();
		$image = new \Think\Image();
		$aimg = session('aimg');
		$file = realpath(__ROOT__).'/Data/Upload/'.$aimg['savepath'].$aimg['savename'];
		if(!file_exists($file) || is_dir($file)){
			$upload = new \Think\Upload();
			$upload->maxSize = 3145728;
			$upload->exts = array('jpg','jpeg','png','gif');
			$upload->rootPath = realpath(__ROOT__).'/Data/Upload/';
			$upload->savePath = '';
			$info = $upload->upload();
			if(!$info){
				echo $upload->getError();
				return ;
			}else{
				$fileInfo = realpath(__ROOT__).'/Data/Upload/'.$info['aimg']['savepath'].$info['aimg']['savename'];
				$sm = substr($fileInfo,0,-4);
				$image->open($fileInfo);
				$image->thumb(240,169,\Think\Image::IMAGE_THUMB_FILLED)->save($fileInfo);
				$image->thumb(80,60,\Think\Image::IMAGE_THUMB_FILLED)->save($sm.'sm.jpg');
				session('aimg',$info['aimg']);
				echo json_encode(array('info'=>'上传成功！','status'=>1,'url'=>''));
				return ;
			}
		}
		echo json_encode(array('info'=>'上传成功！','status'=>1,'url'=>''));
		return ;	
		
	}
	/**
	 * 博文发布区域
	 * @return [type] [description]
	 */
	public function distribute(){
		session_start();
		$aimg = session('aimg');
		session('aimg','');
		$data['uname'] = I('post.uname','','addslashes,htmlspecialchars');
		$author = M('author');
		$auid = $author->where($data)->getField('tid');
		if(!$auid){
			$auid = $author->data($data)->add();
		}
		$article = M('article');
		$data = $article->create($_POST);
		$data['auid'] = $auid;
		$data['cid'] = I('post.select','','intval');
		$data['aimg'] = '/Data/Upload/'.$aimg['savepath'].$aimg['savename'];
		$data['wtime'] = time();
		$res = $article->add($data);
		
		if(!$res){
			echo "Admin/Blog/index";
		}else{
			echo "Admin/Blist/index";
		}	
	
	}
}
?>
