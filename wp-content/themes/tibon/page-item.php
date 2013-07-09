<?php 
/*
Template Name: item
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
	<img src="<?php echo get_template_directory_uri(); ?>/image/weilai-ad.png" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/image/itemshow.jpg" alt="" class="itemshow">
	<div class="content-boxB">
		<img src="<?php echo get_template_directory_uri(); ?>/image/text-ad.png" class="text-ad">
		<div class="ad-contet">
			<img src="<?php echo get_template_directory_uri(); ?>/image/text-ad2.jpg" class="text-ad2">
			<img src="<?php echo get_template_directory_uri(); ?>/image/weilai-img-ad.jpg" class="img-ad">
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
