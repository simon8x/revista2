<?php get_header();?>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
   ?>
 <?php  if ( have_posts() ) : the_post();  ?>
<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'destacado' );?>
<div class="parallax-header">
  <div class="parallax-image"  id="parallax-image" data-stellar-ratio="0.5" data-image="<?php echo $image_src[0];?>"></div>
  <div class="parallax-wrapper">
    <div class="container">
      <div class="mag-content parallax-box">
        <div class="row">
          <div class="col-md-12 parallax-box">
            <header class="post-header">
              <h1 class="post-title">
                <?php the_title();?>
              </h1>
 
 
              <p class="simple-share">
                <span>por <a href="#"><b><?php the_author_posts_link(); ?></b></a></span>
              </p>
            </header>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-md-12">
		<div class="ad728-wrapper mid-wrapper">
			<?php echo adrotate_group(10); ?>
		</div>
    </div>
  </div>

<div class="container main-wrapper contenedor-cuerpo">
   <div class="main-content mag-content clearfix">
      <div class="row blog-content" data-stickyparent>
         <div class="mag-content clearfix">
         </div>
         <div class="col-md-9" data-stickycolumn>
		
            <article class="post-wrapper clearfix">
               <!-- .post-header -->
               <div class="post-content clearfix">
                  <?php the_content();?>
               </div>
               <!-- .post-content -->
               <footer class="post-meta">
                  
                  <!-- .tags-wrapper -->
                  <div class="share-wrapper clearfix">
				  <div class="row">
					 
					 <?php
						if(has_tag()) { ?>
								<div class="col-md-6">
								<div class="tags-wrapper">
							   <?php the_tags( '<ul class="tags-widget clearfix"><li class="trending">TAGS:</li><li>', '</li><li>', '</li></ul>' ); ?>
							   </div>
								</div>
						 <?php
						} else { ?>
							<div class="col-md-6">
								<div class="tags-wrapper">
									<ul class="tags-widget clearfix">
										<li class="trending">Categorías:</li>
									<?php
										$categories = get_the_category();
										foreach  ($categories as $category) {
										  echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
										}
									?>

									</ul>
								</div>
								</div>
								<?php
						} 			 
					 ?>
					
					
					<div class="col-md-6">

                     <div class="tags-wrapper">
                        <a class="social-share facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>" target="_blank">
							<i class="fa fa-facebook"></i> 
							<span class="alt-text">Compartir</span>
                        </a>
                        <a class="social-share twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
                        <i class="fa fa-twitter"></i> 
                        <span class="alt-text">Tuitear</span>
                        </a>
                     </div>
					 </div>
					 </div>
                  </div>

               </footer>
            </article>
			
            <?php include('tpl-notas-relacionadas.php');?>                 

         </div>
         <!-- End Left big column -->
        <?php include('sidebar.php');?>
         <!-- End last column -->        
      </div>
      <!-- .blog-content -->
   </div>
   <!-- .main-content -->
</div>
<!-- .main-wrapper -->
<?php endif;?>
<?php get_footer();?>