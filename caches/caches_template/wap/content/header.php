<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html lang="zh-CN">
<meta charset="UTF-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<link rel="stylesheet" href="<?php echo siteurl($siteid);?>/wap-style/jscss/wap.css" />
<link href="<?php echo siteurl($siteid);?>/wap-style/jscss/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo siteurl($siteid);?>/wap-style/jscss/jquery-1.11.1.min.js"></script>
<body>
<div class="logo"><img src="<?php echo siteurl($siteid);?>/wap-style/img/logo.jpg"></div>
<nav>
<a href="<?php echo siteurl($siteid);?>">网站首页</a>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</nav>
<div class="clear"></div>
<div class="kePublic">
<!--效果html开始-->
	<div class="slider">
	  <ul>
	    <li><img src="<?php echo siteurl($siteid);?>/wap-style/img/slide1.jpg"></li>
		<li><img src="<?php echo siteurl($siteid);?>/wap-style/img/slide2.jpg"></li>
        <li><img src="<?php echo siteurl($siteid);?>/wap-style/img/slide3.jpg"></li>
	  </ul>
	</div>
  <script type="text/javascript" src="<?php echo siteurl($siteid);?>/wap-style/jscss/yxMobileSlider.js"></script>
  <script>
    $(".slider").yxMobileSlider({width:640,during:3000})
  </script>
<!--效果html结束-->
</div>

