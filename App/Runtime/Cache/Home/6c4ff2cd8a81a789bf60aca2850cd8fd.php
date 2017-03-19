<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="我的博客我做主。" />
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/index.css" rel="stylesheet">
<link href="/Public/css/media.css" rel="stylesheet">
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
    <div class="banner">
      <ul class="texts">
        <p>Where I Want To Live,Is Where You Are</p>
        <p>喜欢你所喜欢的，讨厌你所讨厌的，爱你所爱的</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
        <?php if(is_array($rows)): foreach($rows as $key=>$v): ?><div class="blogs">
          <!-- <?php echo ($v['title']); ?> 文章ID -->
            <h3><a href="<?php echo U('New/index',['id'=>$v['aid']]);?>"><?php echo ($v['title']); ?></a></h3>
            <figure><img src="<?php echo ($v['aimg']); ?>" ></figure>
            <ul>
              <p><?php echo (getCont($v['content'],450)); ?>...</p>
              <a href="<?php echo U('New/index',['id'=>$v['aid']]);?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
            </ul>
            <p class="autor"><span>作者：<?php echo ($v['uname']); ?></span><span>分类：【<a href="/"><?php echo ($v['cname']); ?></a>】</span><span>浏览（<a href="/"><?php echo ($v['red']); ?></a>）</span><span>评论（<a href="/">30</a>）</span></p>
            <div class="dateview"><?php echo (date('Y-m-d',$v['wtime'])); ?></div>
          </div><?php endforeach; endif; ?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>我所怀恋的</span></a></div>
    <div class="topspaceinfo">
      <h1>坚持追求，欣赏生活</h1>
      <p>生活中处处有着选择，慎重面对，尊重选择</p>
    </div>
    <div class="about_c">
      <p>网名：书案上的那只笔</p>
      <p>职业：PHP程序员，Web后台程序员 </p>
      <p>籍贯：湖北 黄冈</p>
      <p>电话：13662012345</p>
      <p>邮箱：onlyLove193@qq.com</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php if(is_array($hots)): foreach($hots as $key=>$v): ?><li><a href="<?php echo U('New/index',['id'=>$v['aid']]);?>"><?php echo ($cols[$v]['title']); ?></a></li><?php endforeach; endif; ?>
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
        <?php if(is_array($recoms)): foreach($recoms as $key=>$v): ?><li><a href="<?php echo U('New/index',['id'=>$v['aid']]);?>"><?php echo ($cols[$v]['title']); ?></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">个人博客</a></li>
        <li><a href="/">技术社区</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">onlyLove193</a></p>
        <p></p>
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