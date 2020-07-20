<?php 
$post_objects = get_field('seleccionar_destacados', 'option');
if( $post_objects ): ?>
<div class="row featured-wrapper">
	<?php 
		$n=0;
		foreach( $post_objects as $post): 
			setup_postdata($post); 
			$n++;?>
			<?php if($n == 1) { ?>
			<div class="col-sm-12 col-md-8">
				<div class="featured-ochocol">
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
			<?php  } ?>
			<?php if($n == 2) { ?>
			<div class="col-sm-12 col-md-4">
				<div class="featured-cuatrocol-top">
					<div class="featured-big">
						<a href="<?php the_permalink();?>" class="featured-href">
							<?php if ( has_post_thumbnail() )  { the_post_thumbnail('home', array('class' => 'img-responsive'));} ?>
								<div class="featured-header">
									<h2><?php the_title();?></h2>
									<div class="featured-extracto">
										<p><?php echo substr(get_the_excerpt(), 0,120).'...'; ?></p>	
									</div>
							   </div>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if($n == 3) { ?>
			<div class="col-sm-12 col-md-4">
				<div class="featured-cuatrocol-bot">
					<div class="featured-big">
						<a href="<?php the_permalink();?>" class="featured-href">
							<?php if ( has_post_thumbnail() )  { the_post_thumbnail('home', array('class' => 'img-responsive'));} ?>
								<div class="featured-header">
									<h2><?php the_title();?></h2>
									<div class="featured-extracto">
										<p><?php echo substr(get_the_excerpt(), 0,120).'...'; ?></p>	
									</div>
							   </div>
						</a>
					</div>
				</div>
			</div>
			<?php  } ?>
		<?php endforeach; ?>	
</div> 
<?php wp_reset_postdata();?>
<?php endif;?>