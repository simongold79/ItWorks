<?php
/*
Template Name: FindJob He
*/
?>
  <?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/tabs-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/popup.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/findJob.css'); ?>" rel="stylesheet" type="text/css" >
    

<!--<div class="company-image">
	<h1><?php _e(the_field('company_header')) ?></h1>
</div>-->
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active squ squ-1">
            <a data-toggle="tab" href="#home">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/open.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/open02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-1 "><span><?php _e(the_field('open_positions')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-2">
            <a data-toggle="tab" href="#menu1">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/cv.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/cv02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-2 "><span><?php _e(the_field('upload_cv')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-3">
            <a data-toggle="tab" href="#menu2">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/tips.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/findJob/He/tips02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-3"><span><?php _e(the_field('tips')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-4 squ-4-img"><?php echo do_shortcode("[easingslider id=695]"); ?></li>
        <li class="squ squ-4 squ-mobile-4"></li>
    </ul>

    <div class="tab-content">
        <div id="menu1" class="tab-pane fade">
            <p><?php _e(the_field('upload_cv_content')) ?></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="tip tip-1">
                <img class="tip-det" src="<?php echo get_template_directory_uri(); ?>/images/findJob/tips_inside.png"); ?>
                <div class="tip-det tip-text"><span><?php _e(the_field('tip_1_content')) ?></span></div>
            </div>
            <div class="tip tip-2">
                <img class="tip-det" src="<?php echo get_template_directory_uri(); ?>/images/findJob/tips_inside.png"); ?>
                <div class="tip-det tip-text"><span><?php _e(the_field('tip_2_content')) ?></span></div>
            </div>
            <div class="tip tip-3">
                <img class="tip-det" src="<?php echo get_template_directory_uri(); ?>/images/findJob/tips_inside.png"); ?>
                <div class="tip-det tip-text"><span><?php _e(the_field('tip_3_content')) ?></span></div>
            </div>
            <div class="tip tip-4">
                <img class="tip-det" src="<?php echo get_template_directory_uri(); ?>/images/findJob/tips_inside.png"); ?>
                <div class="tip-det tip-text"><span><?php _e(the_field('tip_4_content')) ?></span></div>
            </div>
        </div>
        <div id="home" class="tab-pane fade in active">
            <?php if ( have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div>
                    <?php get_template_part( 'content', 'page'); ?>
                </div>
                <?php endwhile; ?>

            <?php endif; wp_reset_postdata(); ?>
            <?php $openpositions = new WP_Query(array(
                        'post_type' => 'open_positions'
                    )); ?>
                    <?php while($openpositions->have_posts()) : $openpositions->the_post(); ?>

                <div class="content">
                    <div class="blog-post">
                        <div class="position-mobile position-text-div">
                            <p class="position position-text  position-num">משרה מס' <?php _e(the_field('position_num')) ?></p>
                            <p class="position position-text blog-post-title"><?php the_title(); ?></p>
                        </div>
                        <div class="position position-mobile position-button-div">
                            <button class="position-button button" data-modal="<?php the_ID();?>"><span>פרטים נוספים</span></button>
                            <button class="position-button position-cv"><a data-toggle="tab" href="#menu1"><span>הגשת מועמדות</span></a></button>
                        </div>
                    </div><!-- /.blog-post -->

                    <div id="<?php the_ID();?>" class="modal">
                        <div class="modal-content">
                            <div class="contact-form">
                                <a class="close popup-details">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/findJob/openjobs_closeJob.png"); ?></a>
                                <div class="popup-details popup-text">
                                    <p>משרה מס' <?php _e(the_field('position_num')) ?></p>
                                    <p><?php the_title(); ?></p>
                                    <p><?php _e(the_field('position_details')) ?></p>
                                    <a class="position-popup-btn" data-toggle="tab" href="#menu1">הגשת מועמדות</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <script src="<?php echo get_template_directory_uri(); ?>/js/popup.js"></script>

            <?php endwhile; ?>

       </div>
    </div>
</div>



  <?php get_footer(); ?>