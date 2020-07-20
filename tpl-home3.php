<?php 
$post_objects = get_field('seleccionar_destacados', 'option');
if( $post_objects ): ?>
	<div class="row">
		<div class="featured-wrapper">
			<?php foreach( $post_objects as $post): ?>
				<?php setup_postdata($post); ?>
				<div class="col-sm-12 col-md-4">
					<div class="featured-cuatrocol">
						<div class="featured-big">
							<a href="<?php the_permalink();?>" class="featured-href">
								<?php if ( has_post_thumbnail() )  { the_post_thumbnail('home', array('class' => 'img-responsive'));} ?>
								<div class="featured-header">
									<h2><?php the_title();?></h2>
									<div class="featured-extracto">
										<p><?php echo get_the_excerpt();?></p>
								   </div>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>	
		</div>
	</div>
<?php wp_reset_postdata();?>
<?php endif;?>