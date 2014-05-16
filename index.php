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
		<div id="container" class="group">
		<?php get_header();?>
		</div><!--End container-->
	</div><!--End wrapper-->
	<?php get_footer();?>
</body>
</html>