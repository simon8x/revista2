<?php 
$post_objects = get_field('seleccionar_notas_de_autor', 'option');
if( $post_objects ): ?>
	<div class="row blog-content">
		<?php foreach( $post_objects as $post): ?>
				<?php setup_postdata($post); ?>
				<div class="col-md-4">
					<div class="widget author-widget-home"><!--agregado-->
						<article class="simple-post clearfix sin-padding">  
							<?php if(get_field('volanta')) {?> 
										<h5 href="#" class="volanta texto-izquierda"><?php the_field('volanta'); ?></h5>
							<?php } ?>
							<header>
								<h3 class="texto-izquierda"><!--agregado-->
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h3>
							</header>
						</article>
						<div class="author-thumb">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 70 ); ?>
						</div>
						<h3 class="author-title"> 
						  <?php the_author_posts_link(); ?>
						</h3>
					</div>
				</div>	
		<?php endforeach; ?>
	</div>
<?php wp_reset_postdata();?>
<?php endif;?>