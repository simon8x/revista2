<?php get_header();?>
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
					$current_page = get_queried_object();
					$i=1;
					$mix=0;
					//query_posts('cat=$cat'); 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
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

					<?php endwhile;//wp_reset_query(); ?>
					<?php endif;?>

				</div>
				 <div class="row">
				 <?php echo '<div id="misha_loadmorez"></div>';  ?>
					<div class="col-md-12">
						<?php
						//global $wp_query;
						if (  $wp_query->max_num_pages > 1 )
							echo '<div class="load-more"><button type="button" class="btn btn-lg btn-block misha_loadmore">Mostrar más</button></div>'; // you can use <a> as well
						?>
					</div>
				</div>	
				
			</div>   
         </div>
		
</div>
</div>
<?php get_footer();?>