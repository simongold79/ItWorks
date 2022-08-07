<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
</head>
<body <?php body_class('mybodyclass'); ?>>

<header>

<div class="container">   
    <?php

if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
	<?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
	
<?php endif; ?>   
    <div class="logo-img" alt="itworks"><a href="<?php echo site_url(); ?>/">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a></div>

    <div id="desktop-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/manu.png" class="menu-pointer">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
    
    <div id="toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png">
    </div>
    <div id="popout">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu' ) ); ?>
    </div>

</div>

</header>