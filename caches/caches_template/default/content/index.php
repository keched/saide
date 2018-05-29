<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/style/my.js"></script>
<div class="home-cate">
	
	<div class="home-cates">
		
        <div class="hc-div-cate hc-div-cate1"><?php echo $CATEGORYS['14']['catname'];?></div>
        <div class="hc-div hc-div1">
            <div class="hc-div-t"><?php echo $CATEGORYS['14']['catname'];?></div>
            <ul >
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9ddb6559ec5697f251833c376c1ea80b&action=category&catid=14&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['14']['url'];?>"><img alt="<?php echo $CATEGORYS['14']['catname'];?>" src="<?php echo $CATEGORYS['14']['image'];?>" /></a></li>
            </ul>
        </div>
		
    </div>
	
	
    <div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate2"><?php echo $CATEGORYS['15']['catname'];?></div>
        <div class="hc-div hc-div2">
            <div class="hc-div-t"><?php echo $CATEGORYS['15']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0de22f63172861f3a40ca1ce8c9e3544&action=category&catid=15&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'15','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['15']['url'];?>"><img alt="<?php echo $CATEGORYS['15']['catname'];?>" src="<?php echo $CATEGORYS['15']['image'];?>" /></a></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate3"><?php echo $CATEGORYS['20']['catname'];?></div>
        <div class="hc-div hc-div3">
            <div class="hc-div-t"><?php echo $CATEGORYS['20']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8298e51fe61f4832cce726d990416563&action=category&catid=20&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'20','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['20']['url'];?>"><img alt="<?php echo $CATEGORYS['20']['catname'];?>" src="<?php echo $CATEGORYS['20']['image'];?>" /></a></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate4"><?php echo $CATEGORYS['21']['catname'];?></div>
        <div class="hc-div hc-div4">
            <div class="hc-div-t"><?php echo $CATEGORYS['21']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f2e41063259ad4448f5d9999f4eef168&action=category&catid=21&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'21','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['21']['url'];?>"><img alt="<?php echo $CATEGORYS['21']['catname'];?>" src="<?php echo $CATEGORYS['21']['image'];?>" /></a></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate5"><?php echo $CATEGORYS['22']['catname'];?></div>
        <div class="hc-div hc-div5">
            <div class="hc-div-t"><?php echo $CATEGORYS['22']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c645b5f261ee773aea39638f802a5e8d&action=category&catid=22&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['22']['url'];?>"><img alt="<?php echo $CATEGORYS['22']['catname'];?>" src="<?php echo $CATEGORYS['22']['image'];?>" /></a></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate6"><?php echo $CATEGORYS['23']['catname'];?></div>
        <div class="hc-div hc-div6">
            <div class="hc-div-t"><?php echo $CATEGORYS['23']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80517c217548818bf1c628641d88ec27&action=category&catid=23&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'23','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['23']['url'];?>"><img alt="<?php echo $CATEGORYS['23']['catname'];?>" src="<?php echo $CATEGORYS['23']['image'];?>" /></a></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate7"><?php echo $CATEGORYS['24']['catname'];?></div>
        <div class="hc-div hc-div7">
            <div class="hc-div-t"><?php echo $CATEGORYS['24']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0aa33d1183744875b0fb590467be2050&action=category&catid=24&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'24','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['24']['url'];?>"><img alt="<?php echo $CATEGORYS['24']['catname'];?>" src="<?php echo $CATEGORYS['24']['image'];?>" /><a href="<?php echo $CATEGORYS['24']['url'];?>"></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate8"><?php echo $CATEGORYS['25']['catname'];?></div>
        <div class="hc-div hc-div8">
            <div class="hc-div-t"><?php echo $CATEGORYS['25']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e28c8cbe37b5947d17a977b5754144cd&action=category&catid=25&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'25','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><a href="<?php echo $CATEGORYS['25']['url'];?>"><img alt="<?php echo $CATEGORYS['25']['catname'];?>" src="<?php echo $CATEGORYS['25']['image'];?>" /><a href="<?php echo $CATEGORYS['25']['url'];?>"></li>
            </ul>
        </div>
    </div>
	<!-- <div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate9"><?php echo $CATEGORYS['26']['catname'];?></div>
        <div class="hc-div hc-div9">
            <div class="hc-div-t"><?php echo $CATEGORYS['26']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=46a3a8f736b719cf9c522eac78bc8b2c&action=category&catid=26&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'26','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><img alt="<?php echo $CATEGORYS['26']['catname'];?>" src="<?php echo $CATEGORYS['26']['image'];?>" /></li>
            </ul>
        </div>
    </div>
	<div class="home-cates ml-38">
        <div class="hc-div-cate hc-div-cate10"><?php echo $CATEGORYS['27']['catname'];?></div>
        <div class="hc-div hc-div10">
            <div class="hc-div-t"><?php echo $CATEGORYS['27']['catname'];?></div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=abf1bbc6c301bf1b9a3ef614c0710548&action=category&catid=27&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'27','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <li class="hc-div-img"><img alt="<?php echo $CATEGORYS['27']['catname'];?>" src="<?php echo $CATEGORYS['27']['image'];?>" /></li>
            </ul>
        </div>
    </div> -->
</div>
<div class="clear"></div>

