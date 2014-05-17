<?php get_header();?>
<!--El bendito LOOP-->
<?php if(have_posts()):while(have_posts()):the_post();?>
	<div class="post">
		<article>
			<?php the_post_thumbnail(); ?>
			<h1>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</h1>
			<small><?php the_time('l F d, Y');?></small>
			<p><?php the_excerpt();?></p>			
		</article>
	</div><!--End post-->
	<!--Fin del bendito LOOP-->
	<?php endwhile; else: ?>
	<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
	<?php endif; ?>
<?php get_footer();?>