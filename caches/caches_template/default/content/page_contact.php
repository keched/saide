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
    	<div class="rt"><em class="fl"><?php echo $CAT['catname'];?></em><span class="fr">当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;>&nbsp;<?php echo preg_replace('/( \> )$/', '', catpos($catid));?></span></div>
        <!-- <div class="page-tab"><span class="pg-tab">公司概况</span>|<span>业务范围</span>|<span>企业理念</span>|<span>全球战略</span></div> -->
        <div class="page-show">
			<h1><img width="100%" src="<?php echo siteurl($siteid);?>/style/img/contact-t.jpg"/></h1>
			<div style="width:100%; border-bottom:1px solid #CCC;height:1px; margin-top:5px;"></div>
        	<div class="fr" style="width:442px;line-height:30px; text-align:right; ">
			<br/>
			<h2><img src="<?php echo siteurl($siteid);?>/style/img/img_14.jpg"/></h2>	
			<?php echo $content;?></div>
			<div class="fl" style="width:442px; font-family:'微软雅黑'; border-right:1px solid #CCC;margin-top:5px;">
				<br/>
				<h2><img src="<?php echo siteurl($siteid);?>/style/img/img_15.jpg"/></h2>	
				  <form method="post" action="http://localhost/wwwroot/index.php?m=formguide&c=index&a=show&formid=15&siteid=1" name="myform" id="myform">
				  <div class="contact_let_01">公司名称<span>(必填项)</span></div>
				  <div><input name="info[company]" id="company" type="text" class="rc_03"></div>
				  <div class="contact_let_01">您的名字<span>(必填项)</span></div>
				  <div><input name="info[name]" id="name" type="text" class="rc_03"></div>
				  <div class="contact_let_01">联系方式<span>(必填项)</span></div>
				  <div><input name="info[phone]" id="phone" type="text" class="rc_03"></div>
				  <div class="contact_let_01">邮箱<span></span></div>
				  <div><input name="info[email]" id="email" type="text" class="rc_03"></div>
				  <div class="contact_let_01">您的需求/要求/问题<span>(必填项)</span></div>
				  <div>
					<label for="textarea"></label>
					<textarea name="info[content]" id="content" cols="45" rows="5" class="rc_04"></textarea>
				  </div>
					<br/>
				   <input type="submit" name="dosubmit" id="dosubmit" value='发给我们' id='tijiao'>
				  </form>
			</div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>