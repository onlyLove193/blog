<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/App/Admin/View/Public/css/select.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/App/Admin/View/Public/css/upload.css">
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/select-ui.min.js"></script>
<script type="text/javascript" src="/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Data/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/upload.js"></script>
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.form.js"></script>
<script type="text/javascript">
    var URL = '/Data/ueditor/'
</script>
<script type="text/javascript">
    var path = '/Admin/Blog';
    $(document).ready(function(e) {
        $(".select1").uedSelect({
    		width : 320			  
    	});
    });
</script>
</head>

<body>
	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
    <?php if(is_array($navi)): foreach($navi as $k=>$v): if($v === $title): ?><li><a href="#"><?php echo ($v); ?></a></li>
        <?php else: ?> <li><a href="<?php echo U("".$k."/index");?>"><?php echo ($v); ?></a></li><?php endif; endforeach; endif; ?>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
    <div class="itab">
  	<ul> 
    <li><a href="#tab1" class="selected">发布通知</a></li> 
  	</ul>
    </div> 
    
  	<div id="tab1" class="tabson">
    
    <div class="formtext">Hi，<b><?php echo (session('name')); ?></b>，欢迎您试用信息发布功能！</div>
    
    <ul class="forminfo">
    <form id="total">
    <li><label>标题<b>:</b></label><input name="title" type="text" class="dfinput" value="" style="width:320px;" /></li>
   <li><label>发布者<b>:</b></label><input name="uname" type="text" class="dfinput" value="" style="width:320px;" /></li>
    <li><label>文章类别<b>:</b></label>  
    <div class="vocation">
    <select class="select1" name="select">
    <option select="selected">文章分类</option>
    <?php if(is_array($cat)): foreach($cat as $key=>$v): ?><option value="<?php echo ($v["gid"]); ?>"><?php echo (str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$v["level"])); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
    </select>
    </div>
    
    </li>
    
    <li><label>关键字<b>:</b></label><input name="keywords" type="text" class="dfinput" value="" style="width:320px;" />
    </li>
    <li><label>描述<b>:</b></label><textarea name="preread" style="width:320px;height:60px;border:1px solid #ccc;"></textarea>
    </li>
    <li id="status"><label>状态<b>:</b></label><input name="status" type="radio" style="position:relative;top:4px;" value="1" checked="checked" />&nbsp;可见&nbsp;&nbsp;&nbsp;&nbsp;<input name="status" style="position:relative;top:4px;" type="radio" value="0" />&nbsp;不可见　</li>
    <li id="upload"><label>附图<b>:</b></label><input type="file" id="picture" name="aimg" />
    <div class="progress">
            <span class="bar"></span><span class="percent"></span ><span class="back"></span>
        </div>
    <div class="files"></div>
    </li>
    <li id="edi"><label>文章类容<b>:</b></label>
    <textarea id="container" clas="showCont" name="content" style="position:relative;left:86px"></textarea>
    </li>
    <li><label>&nbsp;</label><input name="button" id="btn" type="button" class="btn" value="马上发布"/></li>
    </form>
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