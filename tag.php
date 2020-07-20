<?php
get_header();
	$url = get_bloginfo('url'); 
	$path = get_bloginfo('template_directory');?>
	  <div class="container main-wrapper">
<!-- End Main Banner -->
    <div class="main-content mag-content clearfix">
	<?php $tag = get_query_var('tag');?>
      <div class="row blog-content">
        <div class="col-md-9">
          <h3 class="tag-title">Etiqueta: <span><?php single_tag_title();?></span></h3>
		  <div class=" tutorial_list">
            <?php
					//$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args2="";
					$the_query2=null;
					$args2 =  array( 'tag' => $tag , 
									 'post_status' => 'publish', 
									 'posts_per_page' => 2,
									 //'paged' => $paged,
									 'orderby' => 'post_id', 
									 'order' => 'DESC') ;
					$the_query2 = new WP_Query ($args2);
					$rowCount =  $the_query2->found_posts;
					if ( have_posts() ) : while ( $the_query2->have_posts() ) : $the_query2->the_post(); $post_id = get_the_ID();?>
						<article class="simple-post simple-big clearfix">  
							<div class="simple-thumb">
								<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() )  { the_post_thumbnail('side', array('class' => 'img-responsive'));} ?></a>
							</div>
							<header>
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<p class="excerpt"><?php the_excerpt(); ?></p>
							</header>
						</article>
					<?php endwhile; endif;wp_reset_postdata();	?>
					<div class="row">
					 <?php echo '<div id="misha_loadmorez"></div>';  ?>
						<div class="col-md-12">
							<?php
							global $wp_query; // you can remove this line if everything works for you
							 
							// don't display the button if there are not enough posts
							if (  $wp_query->max_num_pages > 1 )
								echo '<div class="load-more"><button type="button" class="btn btn-lg btn-block misha_loadmore_tag">Mostrar más</button></div>'; // you can use <a> as well
							?>
						</div>
					</div>
					
			 </div>		
        </div>
        <?php include('sidebar.php');?>     
      </div>
    </div>
  </div>
<?php get_footer();?>