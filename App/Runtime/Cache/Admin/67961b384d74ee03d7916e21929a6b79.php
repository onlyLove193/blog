<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<link href="/App/Admin/View/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/App/Admin/View/Public/css/page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/App/Admin/View/Public/js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <?php if(is_array($navi)): foreach($navi as $k=>$v): if($v === $title): ?><li><a href="#"><?php echo ($v); ?></a></li>
        <?php else: ?> <li><a href="<?php echo U("".$k."/index");?>"><?php echo ($v); ?></a></li><?php endif; endforeach; endif; ?>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="click"><span><img src="/App/Admin/View/Public/images/t01.png" /></span>添加</li>
        <li class="click"><span><img src="/App/Admin/View/Public/images/t02.png" /></span>修改</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/App/Admin/View/Public/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/App/Admin/View/Public/images/px.gif" /></i></th>
        <th>标题</th>
        <th>用户</th>
        <th>发布时间</th>
        <th>是否审核</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): foreach($list as $k=>$v): ?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($v["aid"]); ?></td>
        <td><?php echo ($v["title"]); ?></td>
        <td><?php echo ($v["uname"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$v["wtime"])); ?></td>
        <td>已审核</td>
        <td><a href="<?php echo U('bshow',array('aid'=>$v['aid']),'');?>" class="tablelink">查看</a>     <a href="<?php echo U('bdelete',array('aid'=>$v['aid']),'');?>" class="tablelink"> 删除</a></td>
        </tr><?php endforeach; endif; ?>
           <tr><td colspan="7" align="center"><?php echo ($page); ?></td></tr>    
        </tbody>
    </table>
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/App/Admin/View/Public/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
</body>
</html>