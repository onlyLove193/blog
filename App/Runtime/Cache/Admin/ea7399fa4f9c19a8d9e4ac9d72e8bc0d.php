<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/App/Admin/View/Public/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>通讯录</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="/App/Admin/View/Public/images/leftico01.png" /></span>管理信息
    </div>
    	<ul class="menuson">
        <li class="active"><cite></cite><a href="<?php echo U('main');?>" target="rightFrame">首页模版</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Blist/index');?>" target="rightFrame">博文列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Blog/index');?>" target="rightFrame">添加博文</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Bmanage/index');?>" target="rightFrame">博文管理</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Ulist/index');?>" target="rightFrame">用户列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Umanage/index');?>" target="rightFrame">用户管理</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Computer/index');?>" target="rightFrame">评论列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Tools/index');?>" target="rightFrame">评论管理</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="/App/Admin/View/Public/images/leftico02.png" /></span>其他设置
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('Trail/index');?>" target="rightFrame">回收站</a><i></i></li>
        <li><cite></cite><a href="#">验证码管理</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Error/index');?>" target="rightFrame">404页面</a><i></i></li>
        </ul>     
    </dd> 
    
    <dd><div class="title"><span><img src="/App/Admin/View/Public/images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>
    
    </dd>   
    
    </dl>
</body>
</html>