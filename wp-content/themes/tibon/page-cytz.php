<?php 
/*
Template Name: cytz
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
	<div class="mini-slider">
		<div class="mini-control">
			<ul class="mini-cur">
				<li></li>
				<li class="current"></li>
				<li></li>
				<li></li>
				<li></li>
				<li class="stop"></li>
			</ul>
		</div>
		<div class="mini-item">
			<img src="<?php echo get_template_directory_uri(); ?>/image/longriver.jpg" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="content-box">
		<img src="<?php echo get_template_directory_uri(); ?>/image/cytz-img.jpg" class="cytz-img">
		<div class="content">
		<h1>加工产品 · 辐射全球</h1>
		<h4>Global radiation processed products</h4>
		<p class="w533">为进一步深化房地产行业的自律建设，促进我市房地产市场持续健康发展。推动“两宜”城市建设，依照《银川市房地产行业诚信企业评选办法》和《银川市诚信房地产开发企业评选标准》。《银川市诚信物业服务企业评选标准》、《银川市诚信供热企业评选标准》、《银川市诚信房地产经纪机构评选标准》、《银川市诚信房地产估价机构评选标准》综合评定，银川市房地产。</p>
		</div>
	</div>

</div>

<?php get_footer(); ?>