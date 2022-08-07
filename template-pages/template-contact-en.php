<?php
/*
Template Name: Contact En
*/
?>

<?php get_header(); ?>

<!--This is the css loading-->
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/header-menu.css'); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo site_url('wp-content/themes/itWorks/css/contact.css'); ?>" rel="stylesheet" type="text/css" >
    <style>#menu-item-531{opacity: 1;} .menu-pointer{margin-right:0; margin-left:82.5%;}</style>
    
<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="squ squ-1"><?php the_post_thumbnail('medium'); ?></li>
        <li class="squ squ-mobile squ-mobile-en"><span><?php the_title(); ?></span></li>
        <li class="squ squ-2"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact02.png"); ?></li>
        <li class="squ squ-3"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact03.png"); ?></li>
        <li class="squ squ-4 squ-4-en"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact04.png"); ?></li>
    </ul>
    <div class="tab-content">
        <div class="contact-det contact-det-1">
            עמותת itworks<br>
            |ע"ר 580466464|<br>
            שד' גיבורי ישראל 7<br>
            כניסה B קומה 3<br>
            אזור תעשיה פולג, נתניה<br>
            משלוח דואר: ת.ד 8306<br>
            טלפון: 09.966.6695<br>
            פקס: 09.766.8895
        </div>
        <div class="contact-det contact-det-2"><?php the_content(); ?></div>
        <div class="contact-mobile">
            עמותת itworks<br>
            |ע"ר 580466464|<br>
            שד' גיבורי ישראל 7
            ,כניסה B קומה 3
            <br>אזור תעשיה פולג, נתניה
            <br>משלוח דואר: ת.ד 8306
            <br>טלפון: 09.966.6695
            ,פקס: 09.766.8895
        </div>
    </div>
</div>
		
<?php
	} // end while
} // end if
?>

 

<?php get_footer(); ?>