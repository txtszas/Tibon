<?php 
/*
Template Name: contact
*/

get_header();
?>
<div class="top-banner">
</div>

<div class="breadcrumbs">
	<div class="container">
	<?php if(function_exists('bcn_display')) {
	    bcn_display();
	}
	?>
	</div>
</div>
<div class="container">
	<?php
	include (TEMPLATEPATH . '/sidebar.php');
	?>
	<div class="side-content">
		<div class="address">
			<p>联系：德力邦（中国）投资管理有限公司</p>
			<p><span class="mr50">中国 北京市 朝阳区</span>电话：+86 10 84150403</p>
			<p><span class="mr60">四惠东718文化创意园 5号</span>传真：+86 10 84150403</p>
			<p>邮编：100021</p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/image/map1.png" class="map">
		<div class="address">
			<p>联系：德力邦（中国）投资管理有限公司西北分公司</p>
			<p><span class="mr50">中国 宁夏 银川市 兴庆区</span>电话：+86 951 6197247</p>
			<p><span class="mr70">进宁北街中房梅园9楼</span>传真：+86 951 6197247</p>
			<p>邮编：100021</p>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/image/map2.png" class="map">
	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
