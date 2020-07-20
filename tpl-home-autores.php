<div class="row blog-content"><!--del template-->
	<?php 
	//$args = array('include' => array(2),); 
	$args_author = array('class' => 'img-responsive img-circle');
	//$authors=get_users($args);
	$authors=get_users();
	//var_dump($authors);die;
    $i=0;
    foreach($authors as $author){
        $authorList[$i]['id']=$author->data->ID;
        $authorList[$i]['name']=$author->data->display_name;
        $i++;
		echo $author->data->display_name;
    }
	//die;
	$j=0;
        foreach($authorList as $author){
            $args=array(
                    'showposts'=>-1,
                    'author'=>$author['id'],
                    //'caller_get_posts'=>1
					'cat' => 18,
                   );
            $query = new WP_Query($args);
            if($query->have_posts() ) {
                while ($query->have_posts()){
                    $query->the_post();?>
					 <div class="col-md-4">
					  <div class="widget author-widget-home"><!--agregado-->

						<article class="simple-post clearfix sin-padding">  
						  <h5 href="#" class="volanta texto-izquierda">
							<?php the_field('volanta'); ?>
						  </h5>
						  <header>
							<h3 class="texto-izquierda"><!--agregado-->
							  <a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h3>
						  </header>
						</article>

						<div class="author-thumb">
						  
							<?php echo get_avatar( $author['id'], 70, null, null, $args_author  ); ?>
						  
						</div>
						<h3 class="author-title"> 
						  <?php the_author_posts_link(); ?>
						</h3>

					  </div>
					</div>  
					<?php }  }  wp_reset_postdata();
					$j++;	
					if($j == 3) { break;}
					}
					?>
</div>
<div class="row">
	<?php get_users_ordered_by_post_date('role=author');?>
	</div>