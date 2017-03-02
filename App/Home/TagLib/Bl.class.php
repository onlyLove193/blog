<?php
	namespace Home\TagLib;
	use Think\Template\TagLib;
	class Bl extends TagLib{
		protected $tags = array(
			'snav' => array('attr' => 'limit,order','close'=>1)
			);

		public function _snav($attr,$content){
			$str = <<<EOT
			<?php
				\$article = M('article');
				\$data	= \$article->select();
				foreach(\$data as \$v){
			?>
EOT;
			$str .= extract($v);
			$str .= $content;
			$str .= "<?php }?>";
			return $str;
		}
	}
   