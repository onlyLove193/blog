<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录后台管理系统</title>
<link href="/blog/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<!--script language="JavaScript" src="/blog/App/Admin/View/Public/js/jquery.js"></script-->
<script src="/blog/App/Admin/View/Public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/blog/App/Admin/View/Public/js/cloud.js" type="text/javascript"></script>

<script language="javascript">
    var Url = "<?php echo U('verify','','');?>",
        authPath = "/blog/Admin/Login",
        Path = "/blog/App/Admin/View/Public/images";
        module = '/blog/Admin';
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 

</head>

<body style="background-color:#1c77ac; background-image:url(/blog/App/Admin/View/Public/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  


<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
    </div>
    
    <div class="loginbody">
    
    <span class="systemlogo"></span> 
       
    <div class="loginbox" >
    
    <ul>
    <li><input name="loginuser" type="text" class="loginuser" value="<?php echo ($user["name"]); ?>" onclick="JavaScript:this.value=''"/></li>
    <li><input name="" type="password" class="loginpwd" value="<?php echo ($user["pwd"]); ?>" onclick="JavaScript:this.value=''"/></li>
    <li><p><input type="text" name="code" class="logincode" value="验证码" onclick="javascript:this.value=''" /></p><img class="code" src="<?php echo U('verify','','');?>" alt="验证码" /><span class="chcode">看不清</span></li>
    <li><input name="" type="button" class="loginbtn" value="登录" /><label><input type="radio" value="rember" name="rem" />记住密码</label><label><a href="#">忘记密码？</a></label></li>
    </ul>
    
    
    </div>
    
    </div>
    
    
    
    <div class="loginbm">版权所有  2017  个人博客</div>
</body>
</html>