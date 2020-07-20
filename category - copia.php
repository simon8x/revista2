<?php include('header.php');?>
<?php $cat = get_query_var('cat');?>
<div class="parallax-header page-wrapper">
   <!-- Parallax image -->
   <div class="parallax-image" style="top:0!important;" id="parallax-image" data-stellar-ratio="0.5" data-image="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>">
   </div>
   <!-- Post title and meta -->
   <div class="parallax-wrapper">
      <div class="container">
         <div class="mag-content parallax-box">
            <div class="row">
               <div class="col-md-12 parallax-box">
                  <header class="page-header">
                     <h1 class="page-title">
                        <?php echo get_cat_name($cat);?>
                     </h1>
                     <!-- .post-title -->
                  </header>
                  <!-- .post-header -->
               </div>
               <!-- .col-md-12 -->
            </div>
            <!-- .row -->
         </div>
      </div>
      <!-- .container -->
   </div>
   <!-- .parallax-wrapper -->
</div>
<!-- .parallax-header -->
<div class="container">
	<div class="row">
		<?php echo f_publicidad(79);?>
	  </div>
   <div class="main-content mag-content clearfix">
   
   
   <div id="primary" class="content-area">


    
  <?php
  /*$currCat = get_category(get_query_var('cat'));
  $cat_name = $currCat->name;
  $cat_id   = get_cat_ID( $cat_name );
?>

     <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=4&post_type=post&paged='.$paged.'&cat='.$cat_id);
  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

                <article id="post-<?php the_ID(); ?>">
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-## --><hr>

             
           <?php endwhile; ?>
<?php
  global $wp_query;
 
  $big = 999999999; // need an unlikely integer
  echo '<div class="paginate-links">';
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'prev_text' => __('<<'),
    'next_text' => __('>>'),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
    ) );
  echo '</div>';
?>
<?php
			global $wp_query; 
			if (  $wp_query->max_num_pages > 1 )
				//echo '<div class="misha_loadmore">More posts</div>'; 
				echo '<div class="load-more">
						<a type="button" class="btn btn-lg btn-block">Cargar más</a>
					 </div>';
			*/ ?>

<!-- #primary -->
   
   
   
   
   
      <div class="row">
            <div class="col-md-12" data-stickycolumn>
				<div class="row">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args2="";
					$i=1;
					$the_query2=null;
					$args2 =  array( 'cat' => $cat , 
									 'post_status' => 'publish', 
									 //'post__not_in' => $firstPosts, 
									 'posts_per_page' => 4,
									 'paged' => $paged,
									 'orderby' => 'date', 
									 'order' => 'DESC') ;
					$the_query2 = new WP_Query ($args2);
					if ( $the_query2->have_posts() ) : 
						while ( $the_query2->have_posts() ) : 
							$the_query2->the_post();
							$i++;?>
						    <div class="col-md-6">
								  <article class="news-block">
									 <a href="<?php the_permalink();?>" class="overlay-link">
										<figure class="image-overlay">
										   <?php if ( has_post_thumbnail() )  { the_post_thumbnail('destacado', array('class' => 'img-responsive'));} ?>
										</figure>
									 </a>
									 <div class="news-details">
										<h3 class="news-title">
										   <a href="<?php the_permalink();?>"><?php the_title();?></a>
										</h3>
										<?php the_excerpt();?>
										<p class="simple-share">
										   por <b><?php the_author_posts_link(); ?> </b>
										</p>
									 </div>
								  </article>
								  <?php if( $i == 4) { ?>
									  <div class="row">
										<?php echo f_publicidad(80);?>
									  </div>
								  <?php } ?>
								  <?php if( $i == 5) { ?>
									  <div class="row">
										<?php echo f_publicidad(81);?>
									  </div>
								  <?php } ?>
							   </div><?php if ($i%2!=0) { echo '</div><div class="row">';}?>
					<?php endwhile;wp_reset_query(); ?>
					<?php var_dump(  my_pagination());?>
					<?php endif;?>

				</div>
					
				
			</div>   
         </div>
		 <div class="row">
			<div class="col-md-12">
			<?php
			global $wp_query; 
			if (  $wp_query->max_num_pages > 1 )
				//echo '<div class="misha_loadmore">More posts</div>'; 
				echo '<div class="load-more">
						<button type="button" class="btn btn-lg btn-block">Cargar más</button>
					 </div>';
			?>
			</div>
		 </div>
      </div>
</div>
</div>
<?php include('footer.php');?>

<?php 
/*
https://www.daddydesign.com/wordpress/how-to-load-more-posts-in-wordpress-with-jquery/
https://artisansweb.net/load-wordpress-post-ajax/
https://artisansweb.net/how-to-use-jquery-ajax-wordpress/
https://madebydenis.com/ajax-load-posts-on-wordpress/
https://css-tricks.com/forums/topic/wordpress-load-more-posts-on-click/
https://rudrastyh.com/wordpress/load-more-posts-ajax.html
https://premium.wpmudev.org/blog/load-posts-ajax/
https://stackoverflow.com/questions/31587210/load-more-posts-ajax-button-in-wordpress
https://stackoverflow.com/questions/29595391/how-to-implement-pagination-on-a-custom-wp-query-ajax

*/
?>