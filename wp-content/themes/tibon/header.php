<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	<script src="http://127.0.0.1:8000/con/assets/js/f5.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/typo.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php
		wp_head();
	?>
</head>
<body>
		<header>
			<div class="banner container">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="德力邦" class="logo">
				</a>
			</div>
			<nav>
				<ul class="menu container">
					<li class="index current"><a href="/">首页</a></li>
					<li class="dckf"><a href="/%E5%9C%B0%E4%BA%A7%E5%BC%80%E5%8F%91">地产开发</a></li>
					<li class="dcdl"><a href="">地产代理</a></li>
					<li class="cytz"><a href="">产业投资</a></li>
					<li class="zjdlb"><a href="">走进德力邦</a></li>
				</ul>
			</nav>
		</header>