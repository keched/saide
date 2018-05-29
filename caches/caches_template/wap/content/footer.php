<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="clear"></div>

<div class="footer">

	<p>Copyright © 2015 <?php echo $SEO['site_title'];?></p>

	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>

	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

    <p>电话：<?php echo $r['hot_tel'];?> 邮箱：<a href="tel:<?php echo $r['hot_tel'];?>"><?php echo $r['email'];?></a></p> 

    <p>地址：苏州市吴中区金陵东路268号</p>

	<?php $n++;}unset($n); ?>

	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?89297472cca9ce9a1c86d347af11c354";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>

</html>



