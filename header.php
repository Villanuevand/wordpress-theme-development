<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name');?></title>	
	<!--
	Reset.css by Mike Mayer
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/reset.css">
	-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">	
	<!--<?php wp_head();?>-->
</head>
<body>
	<div id="wrapper">
		<div id="container">
			<header class="group">
				<h1>
					<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
						<img src="<?php print IMAGES;?>/logo.png" alt="<?php bloginfo('name');?>" width="150">
					</a>
				</h1>
				<h2><?php bloginfo('name');?></h2>
				<h3><?php bloginfo('description');?></h3>
				<?php wp_nav_menu(
					array(
							'menu' => 'Main',
							'container' => 'nav'
						)
				);?>
			</header><!--End header-->