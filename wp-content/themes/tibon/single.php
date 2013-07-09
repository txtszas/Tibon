<?php 
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
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="title-info">
				<h2><?php the_title(); ?></h2>
				<div class="meta">
					<span class="time"><?php wan_posted_on(); ?></span>
				</div>

			</div>
			<div class="content">
					<?php the_content();?>
				</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php get_footer(); ?>
