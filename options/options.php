<?php

// Ajout des pages d'options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Paramètre avancé',
		'menu_title'	=> 'Paramètre avancé',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Paramètre d\'administration',
		'menu_title'	=> 'Paramètre d\'administration',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	@include_once 'pages/admin.php';

	// Mise en place des paramètres
	add_action( 'show_admin_bar', 'hide_admin_bar' );

	function hide_admin_bar() {
		return get_field('affichage_de_la_barre_dadministration', 'option') == 1 ? true : false;
	}

}