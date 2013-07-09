<?php 
/*
Template Name: dcdl
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
	<div class="content-box">
		<img src="<?php echo get_template_directory_uri(); ?>/image/dcdl.jpg"  class="dcdl-img">
	</div>
</div>

<?php get_footer(); ?>
