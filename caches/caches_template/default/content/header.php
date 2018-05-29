<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="shortcut icon" href="<?php echo siteurl($siteid);?>/favicon.ico">
<link rel="stylesheet" href="<?php echo siteurl($siteid);?>/style/base.css" />
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/style/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/style/jquery.kinMaxShow-1.1.min.js"></script>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/style/scrollpicleft.js"></script>




<script type="text/javascript">
	$(function(){
		$("#kinMaxShow").kinMaxShow();
	});
</script>
<script>
//设为首页
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
        obj.setHomePage(url);
    }catch(e){
        if(window.netscape){
            try{
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            }catch(e){
                alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
            }
        }else{
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
        }
    }
}
 
//收藏本站
function AddFavorite(title, url) {
    try {
        window.external.addFavorite(url, title);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(title, url, "");
        }
        catch (e) {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}
</script>

<script type="text/javascript">
    var pc_style = ""
    var browser = {
        versions: function () {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1,
                presto: u.indexOf('Presto') > -1,
                webKit: u.indexOf('AppleWebKit') > -1,
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/) && u.indexOf('QIHU') && u.indexOf('Chrome') < 0,
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1,
                iPad: u.indexOf('iPad') > -1,
                webApp: u.indexOf('Safari') == -1,
                ua: u
            };
        }(),
        language: (navigator.browserLanguage || navigator.language).toLowerCase()
    }
    if (browser.versions.mobile && !browser.versions.iPad) {
        this.location = "http://localhost/wwwroot/wap/index.html";
    }
</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?89297472cca9ce9a1c86d347af11c354";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body oncopy="return false" onselect="return false" onselectstart="return false" oncontextmenu="return false">
<div class="top">
	<div class="fl black"></div>
    <div class="fr red"></div>
    <div class="top-info">
        <div class="fl">欢迎光临帝赛德机械（苏州）有限公司！</div>
        <div class="fl search">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <span class="fl"><img src="<?php echo siteurl($siteid);?>/style/img/tel.png" />电话：<?php echo $r['tel'];?></span>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <form action="<?php echo APP_PATH;?>index.php" method="get">
			<input type="hidden" name="m" value="search"/>
			<input type="hidden" name="c" value="index"/>
			<input type="hidden" name="a" value="init"/>
			<input type="hidden" name="typeid" value="3" id="typeid"/>
			<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
        	<input type="text" name="q" class="fl q" value="请输入搜索关键词" onFocus="if(value=='请输入搜索关键词'){value=''}" onblur="if(value=='') {value='请输入搜索关键词'}"/>
            <input type="submit" class="fl sub" value="" title="搜索"/>
        </form>
        </div>
        <div class="fr"><a href="javascript:void(0);" onclick="AddFavorite('<?php echo $SEO['site_title'];?>',location.href)">收藏帝赛德</a> | <a href="javascript:void(0);" onclick="SetHome(this,'<?php echo siteurl($siteid);?>');">帝赛德设为首页</a></div>
    </div>
</div>
<div class="header">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<div class="fl logo"><img width="257" src="<?php echo $r['logo'];?>" alt="<?php echo $SEO['site_title'];?>"/></div>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="fr menu">
    	<ul>
        	<li><a href="<?php echo siteurl($siteid);?>">网站首页</a></li>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="li"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
				<div>
					<ul class="fl div-nav">
						<?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $v) { ?>
						<li><a href="<?php echo $v['url'];?>">-<?php echo $v['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					</ul>
					<span class="fr div-img"><img src="<?php echo $r['image'];?>"/></span>
				</div>
            </li>
            <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<div class="banner">
    <div id="kinMaxShow">
        <div><img alt="帝赛德机械（苏州）有限公司" src="<?php echo siteurl($siteid);?>/style/img/banner1.jpg" /></div>
        <div><img alt="帝赛德机械（苏州）有限公司" src="<?php echo siteurl($siteid);?>/style/img/banner2.jpg" /></div>
        <div><img alt="帝赛德机械（苏州）有限公司" src="<?php echo siteurl($siteid);?>/style/img/banner3.jpg" /></div>
    </div>
</div>