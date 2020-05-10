<?php
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');
add_action( 'after_setup_theme', 'tourog_child_theme_setup' );
add_action( 'widgets_init', 'wpb_widgets_init' );
add_action( 'show_admin_bar', 'hide_admin_bar' );
add_action( 'init', 'remove_post_type');
add_filter( 'get_the_archive_title', 'archive_title' );
//include_once('settings/settings.php');


function childtheme_parent_styles() {
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}

function tourog_child_theme_setup() {
    load_child_theme_textdomain( 'tourog-child', get_stylesheet_directory() . '/languages' );
}

function wpb_widgets_init() {
    register_sidebar( array(
        'name' => 'Breadcrumb Area',
        'id' => 'breadcrumb_area',
        'before_widget' => '<div class="col-md-12">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="hw-title">',
        'after_title' => '</h2>',
    ));
    
}

function hide_admin_bar() {
	return false;
}

function remove_post_type(){
	unregister_post_type('portfolio');
}

function archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}