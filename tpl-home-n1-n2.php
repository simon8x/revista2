<div class="row">
<?php 
$args1 = array(
	'posts_per_page'	=> 1,
	'ignore_sticky_posts' => true,
	'post_type' =>  array('post','cronicas'),
	'post_status'	=> 'publish',
	'meta_key'		=> 'notas_en_home',
	'meta_value'	=> 'nota-1'
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
<?php 
$args2 = array(
	'posts_per_page'	=> 1,
	'ignore_sticky_posts' => true,
	'post_type' =>  array('post','cronicas'),
	'post_status'	=> 'publish',
	'meta_key'		=> 'notas_en_home',
	'meta_value'	=> 'nota-2'
);
$the_query2 = new WP_Query( $args2 );
?>
<?php if( $the_query2->have_posts() ): ?>
<?php while( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
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
   </div>
   <div class="row">
		<div class="col-md-6">
			<div class="ad728-wrapper mid-wrapper">
				<?php echo adrotate_group(2); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="ad728-wrapper mid-wrapper">
				<?php echo adrotate_group(3); ?>
			</div>
		</div>
   </div>