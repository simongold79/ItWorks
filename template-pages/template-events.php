<?php
/*
Template Name: Events He
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/events.css'); ?>" rel="stylesheet" type="text/css" >

<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="squ squ-1"><?php the_post_thumbnail('medium'); ?></li>
        <li class="squ squ-mobile"><span><?php the_title(); ?></span></li>
        <li class="squ squ-2"><img src="<?php echo get_template_directory_uri(); ?>/images/events/events2.png"); ?></li>
        <li class="squ squ-3"><img src="<?php echo get_template_directory_uri(); ?>/images/events/events32.png"); ?></li>
        <li class="squ squ-4 squ-4-img"><?php echo do_shortcode("[easingslider id=694]"); ?></li>
        <li class="squ squ-4 squ-mobile-4"></li>
    </ul>
    <p class="tab-content"><?php the_content(); ?></p>
</div>
<?php
	} // end while
} // end if
?>

<?php get_footer(); ?>