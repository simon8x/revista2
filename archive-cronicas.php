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
		<div class="ad728-wrapper mid-wrapper">
			<!--AD-SECCION-1 [728x90]-->
			<?php echo adrotate_group(7); ?>
		</div>
	 </div>

   <div class="main-content mag-content">
      <div class="row">
            <div class="col-md-12" data-stickycolumn>
				<div class="row">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args2="";
					$i=1;
					$mix=0;
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
							$i++;
							$mix++;?>
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

							  </div>
							  <?php if($mix%2==0) { echo '</div><div class="row">'; }?>
							  <?php if($mix == 4) { ?>
								  <div class="row">
										<div class="col-md-6">
											<div class="ad728-wrapper mid-wrapper">
												<!--AD-SECCION-2 [540x90]-->
												<?php echo adrotate_group(8); ?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="ad728-wrapper mid-wrapper">
												<!--AD-SECCION-3 [540x90]-->
												<?php echo adrotate_group(9); ?>
											</div>
										</div>
								   </div>
								 <?php } ?> 


					<?php endwhile; ?>
					<?php endif;wp_reset_postdata();?>

			</div>   

		  <div class="row">
		   <?php echo '<div id="misha_loadmorez"></div>';  ?>
		  	<div class="col-md-12">
		  		<?php
		  		global $wp_query; // you can remove this line if everything works for you
		  		 
		  		// don't display the button if there are not enough posts
		  		if (  $wp_query->max_num_pages > 1 )
		  			echo '<div class="load-more"><button type="button" class="btn btn-lg btn-block misha_loadmore_cronicas">Mostrar más</button></div>'; // you can use <a> as well
		  		?>
		  	</div>
		  </div>
      </div>
</div>
      </div>
</div>
<?php get_footer();?>