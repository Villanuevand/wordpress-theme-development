<h2>SERVICIOS</h2>
<div id="servicios" class="row">
	<!--Personalizando el Loop, buscando posts tipo servicio-->
	<?php $loop = new WP_Query( array( 'post_type' => 'servicio', 'posts_per_page' => 3 ) ); ?>
	<?php while($loop->have_posts()) : $loop->the_post();?>
	<div class="col-md-4">
		<article>
			<h6>
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</h6>
			<!--Obteniendo imagen destacada-->
			<?php if(has_post_thumbnail()) :?>
			<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
				<?php the_post_thumbnail('thumbnail');?>
			</a>
			<!--Validacion en caso de no haber image destacada-->
		 	<?php else: ?>
				<img src="<?php print IMAGES;?>/No_image_available.png" width="150" alt="<?php the_title();?> - Imagen por defecto">
			<?php endif;?>
			<small><?php the_time('l F d, Y');?></small>
			<p><?php the_excerpt();?></p>			
		</article>
		<!--Reestableciendo el 'main query' -->
		<?php wp_reset_postdata(); ?>
	</div><!--End post-->	
<?php endwhile; ?>
</div><!--End Servicios-->