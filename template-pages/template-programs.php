<?php
/*
Template Name: Programs
*/
?>
 
<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/programs.css'); ?>" rel="stylesheet" type="text/css" >
<div class="container">
    <div class="pro-content">
        <?php 
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
                <!--<div class="page_image"><?php the_post_thumbnail('medium'); ?></div>
                <div class="page-title-img"><h1 class="title about-title-border"><?php the_title(); ?></h1></div>-->
                <p class="content"><?php the_content(); ?></p>
        <?php
            } // end while
        } // end if
        ?>

        <div class="tab-content"><?php wp_nav_menu( array( 'theme_location' => 'programs-menu' ) ); ?></div>
    </div>
</div>

<?php get_footer(); ?>