<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="原来爱，梦里是谁的香味。。。" />
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/media.css" rel="stylesheet">
<link href="/Public/css/comment.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="/Public/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
   <header>
    <h1>原来爱</h1>
    <h2>梦里是谁的香味，唤醒封印的眷恋，而今什么样的你，是否也想念曾经....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav"><a href="<?php echo U('Index/index');?>">首页</a><a href="<?php echo U('Newlist/index');?>">文章列表</a><a href="<?php echo U('New/index');?>">心灵感悟</a><a href="<?php echo U('Share/index');?>">文章分享</a><a href="<?php echo U('About/index');?>">关于我</a></nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="<?php echo U('index');?>">文章列表</a></h2>
    <div class="bloglist">
      <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="newblog">
          <ul>
            <h3><a href="<?php echo U('New/index',['id'=>$v['aid']]);?>"><?php echo ($v["title"]); ?></a></h3>
            <div class="autor"><span>作者：<?php echo ($v["uname"]); ?></span><span>分类：[<a href="/"><?php echo ($v["cname"]); ?></a>]</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></div>
            <p><?php echo (getCont($v["content"],450)); ?> <a href="<?php echo U('New/index',['id'=>$v['aid']]);?>" target="_blank" class="readmore">全文</a></p>
          </ul>
          <figure><img src="<?php echo ($v["aimg"]); ?>" ></figure>
          <div class="dateview"><?php echo (date('Y-m-d',$v["wtime"])); ?></div>
        </div><?php endforeach; endif; ?>
    </div>
    <div class="page"><?php echo ($show); ?></div>
  </article>
  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="/">日记</a></li>
      <li class="rnav2 "><a href="/">欣赏</a></li>
      <li class="rnav3 "><a href="/">程序人生</a></li>
      <li class="rnav4 "><a href="/">经典语录</a></li>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="/Public/images/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="/Public/images/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="/Public/images/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="/Public/images/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="/Public/images/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="/Public/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="/Public/js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>