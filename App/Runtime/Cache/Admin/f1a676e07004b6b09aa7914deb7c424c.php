<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>账户管理</title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/App/Admin/View/Public/css/select.css" rel="stylesheet" type="text/css" />
<link href="/App/Admin/View/Public/css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/select-ui.min.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/reset.js"></script>

<script type="text/javascript">
    var Path = "/App/Admin/View/Public";
    var Url = '/Admin/Index';
    var Dir = '/Admin';
  </script>
  
<!--script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script-->
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">账户管理</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
    <div class="itab">
  	<ul> 
    <li><a href="#tab1" class="selected">账户设置</a></li> 
  	</ul>
    </div> 
    
  	<div id="tab1" class="tabson">
    
    <div class="formtext">Hi，<b>admin</b>更改密码</div>
       
    <ul class="forminfo">
    <li><label>用户名<b>:</b></label><input type="text" style="width:518px;" class="dfinput" name="uname" value="<?php echo ($_SESSION['userinfo']['name']); ?>" onclick="javascript:this.value='';" /></li>
   
    <li><label>旧密码<b>:</b></label>  
    <input type="password" style="width:518px;" class="dfinput" name="pwd0" value="<?php echo ($_SESSION['userinfo']['pwd']); ?>" />
    </li>
    
    <li><label>新密码<b>:</b></label>
    <input type="password" style="width:518px;" class="dfinput" name="pwd1" value="" />    
    </li>
    <li><label>重新输入<b>:</b></label>
    <input type="password" style="width:518px;" class="dfinput" name="pwd2" value="" />
    </li>
    <li><label>&nbsp;</label><input name="" type="button" class="btn" value="密码重置"/></li>
    </ul>
    
    </div> 
	</div> 
 
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
    
    
    
    
    
    </div>

</body>
</html>