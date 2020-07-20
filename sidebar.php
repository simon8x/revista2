<div class="col-md-3" data-stickycolumn>
   <aside class="sidebar clearfix">
      <div class="widget tabwidget">
         <ul class="nav nav-tabs" role="tablist" id="widget-tab">
            <li role="presentation" class="active"><a href="#tab-popular" aria-controls="tab-popular" role="tab" data-toggle="tab">Actualidad</a></li>
         </ul>
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab-popular">
			<?php
				$args_sb="";
				$the_query_sb=null;
				$args_sb = array( 'cat' => 13 , 
					 'post_status' => 'publish', 
					 'ignore_sticky_posts' => true,
					 'posts_per_page' => 6,
					 'orderby' => 'date', 
					 'order' => 'DESC') ;
				$the_query_sb = new WP_Query ($args_sb);
				if ( $the_query_sb->have_posts() ) : while ( $the_query_sb->have_posts() ) : $the_query_sb->the_post();?>
					<article class="widget-post clearfix">
						<div class="simple-thumb">
						   <a href="<?php the_permalink();?>">
							<?php if ( has_post_thumbnail() )  { the_post_thumbnail('mini-side', array('class' => 'img-responsive'));} 
							else { ?>
									<img class="img-responsive" src="https://cronicasdeagua.com/wp-content/uploads/2018/07/g-slider2-95x80.jpg">
								<?php } ?>
						   </a>
						</div>
						<header>
						   <h3>
							  <a href="<?php the_permalink();?>"><?php the_title();?></a>
						   </h3>
						</header>
					</article>
				<?php endwhile; endif;wp_reset_query();?>
            </div>
            <!-- Popular posts -->
         </div>
      </div>
	  <div class="widget reviewwidget">
		<a href="https://cronicasdeagua.com/cronica-en-videos/" target="_self">
			<img src="https://cronicasdeagua.com/wp-content/uploads/2019/06/conicaenvideos.jpg" class="img-responsive">
		</a>
	  </div>
      <div class="widget reviewwidget">
         <h3 class="block-title"><span>Más leídas</span></h3>
         <?php	
			global $wpdb;
			  $querystr = "
				SELECT distinct $wpdb->posts.* 
				FROM $wpdb->posts, $wpdb->postmeta
				WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
				AND $wpdb->posts.post_type = 'post'
				AND $wpdb->posts.post_status = 'publish' 
				AND $wpdb->postmeta.meta_key = 'post_views'  
				order by  CAST($wpdb->postmeta.meta_value AS SIGNED ) DESC limit 0,4";
				$pageposts = $wpdb->get_results($querystr, OBJECT);
				if ($pageposts): 
					global $post; 
					foreach ($pageposts as $post): 
						setup_postdata($post); ?>
						<article class="widget-post clearfix">
							<div class="simple-thumb">
							   <a href="<?php the_permalink();?>">
								<?php if ( has_post_thumbnail() )  { the_post_thumbnail('mini-side', array('class' => 'img-responsive'));} 
								else { ?>
									<img class="img-responsive" src="https://cronicasdeagua.com/wp-content/uploads/2018/07/g-slider2-95x80.jpg">
								<?php } ?>
							   </a>
							</div>
							<header>
							   <h3>
								  <a href="<?php the_permalink();?>"><?php the_title();?></a>
							   </h3>
							</header>
						</article>
		<?php endforeach; endif;wp_reset_postdata();wp_reset_query(); ?>
      </div>
      <!-- End review widget -->
   </aside>
</div>