<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php
 if($child){
     $child_arrary=explode(',',$arrchildid);
        $to_url=$CATEGORYS[$child_arrary[1]][url];
  echo "<script>window.location.href='".$to_url."'</script>";
    }
?>
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
    	<div class="rt"><em class="fl"><?php echo $CAT['catname'];?></em><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
        <!-- <div class="page-tab"><span class="pg-tab">公司概况</span>|<span>业务范围</span>|<span>企业理念</span>|<span>全球战略</span></div> -->
        <div class="page-show">
        	<?php echo $content;?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>