<div class="related-posts clearfix">
	<h3 class="block-title"><span>Te puede interesar</span></h3>
	<div class="row">
	<?php 
	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);
	if ($categories) {
		$category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args=array('category__in' => $category_ids,
					'post__not_in' => array($post->ID),
					'posts_per_page'=> 3, //'caller_get_posts'=>1
					);
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
			while( $my_query->have_posts() ) {
				$my_query->the_post();?>
				<div class="col-md-4">
			
					<article class="small-article">
					  <figure class="feed-image">
						<a href="<?php the_permalink()?>">
						<?php the_post_thumbnail('relacionado', array('class' => 'img-responsive'));?>
						</a>
					  </figure>
					  <h3>
						<a href="<?php the_permalink()?>"><?php the_title(); ?></a>
					  </h3>
					  <p><span><?php the_date();?></span></p>
					</article>
					
					
				</div>
				<?php }
		}
	}
	$post = $orig_post;
	wp_reset_query(); ?>
	</div>
</div>