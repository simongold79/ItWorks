<?php
/*
Template Name: Home
*/
?>

<?php

get_header();?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/index.css'); ?>" rel="stylesheet" type="text/css" >

<div class="container">   
    <div class="row">
    <?php wp_nav_menu( array( 'theme_location' => 'HP-menu' ) ); ?>
    </div>
</div>

<?php get_footer();

?>
