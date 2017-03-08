<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'twentythirteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

} // remove widget area
add_filter( 'sidebars_widgets', 'disable_all_widgets' );

function disable_all_widgets( $sidebars_widgets ) {

	if ( is_home() )
		$sidebars_widgets = array( false );

	return $sidebars_widgets;
}
?>