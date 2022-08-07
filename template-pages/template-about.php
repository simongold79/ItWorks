<?php
/*
Template Name:About us He
*/
?>
  <?php get_header(); ?>

<!--This is the css loading-->
    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/tabs-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/about.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/popup.css'); ?>" rel="stylesheet" type="text/css" >
    
    
<div class="container">
   <div class="row">
    <ul class="nav nav-tabs">
        <li class="active squ squ-1">
            <a data-toggle="tab" href="#home">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/vision.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/vision02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-1 "><span><?php _e(the_field('vision')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-2">
            <a data-toggle="tab" href="#menu1">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/team.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/team02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-2 "><span><?php _e(the_field('team')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-3">
            <a data-toggle="tab" href="#menu2">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/management.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/management02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-3"><span><?php _e(the_field('board')) ?></span></div>
            </a>
        </li>
        <li class="squ squ-4">
            <a data-toggle="tab" href="#menu3">
                <div class="desktop-menu-li">
                    <img class="img-not-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/docs.png"); ?>
                    <img class="img-act" src="<?php echo get_template_directory_uri(); ?>/images/about/He/docs02.png"); ?>
                </div>
                <div class="mobile-menu-li mobile-menu-li-4"><span><?php _e(the_field('files')) ?></span></div>
            </a>
        </li>
        <!--<li>
            <a data-toggle="tab" href="#home">
                <div class="active squ squ-1">
                    <p class="squ-content"><?php _e(the_field('vision')) ?></p>
                    <div class="squ-content img-div"><img src="<?php echo get_template_directory_uri(); ?>/images/about/vision.png"></div>
                </div>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu1">
                <div class="squ squ-2">
                    <p class="squ-content"><?php _e(the_field('team')) ?></p>
                    <div class="squ-content img-div"><img src="<?php echo get_template_directory_uri(); ?>/images/about/tram.png"></div>
                </div>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu2">
                <div class="squ squ-3">
                    <p class="squ-content"><?php _e(the_field('board')) ?></p>
                    <div class="squ-content img-div"><img src="<?php echo get_template_directory_uri(); ?>/images/about/management.png"></div>
                </div>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#menu3">
                <div class="squ squ-4">
                    <p class="squ-content"><?php _e(the_field('files')) ?></p>
                    <div class="squ-content img-div"><img src="<?php echo get_template_directory_uri(); ?>/images/about/docs.png"></div>
                </div>
            </a>
        </li>-->
    </ul>

    <div class="tab-content  col-xs-12">
        <div id="home" class="tab-pane fade in active">
            <p><?php _e(the_field('vision_content')) ?></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <p><?php _e(the_field('board_content')) ?></p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <p><?php _e(the_field('files_content')) ?></p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <?php if ( have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div>
                    <?php get_template_part( 'content', 'page'); ?>
                </div>
                <?php endwhile; ?>

            <?php endif; wp_reset_postdata(); ?>
            <?php $teammembers = new WP_Query(array(
                        'post_type' => 'team_members'
                    )); ?>
                    <?php while($teammembers->have_posts()) : $teammembers->the_post(); ?>

                <div class="content col-xs-4 col-sm-2 col-md-1">
                    <div class="blog-post tooltip">
                        <button class="wpcf7-submit button" data-modal="<?php the_ID();?>"><?php the_post_thumbnail('medium'); ?></button>
                        <span class="tooltiptext">
                        <p class="blog-post-title"><?php the_title(); ?></p>
                        <p class="team-member-pos"><?php _e(the_field('team_member_position')) ?></p>
                        </span>
                    </div><!-- /.blog-post -->

                    <div id="<?php the_ID();?>" class="modal">
                        <div class="modal-content">
                            <div class="contact-form">
                                <a class="close popup-details"><img src="<?php echo get_template_directory_uri(); ?>/images/about/close_singelMember.png"); ?></a>
                                <div class="popup-details popup-img"><?php the_post_thumbnail('medium'); ?></div>
                                <div class="popup-details popup-text">
                                    <div class="popup-title">
                                        <p><?php the_title(); ?></p>
                                        <p><?php _e(the_field('team_member_position')) ?></p>
                                    </div>
                                    <p><?php _e(the_field('about_team_member')) ?></p>
                                    <p><?php _e(the_field('team_member_mail')) ?></p>
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
</div>



  <?php get_footer(); ?>