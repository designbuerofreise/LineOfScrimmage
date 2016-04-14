<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php 
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_head(); 
	?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" media="all" />

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo("name"); ?> RSS-Feed" href="<?php echo home_url(); ?>/?feed=rss2" />

	<meta name="language" content="deutsch, de" />

	<title><?php (wp_title("|",0,"right")!="")?wp_title(" | ",true,"right"):''; ?><?php bloginfo('name'); ?><?php echo (get_bloginfo("description")!="")?" - ".get_bloginfo("description"):"" ?></title>
	
    <script src="<?php echo get_template_directory_uri();?>/js/dist/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/respond.js"></script>

</head>

<body <?php body_class(); ?>>

	<div id="sniffer">&nbsp;</div><!-- Zur Feststellung ob Smartphone oder Desktop -->

		<div id="wrapall">
	
		<header id="header" class="noprint">
			<div class="wrap">
				<a id="rwd_menu_link"></a>
				<div id="nav">
					<nav class="main">
						<?php wp_nav_menu(array("theme_location"=>"main")); ?>
					</nav>
					<a href="<?php echo home_url();?>" class="logo"><?php bloginfo('name'); ?></a>
					<div class="clear"></div>
				</div>
			</div>
			<div id="mobile_menu"><?php wp_nav_menu(array("theme_location"=>"mobile")); ?></div>
		</header>

		<div class="wrap">

		<section id="content" class="clear">
