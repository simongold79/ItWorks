<?php
/*
Template Name: single program
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/single-program.css'); ?>" rel="stylesheet" type="text/css" >

<div class="container">
    <div class="pro-content">
        <?php 
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
                <ul class="nav nav-tabs">
                    <li class="squ squ-1"><h1 class="title"><?php the_title(); ?></h1></li>
                    <li class="squ squ-2"></li>
                    <li class="squ squ-3"></li>
                </ul>
                <p class="content"><?php the_content(); ?></p>
        <?php
            } // end while
        } // end if
        ?>
    </div>
</div>

<?php get_footer(); ?>