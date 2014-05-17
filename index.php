<?php get_header();?>
<!--El bendito <LOOP--></LOOP-->
<h2>LOOP ORIGINAL</h2>
<?php if(have_posts()):while(have_posts()):the_post();?>
	<div class="post">
		<article>
			<h6>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</h6>
			<small><?php the_time('l F d, Y');?></small>
			<p><?php the_excerpt();?></p>			
		</article>
	</div><!--End post-->
	<!--Fin del bendito LOOP-->
	<?php endwhile; else: ?>
	<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
	<?php endif; ?>
<h2>SERVICIOS</h2>
<!--Personalizando el Loop, buscando posts tipo servicio-->
<?php $loop = new WP_Query( array( 'post_type' => 'servicio', 'posts_per_page' => 3 ) ); ?>
<?php while($loop->have_posts()) : $loop->the_post();?>
	<div class="post">
		<article>
			<h6>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</h6>
			<small><?php the_time('l F d, Y');?></small>
			<p><?php the_excerpt();?></p>			
		</article>
		<!--Reestableciendo el 'main query' -->
		<?php wp_reset_postdata(); ?>
	</div><!--End post-->
<?php endwhile; ?>
<?php get_footer();?>
