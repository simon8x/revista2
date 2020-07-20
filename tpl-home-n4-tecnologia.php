<div class="row">
<?php 
$args1 = array(
	'posts_per_page'	=> 1,
	'ignore_sticky_posts' => true,
	'post_type' =>  array('post','cronicas'),
	'post_status'	=> 'publish',
	'meta_key'		=> 'notas_en_home',
	'meta_value'	=> 'nota-4'
);
$the_query1 = new WP_Query( $args1 );
?>
<?php if( $the_query1->have_posts() ): ?>
<?php while( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
		   <div class="col-md-6">
			  <article class="news-block">
				 <a href="<?php the_permalink();?>" class="overlay-link">
					<figure class="image-overlay">
					   <?php if ( has_post_thumbnail() )  { the_post_thumbnail('home', array('class' => 'img-responsive'));} ?>
					</figure>
				 </a>
				 <div class="news-details content-header-blue">
					<h3 class="news-title">
					   <a href="<?php the_permalink();?>">
					   <?php the_title();?>
					   </a>
					</h3>
					<?php the_excerpt();?>
					<p class="simple-share">
					   por <b><?php the_author_posts_link(); ?> </b>
					</p>
					<p></p>
				 </div>
			  </article>
		   </div>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query();	?>            
			  
   <div class="col-md-6 content-box-blue">
   <?php
	$args_cocina="";
	$the_query_cocina=null;
	$args_cocina =  array( 'cat' => 4 , 
					 'post_status' => 'publish', 
					 'ignore_sticky_posts' => true,
					 'posts_per_page' => 1,
					 'orderby' => 'date', 
					 'order' => 'DESC') ;
	$the_query_cocina = new WP_Query ($args_cocina);
	if ( have_posts() ) : 
		while ( $the_query_cocina->have_posts() ) : 
			$the_query_cocina->the_post();?>
			<article class="news-block">
				<a href="<?php the_permalink();?>" class="overlay-link">
					<figure class="image-overlay">
					   <?php if ( has_post_thumbnail() )  { the_post_thumbnail('home', array('class' => 'img-responsive image-overlay'));} ?>
					</figure>
				</a>
				<?php
				$category = get_the_category(); 
				?>
				<a href="<?php echo get_category_link( $category[0]->term_id );?>" class="category"><?php echo $category[0]->cat_name;?></a>
				<header class="news-details content-header-blue">
					<h3 class="news-title">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h3>
					<p><?php the_excerpt();?></p>
					<p class="simple-share">
					   por <b><?php the_author_posts_link(); ?> </b>
					</p>
					<p></p>
				</header>
		  </article>
	<?php endwhile; ?>
	<?php endif;?>
	<?php wp_reset_query();	?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="ad728-wrapper mid-wrapper">
			<?php echo adrotate_group(4); ?>
		</div>
	</div>
</div>