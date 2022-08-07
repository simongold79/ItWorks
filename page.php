<?php get_header(); ?>

<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
		<div class="page_image"><?php the_post_thumbnail('medium'); ?></div>
		<div class="pagetitleimg"><h1 class="title"><?php the_title(); ?></h1></div>
		<p class="content"><?php the_content(); ?></p>
<?php
	} // end while
} // end if
?>

<?php get_footer(); ?>