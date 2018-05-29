<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="main">
	<div class="fl left">
    	<?php include template("content","sidebar"); ?>
    </div>
    <div class="fr right">
    	<div class="rt"><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
        <div class="con-tt">
            <h2><?php echo $title;?></h2>
            <p><span>发布时间：<?php echo date('Y-m-d',time($inputtime));?></span><span>浏览次数：<span id="hits"></span>次</span>  </p>
        </div>
        <div class="news-show"><?php echo $content;?></div>
        <div class="pn">
             <p>上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></p>
             <p>下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></p>
        </div>
    </div>
    <div class="clear"></div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>