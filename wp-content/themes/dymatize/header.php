<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.mincss" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.almost-flat.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/sticky.almost-flat.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/slideshow.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/slidenav.min.css" />

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<div class="wrap uk-container-center">
			<div id="offcanvas" class="uk-offcanvas">
	            <div class="uk-offcanvas-bar" mode="push">
	            	<?php
	            		if(is_front_page())
	            			 wp_nav_menu(array('menu'=>'MainMenu', 'container'=>'', 'menu_class' => 'uk-nav uk-nav-offcanvas'));
                    	else
                    		 wp_nav_menu(array('menu'=>'SpMenu', 'container'=>'', 'menu_class' => 'uk-nav uk-nav-offcanvas'));
                    ?>
	            </div>
	        </div>
<!-- 			<div id="header">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div> -->
			<div id="header">
	            <header>
	                <div class="navTop">
	                    <div class="uk-container uk-container-center">
	                        <div class="uk-grid itemCenter">
	                        	<?php if(is_single()){ ?>
									<h2 class="uk-width-large-1-4 uk-text-center-small uk-width-medium-1-4 uk-hidden-medium"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logoDetail.png"></a></h2>
								<?php }else{ ?>
	                            	<h2 class="uk-width-large-1-4 uk-text-center-small uk-width-medium-1-4 uk-hidden-medium"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></h2>
								<?php } ?>
	                            <nav class="uk-width-large-3-4 uk-width-medium-1-1 uk-text-right" data-uk-scrollspy-nav="{topoffset:-200, closest:'li a', smoothscroll:{offset: 59}}">
	                                <div class="uk-hidden-medium">
	                                    <?php
	                                    	if(is_front_page())
	                                     wp_nav_menu(array('menu'=>'MainMenu', 'container'=>''));
	                                 	else
	                                 		wp_nav_menu(array('menu'=>'SpMenu', 'container'=>''));
	                                 	?>

	                                </div>
	                                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-medium" data-uk-offcanvas></a>
	                                <a href="#" class="uk-navbar-brand uk-hidden-large uk-navbar-center"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
	                                </a>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	               