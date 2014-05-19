<?php get_header();?>
<!--El bendito <LOOP--></LOOP-->
<h2>LOOP ORIGINAL</h2>
	<div class="row">
		<?php if(have_posts()):while(have_posts()):the_post();?>
		<div class="col-md-4">
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
	</div><!--End row-->
<hr>
<?php get_template_part( 'main', 'servicios' );?>
<?php get_footer();?>
