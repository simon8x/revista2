<div class="row">
	<h3 class="block-title"><span><a href="https://cronicasdeagua.com/cronica-en-videos/" target="self">Videos destacados</a></span></h3>
	<?php 
		$args = array('posts_per_page'	=> 3,
					  'post_type'		=> 'videos',
					  'orderby' 		=> 'date', 
					  'order' 			=> 'DESC',
					  //'meta_query'		=> array('key'=> 'mostrar_en_home','value'=> 'si','compare'=> '=')
					  );
		$the_query = new WP_Query( $args );
		if($the_query->have_posts()) { 
			while ( $the_query->have_posts() ) { 
				$the_query->the_post();?>
				<div class="col-md-4">
					<article class="news-block">
						<div class="embed-responsive embed-responsive-16by9">
							<div class="embed-container">
								<?php the_field('codigo_de_youtube'); ?>
							</div>
						</div>
					</article>
				</div>
		<?php }  wp_reset_postdata(); } ?>
</div>