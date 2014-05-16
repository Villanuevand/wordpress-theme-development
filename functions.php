<?php
// Constantes
define(TEMPPATH, get_bloginfo('stylesheet_directory'));
define(IMAGES, TEMPPATH."/images");
// Soportando Menus
add_theme_support('nav_menus');
if (function_exists('register_nav_menu;')) {
	register_nav_menu(
		array('main'=> 'Main Nav')
	);
}
?>