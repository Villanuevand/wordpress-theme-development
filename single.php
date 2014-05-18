<?php get_header();?>
<!--El bendito LOOP-->
<?php if(have_posts()):while(have_posts()):the_post();?>
	<div class="post">
		<article>
			<h1>
				<?php the_title();?>
			</h1>
			<small><?php the_time('l F d, Y');?></small>
			<br>
			<?php the_post_thumbnail('medium');?>
			<p><?php the_content();?></p>			
		</article>
	</div><!--End post-->
	<!--Fin del bendito LOOP-->
	<?php endwhile; else: ?>
	<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
	<?php endif; ?>
<?php get_footer();?>