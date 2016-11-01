<?php

/* Added default width per theme checker recommendation */
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

/* Added default posts and comments RSS feed links to head per theme checker recommendation */
add_theme_support( 'automatic-feed-links' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'yiptv-theme'),
	'secondary' => __('Secondary Menu', 'yiptv-theme'),
	'login' => __('Login', 'yiptv-theme'),
	'footer' => __('Footer Menu', 'yiptv-theme'),
	'legalfooter' => __('Legal Menu', 'yiptv-theme'),
	'sports' => __('Sports Menu', 'yiptv-theme'),
	'kids' => __('Kids Menu', 'yiptv-theme'),
	'news' => __('News Menu', 'yiptv-theme'),
	'music' => __('Music Menu', 'yiptv-theme'),
	'educational' => __('Educational Menu', 'yiptv-theme'),
	'lifestyle' => __('Lifestyle Menu', 'yiptv-theme'),
	'faith' => __('Faith Menu', 'yiptv-theme'),
	'general' => __('General Menu', 'yiptv-theme'),
	'press' => __('Press Menu', 'yiptv-theme'),
	'entertainment' => __('Entertainment Menu', 'yiptv-theme'),
	'mobile' => __('Mobile Menu', 'yiptv-theme'),
	'mobileham' => __('Mobile Ham', 'yiptv-theme'),
) );




	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Widgets for the sidebar.',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }
	
	
	function yip_now_sidebar(){
		
		
register_sidebar( array(
        'name' => __( 'Yip-Now Sidebar', 'theme-slug' ),
        'id' => 'yip-now-widget',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	}
	
	add_action( 'widgets_init', 'yip_now_sidebar' );

function new_excerpt_more($more) {
	global $post;
	return '... <a href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only

function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Question',  
			'block' => 'h3',  
			'classes' => 'question',
			'wrapper' => true,
			
		),  
		
		
		
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );
?>