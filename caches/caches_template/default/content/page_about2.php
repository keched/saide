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
        <div class="page-tab"><span>公司概况</span>|<span>业务范围</span>|<span class="pg-tab">企业理念</span>|<span>全球战略</span></div>
        <div class="page-show">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4e75c79477bc5aee90e7153135cb0005&sql=SELECT+%2A+FROM+v9_page+where+catid%3D10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=10 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2f58b9ef8319b6745d7904b88b08725e&sql=SELECT+%2A+FROM+v9_page+where+catid%3D11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=11 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=efc81d25189d684101b283fc699aa293&sql=SELECT+%2A+FROM+v9_page+where+catid%3D12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=12 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3d22078240d3d4277acb841b6704caf7&sql=SELECT+%2A+FROM+v9_page+where+catid%3D13\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=13 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
        	<div class="hide"><?php echo $r['content'];?></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>