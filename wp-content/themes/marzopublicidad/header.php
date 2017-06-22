<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php bloginfo('name'); ?> <?php is_front_page() ? '' : '|' . wp_title(''); ?></title>
	<meta name="description" content="<?php if ( is_single() ) {single_post_title('', true); } else {bloginfo('description'); } ?>" />
	<meta name="keywords" content="#">
	<meta name="robots" content="index, follow">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<link rel="icon" type="image/png" href="#" sizes="64x64">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
	<meta property="og:title" content="<?php is_front_page() ? bloginfo('name') : wp_title(''); ?>">
	<meta property="og:description" content="<?php if ( is_single() ) {single_post_title('', true); } else {bloginfo('description'); } ?>">
	<meta property="og:image" content="#">
	<meta name="twitter:site" content="@marzopublicidad">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
	<meta name="twitter:title" content="<?php is_front_page() ? bloginfo('name') : wp_title(''); ?>">
	<meta name="twitter:description" content="<?php if ( is_single() ) {single_post_title('', true); } else {bloginfo('description'); } ?>">
	<meta name="twitter:image" content="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85450073-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class(); ?>>
<div class="separator"></div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-bar">
                    <div class="visible-sm visible-xs">
                        <i class="fi flaticon-menu"></i>
                        <i class="fi flaticon-close"></i>
                    </div>
                    <?php wp_nav_menu( array('theme_location' => 'main-menu' , 'container' => 'nav', 'menu_class' => 'main-menu pull-right') ); ?>
                </div>
                <?php if(is_front_page()){ ?>
                    <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name'); ?>">
                        <img class="big-logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo_marzo_marketing.png" alt="Logo Marzo Publicidad">
                    </a>
                <?php }else{ ?>
                    <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name'); ?>">
                        <img class="small-logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo_marzo_marketing.png" alt="Logo Marzo Publicidad" width="200">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>