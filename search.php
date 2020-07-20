<?php get_header();?>
<div class="container main-wrapper">
<!-- End Main Banner -->
<div class="mag-content clearfix">
  <div class="row">
    <div class="col-md-12">
		<div class="ad728-wrapper mid-wrapper">
			<?php echo adrotate_group(11); ?>
		</div>
    </div>
  </div>
</div>
<!-- End Main Banner -->
<div class="main-content mag-content clearfix">
<?php 
$allsearch = new WP_Query("s=$s&showposts=-1&post_status=publish"); 
$key = esc_html($s); 
$count = $allsearch->post_count;
?>
	<div class="row blog-content">
		<div class="col-md-9">
			<h3 class="tag-title"><?php printf( esc_html__( 'Resultados para: %s', 'wp-terciar' ), '<strong>&ldquo;' . get_search_query() . '&rdquo;</strong>' ); ?></h3>
			<h4>Se han encontrado <?php echo $count;?> resultados.</h4>
			<?php  if (have_posts()) : while ( have_posts() ) : the_post(); $keys=trim( $s,' '); ?>
            <article class="simple-post simple-big clearfix">  
				<div class="simple-thumb">
					<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() )  { the_post_thumbnail('relacionado', array('class' => 'img-responsive'));} else {  ?>
							<img class="img-responsive" src="https://cronicasdeagua.com/wp-content/uploads/2018/09/full-260x180.jpg">
								<?php } ?>
					
					</a>
				</div>
				<header>
					
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<?php if (get_field('bajada')) { ?>
					<p class="excerpt"><?php the_field('bajada');?></p>
					<?php } ?>
					<?php  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
				</header>
            </article>
			<?php endwhile;  wp_reset_query();?>
			<!--nav class="paginador text-center pt-5">
				<?php // my_pagination(); ?>
			</nav-->    
			<?php endif; ?>
            <div class="row">
			 <?php echo '<div id="misha_loadmorez"></div>';  ?>
				<div class="col-md-12">
					<?php
					global $wp_query; 

					if (  $wp_query->max_num_pages > 1 )
						echo '<div class="load-more"><button type="button" class="btn btn-lg btn-block misha_loadmore_search">Mostrar más</button></div>'; // you can use <a> as well
					?>
				</div>
			</div>	
		</div>
		<?php include('sidebar.php');?>   
	</div>
</div>
<!-- End Main Banner -->
<div class="mag-content clearfix">
  <div class="row">
    <div class="col-md-12">
      <div class="ad728-wrapper">
        <a href="#">
          <img src="http://placehold.it/728x90" alt=""/>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>	