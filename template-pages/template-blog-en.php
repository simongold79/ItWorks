<?php
/*
Template Name: Blog En
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/popup.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/blog.css'); ?>" rel="stylesheet" type="text/css" >
    <style>.menu-pointer{margin-right:0; margin-left:71.5%;}</style>


<div class="container">
    <ul class="nav nav-tabs">
        <li class="squ squ-1"><?php the_post_thumbnail('medium'); ?></li>
        <li class="squ squ-mobile squ-mobile-en"><span><?php the_title(); ?></span></li>
        <li class="squ squ-2"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog02.png"); ?></li>
        <li class="squ squ-3"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog03.png"); ?></li>
        <li class="squ squ-4 squ-4-en"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog04.png"); ?></li>
    </ul>
    
<div class="tab-content">    
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<?php if( have_posts() ): ?>

<?php while( have_posts() ): the_post(); ?>
        
    <div class="blog-post">
        <div class="page_image page_image-en"><?php the_post_thumbnail('medium'); ?></div>
	    <p class="blog-post-title blog-post-title-en"><?php the_title(); ?></p>
	    <!--<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>-->
        <button class="wpcf7-submit button button-en" data-modal="<?php the_ID();?>">Read More</button>
    </div><!-- /.blog-post -->
    
    <div id="<?php the_ID();?>" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close popup-details">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/close_singelMember.png"); ?></a>
                <p class="popup-blog-post-title"><?php the_title(); ?></p><br>
                <p class="blog-content"><?php the_content(); ?></p>
                <div class="blog-content popup-img"><?php the_post_thumbnail('medium'); ?></div>
            </div>
        </div>
    </div>

<script src="<?php echo get_template_directory_uri(); ?>/js/popup.js"></script>
    
    <?php endwhile; ?>

	<?php else: ?>

	<?php endif; wp_reset_query(); ?>
</div><!-- /content -->
</div><!-- /container -->



<?php get_footer(); ?>