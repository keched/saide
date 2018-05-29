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
        <div class="page-tab"><span class="pg-tab">服务承诺</span>|<span>服务流程</span>|<span>服务标准</span>|<span>定制服务</span></div>
        <div class="page-show">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=060638e4f077d484ce18ab74be3e3236&sql=SELECT+%2A+FROM+v9_page+where+catid%3D37\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=37 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7b4a666cfbc7703bd38673becbf601e0&sql=SELECT+%2A+FROM+v9_page+where+catid%3D38\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=38 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d4be0815ba6de24b97c607a2bc28befe&sql=SELECT+%2A+FROM+v9_page+where+catid%3D41\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=41 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ddf029a2da825c86714d3c18d863fe82&sql=SELECT+%2A+FROM+v9_page+where+catid%3D42\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=42 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			
            
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>