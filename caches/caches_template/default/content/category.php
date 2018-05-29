<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main">
	<div class="fl left">
		<?php include template("content","sidebar"); ?>
    </div>
    <div class="fr right">
    	<div class="rt"><em class="fl">新闻动态/<i>NEWS</i></em><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
		<div class="page-tab"><span class="pg-tab"><a href="<?php echo $CATEGORYS['39']['url'];?>">公司新闻</a></span>|<span><a href="<?php echo $CATEGORYS['40']['url'];?>">行业资讯</a></span></div>
        <div class="clear"></div>
        <div class="news">
        	<div class="news-top">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=23dd93cd89532ea36c8e36453114ab7d&action=position&posid=2&order=id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'id','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<div class="fl news-top-left"><img src="<?php echo $r['thumb'];?>" /></div>
                <div class="fl news-top-right">

                	<h2><?php echo $r['title'];?></h2>
                    <p><?php echo $r['description'];?><a href="<?php echo $r['url'];?>">【详细】</a></p>
                </div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="clear"></div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20d4e2ae1f91ae804a512503d2bd2285&action=lists&catid=%24catid&num=5&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                		<div class="date">
                            <div style=" background:#CCC; font-size:24px; color:#666;"><?php echo date('d',$r[inputtime]);?></div>
                            <div style="font-size:14px; color:#666;"><?php echo date('F',$r[inputtime]);?></div>
                        </div>
                        <div class="news-info news-li">
                        	<h4><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h4>
                            <p><?php echo $r['description'];?><a href="<?php echo $r['url'];?>">【详细】</a></p>
                        </div>
                </li>
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