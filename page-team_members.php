<?php
/*
Template Name: team members
*/
?>


<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/blog.css'); ?>" rel="stylesheet" type="text/css" >

<div class="container">
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

        <div class="content">
            <div class="blog-post">
                <button class="wpcf7-submit button" data-modal="<?php the_ID();?>"><?php the_post_thumbnail('medium'); ?></button>
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p><?php _e(the_field('team_member_position')) ?></p>
            </div><!-- /.blog-post -->

            <div id="<?php the_ID();?>" class="modal">
                <div class="modal-content">
                    <div class="contact-form">
                        <a class="close">&times;</a>
                        <div><?php the_post_thumbnail('medium'); ?></div>
                        <p><?php the_title(); ?></p>
                        <p><?php _e(the_field('team_member_position')) ?></p>
                        <p><?php _e(the_field('about_team_member')) ?></p>
                        <p><?php _e(the_field('team_member_mail')) ?></p>
                    </div>
                </div>
            </div>
        </div>

    <script>
       /*jslint browser*/
    /*global window*/
    (function iife() {
        "use strict";
        function closestEl(el, selector) {
            var doc = el.document || el.ownerDocument;
            var matches = doc.querySelectorAll(selector);
            var i;
            while (el) {
                i = matches.length - 1;
                while (i >= 0) {
                    if (matches.item(i) === el) {
                        return el;
                    }
                    i -= 1;
                }
                el = el.parentElement;
            }
            return el;
        }
        var modalBtns = document.querySelectorAll(".button");
        modalBtns.forEach(function addBtnClickEvent(btn) {
            btn.onclick = function showModal() {
                var modal = btn.getAttribute("data-modal");
                document.getElementById(modal).style.display = "block";
            };
        });

        var closeBtns = document.querySelectorAll(".close");
        closeBtns.forEach(function addCloseClickEvent(btn) {
            btn.onclick = function closeModal() {
                var modal = closestEl(btn, ".modal");
                modal.style.display = "none";
            };
        });

        window.onclick = function closeOnClick(event) {
            if (event.target.className === "modal") {
                event.target.style.display = "none";
            }
        };
    }());
    </script>

    <?php endwhile; ?>

</div><!-- /container -->

       
    
<?php get_footer(); ?>


