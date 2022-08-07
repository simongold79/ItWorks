<?php
/*
Template Name: Partners En
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/partners.css'); ?>" rel="stylesheet" type="text/css" >
    <style>.menu-pointer{margin-right:0; margin-left:60.5%;}</style>
    
<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="squ squ-1"><?php the_post_thumbnail('medium'); ?></li>
        <li class="squ squ-mobile squ-mobile-en"><span><?php the_title(); ?></span></li>
        <li class="squ squ-2"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/partners02.png"); ?></li>
        <li class="squ squ-3"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/partners03.png"); ?></li>
        <li class="squ squ-4 squ-4-en"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/partners04.png"); ?></li>
    </ul>
    <p class="tab-content"><?php the_content(); ?></p>
</div>
<?php
	} // end while
} // end if
?>

<?php get_footer(); ?>