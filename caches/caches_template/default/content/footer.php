<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="all scrollbot">
<div class="mr_frbox">
		<img class="mr_frBtnL prev" src="<?php echo siteurl($siteid);?>/style/img/left02.gif" width="18" height="55" />
		<div class="mr_frUl">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca7e68ccd16abc4e095dc08d0caae18e&action=position&posid=19&order=id&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'id','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><div class="zooms"></div><img alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>" /><p><?php echo $r['title'];?></p></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<img class="mr_frBtnR next" src="<?php echo siteurl($siteid);?>/style/img/right02.gif" width="18" height="55" />
</div>
</div>
<script type="text/javascript">
$(".mr_frbox").slide({
	titCell:"",
	mainCell:".mr_frUl ul",
	autoPage:true,
	effect:"leftLoop",
	autoPlay:true,
	vis:6
});
</script>
<div class="footer">
	<div class="foot">
    	<div class="all">
        	<div class="fl foot-left">
            	<h4>快速导航 Quick navigation</h4>
                <ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="fl foot-left" style=" margin-left:70px;">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<h4>联系我们 contact us</h4>
                 <p>Tel：<?php echo $r['hot_tel'];?></p>		
                <p>E-mail：<?php echo $r['email'];?></p>
                 <p>24 hours Hotline: <?php echo $r['tel'];?></p>
                <p>Add：<?php echo $r['address'];?></p>
                
                
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="fr foot-left">
<br><br>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<h4><img width="257" src="<?php echo $r['logo'];?>" /></h4>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
        </div>
        <div class="clear"></div>
        
    </div>
    <div class="copyright">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <p>Copyright © 2015-2018 angzi.net Rights Reserved.　版权所有帝赛德机械(苏州)有限公司    <?php echo $r['beian'];?>   &nbsp; &nbsp; <!-- 技术支持：<a href="http://www.51soing.com">慕名网络科技</a> --> &nbsp; &nbsp;<a href="http://www.miitbeian.gov.cn/">工信部备案查询</a>  &nbsp; &nbsp; &nbsp; &nbsp;               
        <a href="http://webscan.360.cn/index/checkwebsite/url/www.disaide.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/49436f3b4ad7d57cc2c8f2f080a1c6a9"/></a></p>

		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
</div>
<script src="<?php echo siteurl($siteid);?>/style/top.js" type="text/javascript"></script>
	<div class="floating_ck">
		<dl>
			<dt></dt>
			<dd class="consult">
				<a href="http://wpa.qq.com/msgrd?v=3&uin=457449498&site=qq&menu=yes"><img src="<?php echo siteurl($siteid);?>/style/img/zxicon.png"/></a>
			</dd>
			<dd class="words">
				<a href="http://wpa.qq.com/msgrd?v=3&uin=457449498&site=qq&menu=yes"><img src="<?php echo siteurl($siteid);?>/style/img/zxicon2.png"/></a>
			</dd>
			<dd class="quote">
				<a href="http://wpa.qq.com/msgrd?v=3&uin=3028614340&site=qq&menu=yes"><img src="<?php echo siteurl($siteid);?>/style/img/kficon.png"/></a>
			</dd>
			<dd class="shouhou">
				<a href="http://wpa.qq.com/msgrd?v=3&uin=3028614340&site=qq&menu=yes"><img src="<?php echo siteurl($siteid);?>/style/img/shouhou.png"/></a>
			</dd>
			<dd class="qrcord">
				
				<div class="floating_left floating_ewm">
					<i></i>
					<p class="qrcord_p01">扫一扫</p>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<p class="qrcord_p02">全国免费服务热线<br><b><?php echo $r['tel'];?><b></p>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</dd>
			<dd class="return">
				<span onClick="gotoTop();return false;">返回顶部</span>
			</dd>
		</dl>
	</div>

<script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-189129-0']);

_mvq.push(['$logConversion']);
(function() {
var mvl = document.createElement('script');
mvl.type = 'text/javascript'; mvl.async = true;
mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mvl, s);
})();

</script>
<script type="text/javascript" src="//s.union.360.cn/153127.js" async defer></script>
</body>
</html>