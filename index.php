<?php get_header();?>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
  ?>
<div class="container main-wrapper">
   <div class="main-content mag-content clearfix">
      <?php include('tpl-home-destacado.php');?>  	
	  <div class="row">
		<div class="ad728-wrapper mid-wrapper">
			<?php echo adrotate_group(1); ?>
		</div>
	  </div>
	  
      <div class="row main-body">
		<div class="col-md-12">
            <?php /////////////////////////////////////////////////include('tpl-home-autores.php');?>
            <?php include('tpl-home-n1-n2.php');?>
            <?php include('tpl-home-cocina-n3.php');?>
            <?php include('tpl-home-n4-tecnologia.php');?>
			   <?php include('tpl-home-n5-n6.php');?>
			   <?php include('tpl-home-autores2.php');?>
            <?php include('tpl-home-videos.php');?>
		</div>
      </div>
   </div>
   <!-- .main-content -->
</div>
<!-- .main-wrapper -->
<?php get_footer();?>