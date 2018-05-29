<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main">
	<div class="fl left">
    	<?php include template("content","sidebar"); ?>
    </div>
    <div class="fr right">
    	<div class="rt"><em class="fl"><?php echo $CAT['catname'];?></em><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
        <div class="products">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f0cdf546b52a9185dfc6fff7dc93cb3e&action=lists&catid=%24catid&num=16&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 16;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        	<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" /><p><?php echo $r['title'];?></p></a></li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="clear"></div>
            <div class="page"><?php echo $pages;?></div>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>