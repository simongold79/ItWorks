<?php
/*
Template Name: Media Ar
*/
?>
  <?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/tabs-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/media.css'); ?>" rel="stylesheet" type="text/css" >

<!--<div class="company-image">
	<h1><?php _e(the_field('company_header')) ?></h1>
</div>-->
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active squ squ-1">
        <a data-toggle="tab" href="#home">
            <div class="desktop-menu-li">
                <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/video.png"); ?>
                <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/video02.png"); ?>
            </div>
            <div class="mobile-menu-li mobile-menu-li-1"><span><?php _e(the_field('video')) ?></span></div>
        </a>
    </li>
    <li class="squ squ-2">
        <a data-toggle="tab" href="#menu1">
            <div class="desktop-menu-li">
                <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/pics.png"); ?>
                <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/pics02.png"); ?>
            </div>
            <div class="mobile-menu-li mobile-menu-li-2"><span><?php _e(the_field('images')) ?></span></div>
        </a>
    </li>
    <li class="squ squ-3">
        <a data-toggle="tab" href="#menu2">
            <div class="desktop-menu-li">
                <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/news.png"); ?>
                <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/media/Ar/news02.png"); ?>
            </div>
            <div class="mobile-menu-li mobile-menu-li-3 "><span><?php _e(the_field('press')) ?></span></div>
        </a>
    </li>
    <li class="squ squ-4 squ-4-img"><?php echo do_shortcode("[easingslider id=699]"); ?></li>
    <li class="squ squ-4 squ-mobile-4"></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <p><?php _e(the_field('video_content')) ?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p><?php _e(the_field('images_content')) ?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <p><?php _e(the_field('press_content')) ?></p>
    </div>
  </div>
</div>



  <?php get_footer(); ?>