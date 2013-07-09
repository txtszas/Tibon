<?php 
/*
Template Name: about
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
		<div class="side-title-info">
			<img src="<?php echo get_template_directory_uri(); ?>/image/about-title.png" >
		</div>
		<div class="side-text">
			<p>5月21日下午4点30分，2013年广州万科品牌暨产品发布会在荔湾湖公园荔园内举行，极具特色的岭南元素贯穿发布会始终。万科集团执行副总裁，广深区域总经理张纪文、广深区域副总经理丁健、副总经理王维忠、广州万科总经理唐激杨、广东省房地产行业协会秘书长王、副秘书长黄毅文、副秘书长李巧环、媒体朋友、合作方代表、万科业主代表及广州万科管理层等百余名嘉宾共同出席。2012年广州万科登顶百亿高峰，十年深耕，与城市发展齐飞。当天，在“融合共生”的主题下，广州万科与嘉宾共同回顾十年发展历程，发布2013年品牌主题——“大道当然，精细致远”，并解读未来发展战略及四大产品系列。
			</p>
			<p>5月21日下午4点30分，2013年广州万科品牌暨产品发布会在荔湾湖公园荔园内举行，极具特色的岭南元素贯穿发布会始终。万科集团执行副总裁，广深区域总经理张纪文、广深区域副总经理丁健、副总经理王维忠、广州万科总经理唐激杨、广东省房地产行业协会秘书长王、副秘书长黄毅文、副秘书长李巧环、媒体朋友、合作方代表、万科业主代表及广州万科管理层等百余名嘉宾共同出席。2012年广州万科登顶百亿高峰，十年深耕，与城市发展齐飞。当天，在“融合共生”的主题下，广州万科与嘉宾共同回顾十年发展历程，发布2013年品牌主题——“大道当然，精细致远”，并解读未来发展战略及四大产品系列。</p>
			<img src="<?php echo get_template_directory_uri(); ?>/image/about-img.jpg" alt="">
		</div>

	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
