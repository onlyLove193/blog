<?php
return array(
	//'配置项'=>'配置值'
        'TMPL_FILE_DEPR' => '_',
        'TMPL_PARSE_STRING' => array(
          '__PUBLIC__' => __ROOT__.'/App/'.MODULE_NAME.'/View/Public',
          '__TMPL__' =>    __ROOT__.'/App/'.MODULE_NAME.'/View/'
        ),

    //数据库配置项
    'DB_TYPE'   => 'mysql',
    'DB_HOST'   => '127.0.0.1',
    'DB_USER'   => 'root',
    'DB_NAME'   => 'blog',
    'DB_PWD'    => 'yla501193',
    'DB_PORT'   => '3306',
    'DB_PREFIX'  => 'bl_',
    'DB_CHARSET' => 'utf8',

    // 'SESSION_AUTO_START' => true,
);