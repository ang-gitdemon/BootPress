<?php

//add dynamic menu
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'theme_location' => 'Primary Menu' ,
			'before'          => '<span>',
			'after'           => '</span>',
			'menu_class' 	=> 'menu nav nav-tabs'
		)
	);
}

//Add support for featured images
add_theme_support( 'post-thumbnails' );


// Excerpt Length
function custom_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Register our sidebars and widgetized areas. //

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
