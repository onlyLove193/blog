<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>博文发布</title>
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
    <li><a href="#">首页</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
    <div class="itab">
  	<ul> 
    <li><a href="#tab1" class="selected">发布通知</a></li> 
    <li><a href="#tab2">自定义</a></li> 
  	</ul>
    </div> 
    
  	<div id="tab1" class="tabson">
    
    <div class="formtext">Hi，<b>admin</b>，欢迎您试用信息发布功能！</div>
    
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
    
    
  	<div id="tab2" class="tabson">
    
    
    <ul class="seachform">
    
    <li><label>综合查询</label><input name="" type="text" class="scinput" /></li>
    <li><label>指派</label>  
    <div class="vocation">
    <select class="select3">
    <option>全部</option>
    <option>其他</option>
    </select>
    </div>
    </li>
    
    <li><label>重点客户</label>  
    <div class="vocation">
    <select class="select3">
    <option>全部</option>
    <option>其他</option>
    </select>
    </div>
    </li>
    
    <li><label>客户状态</label>  
    <div class="vocation">
    <select class="select3">
    <option>全部</option>
    <option>其他</option>
    </select>
    </div>
    </li>
    
    <li><label>&nbsp;</label><input name="" type="button" class="scbtn" value="查询"/></li>
    
    </ul>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/App/Admin/View/Public/images/px.gif" /></i></th>
        <th>标题</th>
        <th>用户</th>
        <th>籍贯</th>
        <th>发布时间</th>
        <th>是否审核</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130908</td>
        <td>王金平幕僚：马英九声明字字见血 人活着没意思</td>
        <td>admin</td>
        <td>江苏南京</td>
        <td>2013-09-09 15:05</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink"> 删除</a></td>
        </tr> 
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130907</td>
        <td>温州19名小学生中毒流鼻血续：周边部分企业关停</td>
        <td>uimaker</td>
        <td>山东济南</td>
        <td>2013-09-08 14:02</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130906</td>
        <td>社科院:电子商务促进了农村经济结构和社会转型</td>
        <td>user</td>
        <td>江苏无锡</td>
        <td>2013-09-07 13:16</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130905</td>
        <td>江西&quot;局长违规建豪宅&quot;：局长检讨</td>
        <td>admin</td>
        <td>北京市</td>
        <td>2013-09-06 10:36</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130907</td>
        <td>温州19名小学生中毒流鼻血续：周边部分企业关停</td>
        <td>uimaker</td>
        <td>山东济南</td>
        <td>2013-09-08 14:02</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
    
        </tbody>
    </table>
    
   
  
    
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