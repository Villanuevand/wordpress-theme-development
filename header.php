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