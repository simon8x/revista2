<?php
   /*
      	Template Name: Cronicas
   */
?>
<?php get_header();?>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
  ?>
<?php $cat = get_query_var('cat');?>
<div class="parallax-header page-wrapper">
   <!-- Parallax image -->
   <div class="parallax-image" id="parallax-image" data-stellar-ratio="0.5" data-image="<?php echo $path;?>/images/cabecera-solo-imagen-cronicas.jpg">
   </div>
   <!-- Post title and meta -->
   <div class="parallax-wrapper">
      <div class="container">
         <div class="mag-content parallax-box">
            <div class="row">
               <div class="col-md-12 parallax-box">
                  <header class="page-header">
                     <h1 class="page-title">
                        CRÓNICAS
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
      <div class="row">
            <div class="col-md-12" data-stickycolumn>
				<div class="row">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args2="";
					$i=1;
					$the_query2=null;
					$args2 =  array( 'post_type' => 'cronicas',
									 'post_status' => 'publish', 
									 //'post__not_in' => $firstPosts, 
									 'posts_per_page' => 8,
									 'paged' => $paged,
									 'orderby' => 'date', 
									 'order' => 'DESC') ;
					$the_query2 = new WP_Query ($args2);
					if ( have_posts() ) : 
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
					<?php endwhile; ?>
					<?php endif;wp_reset_postdata();?>
				
				</div>
					<?php
						  if ( function_exists('wp_bootstrap_pagination') )
							wp_bootstrap_pagination();
						?>
				
			</div>   
         </div>
		 <div class="row">
			<div class="col-md-12">
				<div class="load-more">
					<button type="button" class="btn btn-lg btn-block">Cargar más</button>
				</div>
			</div>
		 </div>
      </div>
</div>
<?php get_footer();?>