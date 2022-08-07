<?php
/*
Template Name: Blog Ar
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/popup.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/blog.css'); ?>" rel="stylesheet" type="text/css" >
  


<div class="container">
    <ul class="nav nav-tabs">
        <li class="squ squ-1"><?php the_post_thumbnail('medium'); ?></li>
        <li class="squ squ-mobile"><?php the_title(); ?></li>
        <li class="squ squ-2"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog02.png"); ?></li>
        <li class="squ squ-3"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog03.png"); ?></li>
        <li class="squ squ-4"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/blog04.png"); ?></li>
    </ul>
    
<div class="tab-content">    
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<?php if( have_posts() ): ?>

<?php while( have_posts() ): the_post(); ?>
        
    <div class="blog-post">
        <div class="page_image"><?php the_post_thumbnail('medium'); ?></div>
        <p class="blog-post-title"><span><?php the_title(); ?></span></p>
	    <!--<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>-->
        <button class="wpcf7-submit button" data-modal="<?php the_ID();?>">اقرأ المزيد</button>
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