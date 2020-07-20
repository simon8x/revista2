<?php get_header();?>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
   ?>
 <?php  if ( have_posts() ) : the_post();  ?>
<div class="container main-wrapper">
  <div class="main-content mag-content clearfix">
    <div class="row blog-content">
      <div class="mag-content clearfix">
      </div>
      <div class="col-md-12">
        <article class="post-wrapper clearfix">
               <!-- .post-header -->
               <div class="post-content clearfix">
                  <?php the_content();?>
               </div>
               <!-- .post-content -->
        </article>
         </div>
         <!-- End Left big column -->
        <?php //include('sidebar.php');?>
         <!-- End last column -->        
      </div>
      <!-- .blog-content -->
   </div>
   <!-- .main-content -->
</div>
<!-- .main-wrapper -->
<?php endif;?>
<?php get_footer();?>