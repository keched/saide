<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="main">
	<div class="fl left">
    	<?php include template("content","sidebar"); ?>
    </div>
    <script type="text/javascript">
	$(document).ready(function(){
		var $tab_li = $('.page-tab span');
		$tab_li.click(function(){
			$(this).addClass('pg-tab').siblings().removeClass('pg-tab');
			var index = $tab_li.index(this);
			$('div.page-show > div').eq(index).show().siblings().hide();
		});	
	});
	</script>
    <div class="fr right">
    	<div class="rt"><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
        <div class="page-tab"><span class="pg-tab">技术参数</span>|<span>产品特点</span><!-- |<span>在线服务</span> --></div>
        <div class="page-show">
        	<div><div><p class="fr" style="width:370px;margin:20px;"><img width="370" src="<?php echo $thumb;?>"/><a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=457449498&site=qq&menu=yes" target="_blank"><img src="<?php echo siteurl($siteid);?>/style/img/qqzixun.png"/></a></p><?php echo $canshu;?></div></div>
            <div class="hide"><div><p class="fr" style="width:370px;margin:20px;"><img width="370" src="<?php echo $thumb;?>"/><a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=457449498&site=qq&menu=yes" target="_blank"><img src="<?php echo siteurl($siteid);?>/style/img/qqzixun.png"/></a></p><?php echo $content;?></div></div>
            <!-- <div class="hide"><div><p class="fr" style="width:370px;margin:20px;"><img width="370" src="<?php echo $thumb;?>"/><a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&uin=457449498&site=qq&menu=yes" target="_blank"><img src="<?php echo siteurl($siteid);?>/style/img/qqzixun.png"/></a></p><?php echo $hangye;?></div></div> -->
        </div>
    </div>
    <div class="clear"></div>
</div>
<script type="text/javascript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>