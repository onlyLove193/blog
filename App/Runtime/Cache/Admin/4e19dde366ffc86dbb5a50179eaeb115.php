<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/App/Admin/View/Public/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>


</head>

<body style="background:url(/App/Admin/View/Public/images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="<?php echo U('index');?>" target="_parent"><img src="/App/Admin/View/Public/images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="<?php echo U('Index/main');?>" target="rightFrame" class="selected"><h2>后台首页</h2></a></li>
    <li><a href="<?php echo U('Blist/index');?>" target="rightFrame"><h2>博文模块</h2></a></li>
    <li><a href="<?php echo U('Ulist/index');?>"  target="rightFrame"><h2>用户模块</h2></a></li>
    <li><a href="<?php echo U('Tools/index');?>"  target="rightFrame"><h2>评论模块</h2></a></li>
    <li><a href="<?php echo U('Computer/index');?>" target="rightFrame"><h2>其它</h2></a></li>
    <!--li><a href="<?php echo U('Tab/index');?>"  target="rightFrame"><img src="/App/Admin/View/Public/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li-->
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="/App/Admin/View/Public/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="<?php echo U('Login/logOut',array('come'=>true));?>" target="_parent">退出</a></li>
    </ul>
     
    <div class="user">
    <span style="color:red;"><?php echo (session('name')); ?></span>
    <i>消息</i>
    <b>5</b>
    </div>    
    
    </div>
</body>
</html>