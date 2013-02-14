<?
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', null, '1.8.3', true);
	//wp_register_script( 'jquery', get_bloginfo('template_url').'js/jquery-1.7.min.js', null, '1.7', true);
	wp_enqueue_script( 'jquery' );

	wp_deregister_script( 'modernizr' );
	//wp_register_script( 'modernizr', get_bloginfo('template_url').'/js/modernizr.min.js', null, '2.0.6', false);
	wp_register_script( 'modernizr', get_bloginfo('template_url').'/js/modernizr-development.js', null, '2.0.6', false);
	wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'global' );
	wp_register_script( 'global', get_bloginfo('template_url').'/js/global.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'global' );

	wp_enqueue_style('base', get_bloginfo('template_url') . '/css/base.css');
	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );
