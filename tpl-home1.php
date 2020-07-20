<?php 
$post_objects = get_field('seleccionar_destacados', 'option');
if( $post_objects ): ?>
	<div class="row featured-wrapper">
		<div class="featured-full">
		   <div class="col-md-12">
				<div class="featured-big">
					<?php 
						$n=0;
						foreach( $post_objects as $post): 
						$n++;
						setup_postdata($post); ?>
						<?php if($n==1){ ?>
						<a href="<?php the_permalink();?>" class="featured-href">
							<?php if ( has_post_thumbnail() )  { the_post_thumbnail('destacado', array('class' => 'img-responsive'));} ?>
							  <div class="featured-header">
									<h2><?php the_title();?></h2>
									<div class="featured-extracto">
										<p><?php echo get_the_excerpt();?></p>
									 </div>
							 </div>
						</a>
						<?php } ?>
					<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<?php wp_reset_postdata();?>
<?php endif;?>