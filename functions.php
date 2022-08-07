<?php

// loading css files to wp
function my_theme_enqueue_styles() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// loading js files to wp
function my_theme_enqueue_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), '20160909', true );

add_theme_support('post-formats', array(
	'aside', 'gallery', 'link', 'video'
));
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

function register_my_menus() {
  register_nav_menus(
    array(
      'HP-menu' => __( 'HP Menu' ),
      'header-menu' => __( 'Header Menu' ),
      'programs-menu' => __( 'programs Menu' ),
      'lang-menu' => __( 'lang Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function wpb_widgets_init() {
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

// replace login logo, change link and title
/*function my_login_logo() { ?>
<style type="text/css">
    body.login div#login h1 a {
    	background-image: wp-content/themes/farmsite/images/logo.png;
    	padding-bottom: 30px;
		background-size:300px 160px;
		height:160px;
		width:300px;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return esc_html__('nitzan-lanoar', 'farmsite');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


?>*/


