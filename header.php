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
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--<?php wp_head();?>-->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      	<a class="navbar-brand" href="<?php echo home_url(); ?>">
	            <?php bloginfo('name'); ?>
	    	</a>
	    </div>
		<div class="navbar-right">
			  <?php
	            wp_nav_menu( array(
	                'menu'              => 'header-menu',
	                'theme_location'    => 'header-menu',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'bs-example-navbar-collapse-1',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>
		</div>	      
	  </div>
	</nav>	
	<header class="">

	</header><!--End header-->
	<div class="container">
