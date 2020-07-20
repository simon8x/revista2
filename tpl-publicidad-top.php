<?php 
$postid = 73;
$hoy = date( 'd/m/Y');
$args73 = array('p' => $postid,'post_type' => 'publicidad',);
$loop = new WP_Query($args73);
if($loop->have_posts()) : 
		$loop->the_post();
		 if( have_rows('tipo_publicidad') ){ 
				while ( have_rows('tipo_publicidad') ) { 
					the_row();  
					if( get_row_layout() == 'imagen_cf' && (($hoy >= get_sub_field('fecha_inicio_pub')  ) && ( $hoy <= get_sub_field('fecha_fin_pub') ) )){ ?>
						<div class="row">
							 <div class="col-md-12">
								<div class="ad728-wrapper mid-wrapper">
								   <a href="<?php the_sub_field('link_pub');?>" target="_blank">
								   <img class="img-responsive" src="<?php the_sub_field('imagen_pub');?>" alt=""/>
								   </a>
								</div>
							 </div>
						  </div>
				<?php } elseif ( get_row_layout() == 'iframe_cf' && (($hoy >= get_sub_field('fecha_inicio_pub_emb')  ) && ( $hoy <= get_sub_field('fecha_fin_pub_emb') ) )){ ?>
							<div class="row">
							 <div class="col-md-12">
								<div class="ad728-wrapper mid-wrapper">
								   <?php the_sub_field('iframe_cf');?>
								</div>
							 </div>
						  </div>
				
				<?php	} else { ?>
							<div class="row">
								 <div class="col-md-12">
									<div class="ad728-wrapper mid-wrapper">
									   <a href="#">
									   <img src="http://placehold.it/728x90" alt=""/>
									   </a>
									</div>
								 </div>
							  </div>
				<?php } ?>
			<?php } ?>
		<?php } ?>
<?php 
else : ?>
		<div class="row">
         <div class="col-md-12">
            <div class="ad728-wrapper mid-wrapper">
               <a href="#">
               <img src="http://placehold.it/728x90" alt=""/>
               </a>
            </div>
         </div>
      </div>
<?php 
endif; wp_reset_query();?>