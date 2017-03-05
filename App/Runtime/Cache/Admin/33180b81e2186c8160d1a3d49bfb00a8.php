<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.js"></script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    </ul>
    </div>
    
    <div class="mainindex">
    
    
    <div class="welinfo">
    <span><img src="/App/Admin/View/Public/images/sun.png" alt="天气" /></span>
    <b>Admin早上好，欢迎使用信息管理系统</b>(1806631883@qq.com)
    <a href="<?php echo U('Index/account');?>">帐号设置</a>
    </div>
    
    <div class="welinfo">
    <span><img src="/App/Admin/View/Public/images/time.png" alt="时间" /></span>
    <i>您上次登录的时间：<?php echo (date('Y-m-d H:i:s',$_SESSION['userinfo']['lasttime'])); ?></i> （不是您登录的？<a href="<?php echo U('Index/account');?>">请点这里</a>）
    </div>
    
    <div class="xline"></div>
    
    <ul class="iconlist">
    
    <li><img src="/App/Admin/View/Public/images/ico01.png" /><p><a href="<?php echo U('Index/account');?>">用户设置</a></p></li>
    <li><img src="/App/Admin/View/Public/images/ico02.png" /><p><a href="<?php echo U('Blog/index');?>">发布博文</a></p></li>
    <li><img src="/App/Admin/View/Public/images/ico03.png" /><p><a href="#">博文统计</a></p></li>
    <li><img src="/App/Admin/View/Public/images/ico04.png" /><p><a href="#">文件上传</a></p></li>
    <li><img src="/App/Admin/View/Public/images/ico05.png" /><p><a href="#">目录管理</a></p></li>
    <li><img src="/App/Admin/View/Public/images/ico06.png" /><p><a href="#">查询</a></p></li> 
            
    </ul>
    
    <div class="ibox"><a class="ibtn"><img src="/App/Admin/View/Public/images/iadd.png" />添加新的快捷功能</a></div>
    
    <div class="xline"></div>
    <div class="box"></div>
    
    <div class="welinfo">
    <span><img src="/App/Admin/View/Public/images/dp.png" alt="提醒" /></span>
    <b>信息管理系统使用指南</b>
    </div>
    
    <ul class="infolist">
    <li><span>您可以快速进行文章发布管理操作</span><a class="ibtn">发布或管理文章</a></li>
    <li><span>您可以快速发布产品</span><a class="ibtn">发布或管理产品</a></li>
    <li><span>您可以进行密码修改、账户设置等操作</span><a class="ibtn">账户管理</a></li>
    </ul>
    
    <div class="xline"></div>
    
    <ul class="umlist">
    <li><a href="#">如何发布文章</a></li>
    <li><a href="#">如何访问网站</a></li>
    <li><a href="#">如何管理广告</a></li>
    <li><a href="#">后台用户设置(权限)</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    
    
    </div>
</body>
</html>