<div class="scroll">
<div class="mr_frbox">
		<img class="mr_frBtnL prev" src="<?php echo siteurl($siteid);?>/style/img/left02.gif" width="18" height="55" />
		<div class="mr_frUl">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e53c2dc4b2ba109988266306e64f85ec&action=position&posid=18&order=id&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'id','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				

				<li>
				<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
				<div class="mask"></div>
				<div class="zoom"></div>
				<img alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>" /><p><?php echo $r['title'];?></p>
				</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<img class="mr_frBtnR next" src="<?php echo siteurl($siteid);?>/style/img/right02.gif" width="18" height="55" />
</div>
</div>

<div class="m-img">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<div class="m-img-tel">致电：<?php echo $r['tel'];?></div>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	<p align="center"><a href="<?php echo $CATEGORYS['9']['url'];?>"><img src="<?php echo siteurl($siteid);?>/style/img/jj.png"/></a></p>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var $tab_li = $('.tab-t span');
	$tab_li.click(function(){
		$(this).addClass('tabcon').siblings().removeClass('tabcon');
		var index = $tab_li.index(this);
		$('div.tab-info > div').eq(index).show().siblings().hide();
	});	
});
</script>
<div class="tabs"><!-- 
	<div class="tab-t">
    	<span class="tabcon"><img src="<?php echo siteurl($siteid);?>/style/img/s1.png" />公司概况</span>
        <span><img src="<?php echo siteurl($siteid);?>/style/img/s2.png" />核心优势</span>
        <span><img src="<?php echo siteurl($siteid);?>/style/img/s3.png" />新闻动态</span>
    </div>
    <div class="tab-info">
    	<div>
        	<h1><img src="<?php echo siteurl($siteid);?>/style/img/about.png" /></h1>
            <div class="tab-infos">
            	<div class="fl">
                	<div>
                        <div class="slider" id="slider">
                            <ul class="sliderbox">
                                <li>
                                    <a><img src="<?php echo siteurl($siteid);?>/style/img/slider1.jpg" alt="帝赛德锯床"></a>
                                </li>
                                <li>
                                    <a><img src="<?php echo siteurl($siteid);?>/style/img/slider2.jpg" alt="帝赛德锯床"></a>
                                </li>
                                <li>
                                    <a><img src="<?php echo siteurl($siteid);?>/style/img/slider3.jpg" alt="帝赛德锯床"></a>
                                </li>
                            </ul>
                            <ul class="slidernav"></ul>
                            
                            <div class="prev"></div>
                            <div class="next"></div>
                        </div>
                    </div>
                </div>
                <div class="fr">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="about"><?php echo $r['content'];?></div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="see-more" style="text-align:right;"><a href="<?php echo $CATEGORYS['10']['url'];?>">[查看详情]</a></div>
                </div>
            </div>
        </div>
        <div class="hide">
        	<h1><img src="<?php echo siteurl($siteid);?>/style/img/youshi.png" /></h1>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3172ce857d13e7d0f544b7fe5a119990&action=lists&catid=1&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="tab-infos">
            	<?php echo $r['youshi'];?>
            </div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="more"><a href="<?php echo $CATEGORYS['6']['url'];?>">查看更多内容...</a></div>
        </div>
        <div class="hide">
        	<h1><img src="<?php echo siteurl($siteid);?>/style/img/news.png" /></h1>
            
            
            <div class="home-news">
            	<ul> -->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b410927d6aa0abccff78a0a4b181e2f&action=lists&catid=3&num=6&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'id DESC','limit'=>'6',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li>
                    	<div class="date">
                            <div style=" background:#CCC; font-size:24px; color:#666;"><?php echo date('d',$r[inputtime]);?></div>
                            <div style="font-size:14px; color:#666;"><?php echo date('F',$r[inputtime]);?></div>
                        </div>
                        <div class="news-info">
                        	<h4><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],50,'...');?></a></h4>
                            <p><?php echo str_cut($r[description],150,'...');?></p>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div class="clear"></div>
            </div>
            <div style="height:100px;"></div>
            <div class="more"><a href="<?php echo $CATEGORYS['3']['url'];?>">查看更多内容...</a></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/style/power-slider.js"></script>
<script type="text/javascript">
    $(function(){  
        $("#slider").powerSlider({handle:"fadeTo"});
        //$("#text").powerSlider();
        //$("#img").powerSlider({picNum:4,handle:"hide"});
        $(".code h3 span").each(function(i){
        	$(this).click(function(){
        		$(this).addClass("active").siblings().removeClass("active");
        		$(".code pre").eq(i).show().siblings("pre").hide();
        	})
        })
    });
</script>
<div class="clear"></div>
<script src="<?php echo siteurl($siteid);?>/style/scrollleft.js"></script>
<div class="custom">
	<div class="all">
    	<h1><img src="<?php echo siteurl($siteid);?>/style/img/part.png" /></h1>
        <div class="part scrollleft">
        	<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=71b8fb526e63990acf7db55878feca64&action=lists&catid=45&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'45','order'=>'id DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li><a href="<?php echo $CATEGORYS['45']['url'];?>"><img src="<?php echo $r['thumb'];?>" /><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
		$(document).ready(function(){
		
			$(".scrollleft").imgscroll({
				speed: 40,    //图片滚动速度
				amount: 0,    //图片滚动过渡时间
				width: 1,     //图片滚动步数
				dir: "left"   // "left" 或 "up" 向左或向上滚动
			});
			
		 });
		</script>
<?php include template("content","footer"); ?>