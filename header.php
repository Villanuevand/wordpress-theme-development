<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name');?></title>	
	<!--
	Reset.css by Mike Mayer
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/reset.css">
	-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">	
	<!--<?php wp_head();?>-->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<header class="">
			<h1>
				<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
					<img src="<?php print IMAGES;?>/logo.png" alt="<?php bloginfo('name');?>" width="150">
				</a>
			</h1>
			<h2><?php bloginfo('name');?></h2>
			<h3><?php bloginfo('description');?></h3>
			<?php    /**
				* Displays a navigation menu
				* @param array $args Arguments
				*/
				$args = array(
					'theme_location' => '',
					'menu' => '',
					'container' => 'div',
					'container_class' => 'menu-{menu-slug}-container',
					'container_id' => '',
					'menu_class' => 'menu',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => ''
				);
			
				wp_nav_menu( $args );?>
		</header><!--End header-->