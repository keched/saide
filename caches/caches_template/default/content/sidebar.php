<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    	<div class="cate">
        	<h1><img src="<?php echo siteurl($siteid);?>/style/img/cate-t.png" /></h1>
            <dl>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1bd31b0ddcda8e98a98ea87132151f0&action=category&catid=4&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'4','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					
					<dt class="<?php echo $r['dts'];?>"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></dt>
					<?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $t) { ?>
					<dd><a href="<?php echo $t['url'];?>"><?php echo $t['catname'];?></a></dd>
					<?php $n++;}unset($n); ?>
					
				
               
                
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>