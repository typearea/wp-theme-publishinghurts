<?php 

function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

register_sidebar(array(
    'name' => 'Sidebar rechts innen',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
));


register_sidebar(array(
    'name' => 'Sidebar rechts aussen',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
));


add_action('wp_head','hook_css');

function hook_css() {

	$output="<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700' rel='stylesheet' type='text/css'>";

	echo $output;
}
