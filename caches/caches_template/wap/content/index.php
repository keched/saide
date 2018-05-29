<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="breadcrumb">
产品推荐<em class="fr"><a href="<?php echo $CATEGORYS['50']['url'];?>">MORE+</a></em>
</div>
<div class="clear"></div>
<div class="i-img">
	<ul>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f40b9ba0d2884dbf5cd8e6bb52ec6124&action=position&posid=22&order=id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'id','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    	<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></li>
        <?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
<div class="clear"></div>
<div class="breadcrumb">
案例推荐<em class="fr"><a href="<?php echo $CATEGORYS['55']['url'];?>">MORE+</a></em>
</div>
<div class="clear"></div>
<div class="i-img">
	<ul>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=479ad7ef39d226c6a8e2695158a4dec9&action=position&posid=23&order=id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'id','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    	<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></li>
        <?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
<div class="clear"></div>
<div class="breadcrumb">
新闻资讯<em class="fr"><a href="<?php echo $CATEGORYS['49']['url'];?>">MORE+</a></em>
</div>
<div class="i-news">
<ul>
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fecf94fbbc6657f5d42936007f2e9f58&action=lists&catid=49&num=4&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'49','order'=>'id DESC','limit'=>'4',));}?>
   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
   <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
</div>
<?php include template("content","footer"); ?>