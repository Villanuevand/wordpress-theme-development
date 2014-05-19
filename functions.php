<?php
// *** Constantes
define(TEMPPATH, get_bloginfo('stylesheet_directory'));
define(IMAGES, TEMPPATH."/images");
define(JS, TEMPPATH."/js");
// *** Soportando Menus
add_theme_support('nav_menus');
// *** Soportando Imagen Destacada	
add_theme_support('post-thumbnails');
if (function_exists('register_nav_menu;')) {
	register_nav_menu(
		array('main'=> 'Main Nav')
	);
}

/**
* Registers a new post type SERVICIOS
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function eq_register_servicio() {

	$labels = array(
		'name'                => __( 'servicios', 'text-domain' ),
		'singular_name'       => __( 'Servicio', 'text-domain' ),
		'add_new'             => _x( 'Añadir Nuevo', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Añadir Nuevo Servicio', 'text-domain' ),
		'edit_item'           => __( 'Editar Servicio', 'text-domain' ),
		'new_item'            => __( 'Nuevo Servicio', 'text-domain' ),
		'view_item'           => __( 'Ver Servicio', 'text-domain' ),
		'search_items'        => __( 'Buscar Servicios', 'text-domain' ),
		'not_found'           => __( 'No se han encontrado Servicios', 'text-domain' ),
		'not_found_in_trash'  => __( 'No se han encontrado Servicios en la papelera', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'text-domain' ),
		'menu_name'           => __( 'Servicios', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => true,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-appearance',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'servicio', $args );
}

add_action( 'init', 'eq_register_servicio' );

?>