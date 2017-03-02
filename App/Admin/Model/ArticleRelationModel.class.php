<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class ArticleRelationModel extends RelationModel{
		protected $tableName = 'article';
		protected $_auto = array(
			array('red',99),
			array('wtime','time',1,'function'),
			array('status',1)
			);
		protected $_link = array(
			'author' => array(
			'mapping_type' => self::BELONGS_TO,
			'class_name'   => 'author',
			'foreign_key'  => 'auid',
			'mapping_name' => 'authors'
			)
		);
		
	}
?>