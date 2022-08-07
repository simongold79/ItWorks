<?php
/*
Template Name: Family He
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/single-program.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" > 
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/events.css'); ?>" rel="stylesheet" type="text/css" >
    <style>.menu-pointer{margin-right: 38.5%;}</style>
    
<div class="container">
    <div class="pro-content">
        <?php 
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
                <ul class="nav nav-tabs">
                    <li class="squ squ-1 squ-family"><?php the_post_thumbnail('medium'); ?></li>
                    <li class="squ squ-mobile" style="background-color: #4d6273"><span><?php the_title(); ?></span></li>
                    <li class="squ squ-family-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/programs/kidumish02.png"); ?></li>
                    <li class="squ squ-family-3"><img src="<?php echo get_template_directory_uri(); ?>/images/programs/kidumish03.png"); ?></li>
                    <li class="squ squ-4 squ-4-img"><img src="<?php echo get_template_directory_uri(); ?>/images/programs/pic.png"); ?></li>
                    <li class="squ squ-4 squ-mobile-4"></li>
                </ul>
                
                <div class="tab-content">
                    <?php _e(the_field('sum_program')) ?>
                    <?php _e(the_field('success_story')) ?>
                </div>
        <?php
            } // end while
        } // end if
        ?>
    </div>
</div>

<?php get_footer(); ?>