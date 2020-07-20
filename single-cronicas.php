<?php get_header();?>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
   ?>
<?php
   $args = array('class' => 'img-responsive img-circle avatar');
   ?>
<?php if ( have_posts() ) { the_post();  ?>
<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'destacado' );?>
<div class="parallax-header">
   <div class="parallax-image" style="top:0!important;"  id="parallax-image" data-stellar-ratio="0.5" data-image="<?php echo $image_src[0];?>"></div>
   <div class="parallax-wrapper">
      <div class="container">
         <div class="mag-content parallax-box">
            <div class="row">
               <div class="col-md-12 parallax-box">
                  <header class="post-header">
                     <h1 class="post-title">
                        <?php the_title();?>
                     </h1>
                     <?php  echo '<p class="page-header page-description extracto-cronica">' . get_the_excerpt() . '</p>'; ?>
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
<div class="container main-wrapper" style="padding-top:0px!important;">

<div class="main-content mag-content clearfix" style="margin-top:0px!important;">
   <div class="row blog-content" data-stickyparent>
      <div class="mag-content clearfix"></div>
      <div class="col-md-12" data-stickycolumn>
         <article class="post-wrapper clearfix">
            <div class="post-content clearfix">
               <div class="row">
                  <div class="col-md-4">
                     <div class="widget author-widget">
                        <div class="author-thumb">
                           <?php //echo get_avatar( $user_id, 128, null, null, $args  ); ?>
                           <?php echo get_avatar( get_the_author_meta('user_email'), $size = '190'); ?>
                        </div>
                        <div class="author-meta">
                           <h3 class="author-title">
                              <?php the_author_posts_link(); ?>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <?php the_field('texto_arriba');?>
                  </div>
               </div>
               <div class="fantasma"></div>
               <?php if( have_rows('modulos') ){ while ( have_rows('modulos') ) { the_row();?>
               <!-- módulo texto -->
               <?php if( get_row_layout() == 'texto_fc' ){ ?>
               <?php the_sub_field('texto_fld');?>
               <?php } ?>
               <!-- lo bueno lo malo -->
               <?php if( get_row_layout() == 'lo_bueno_lo_malo_fc' ){ ?>
               <div class="row">
                  <div class="col-md-4">
                     <p><?php the_sub_field('texto_izquierda_fld');  ?></p>
                  </div>
                  <div class="col-md-4">
                     <div class="lobueno">
                        <div class="encabezado-bueno">
                           <div class="bueno-1">
                              <h3>lo</h3>
                           </div>
                           <div class="bueno-2">
                              <h3>bueno</h3>
                           </div>
                        </div>
                        <ul class="fa-ul">
                           <?php if( have_rows('lo_bueno_r') ): 
                              while( have_rows('lo_bueno_r') ): the_row(); ?>
                           <li><i class="fa fa-li fa-dot-circle-o"></i><?php the_sub_field('items_buenos');?></li>
                           <?php endwhile; endif; ?>
                        </ul>
                     </div>
                     <div class="lomalo">
                        <div class="encabezado-malo">
                           <div class="malo-1">
                              <h3>lo</h3>
                           </div>
                           <div class="malo-2">
                              <h3>malo</h3>
                           </div>
                        </div>
                        <ul class="fa-ul">
                           <?php if( have_rows('lo_malo_r') ): 
                              while( have_rows('lo_malo_r') ): the_row(); ?>
                           <li><i class="fa fa-li fa-dot-circle-o"></i><?php the_sub_field('items_malos');?></li>
                           <?php endwhile; endif; ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <p><?php the_sub_field('texto_derecha_fld');  ?></p>
                  </div>
               </div>
               <div class="fantasma"></div>
               <?php } ?>
			   
			   <!-- módulo la cifra -->
               <?php if( get_row_layout() == 'lacifra_fc' ){ ?>
					<div class="row">
						<div class="col-md-4">
							<p><?php the_sub_field('texto_izquierda_c');  ?></p>
						</div>
						<div class="col-md-4">
							<div class="lacifra">
								<div class="encabezado-cifra">
									<div class="cifra2"><h3>LA CIFRA</h3></div>
								</div>
								<dir class="corner1"></dir>
								<dir class="corner11"></dir>
								<dir class="corner2"></dir>            
								<ul class="fa-ul">
									<li>
										<h3><?php the_sub_field('cifra_titulo_fld');  ?></h3>
										<p><?php the_sub_field('cifra_texto_fld');  ?></p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<p><?php the_sub_field('texto_derecha_c');  ?></p>
						</div>
					</div>
               <div class="fantasma"></div>
               <?php } ?>
			   <!-- módulo la cita -->
               <?php if( get_row_layout() == 'lacita_fc' ){ ?>
					<div class="row">
						<div class="col-md-4">
							<p><?php the_sub_field('cita_izquierda_c');  ?></p>
						</div>
						<div class="col-md-4">
							<div class="lacita">
								<div class="encabezado-cita">
									<div class="cita2"><h3>LA CITA</h3></div>
								</div>
								<dir class="corner1"></dir>
								<dir class="corner11"></dir>
								<dir class="corner2"></dir>
								<ul class="fa-ul">
									<li>
										<i class="fa fa-quote-left"></i>
										<p><?php the_sub_field('cita_fld');  ?></p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<p><?php the_sub_field('cita_derecha_c');  ?></p>
						</div>
					</div>
               <?php } ?>
			   
			   <!-- módulo imagen -->
               <?php if( get_row_layout() == 'imagen_fc' ){ ?>
			   <?php if (get_sub_field('imagen_fld')) { ?>	
					<div class="row">
					  <figure class="image-overlay nobackgrou">
						<img class="imagen-sola" src="<?php the_sub_field('imagen_fld');?>" alt="<?php the_title();?>">
					  </figure>
					</div>
					<div class="fantasma"></div>
               <?php } ?>
			   <?php } ?>
			   <!-- módulo video -->
               <?php if( get_row_layout() == 'video_fc' ){ ?>
			   <?php if (get_sub_field('video_fld')) { ?>	
					<div class="row renglon-video">
						<figure class="image-overlay nobackgrou">
						<?php the_sub_field('video_fld');?>
						</figure>
					</div>
					<div class="fantasma"></div>
               <?php } ?>
			   <?php } ?>

			   <!-- módulo Imagen - Texto -->
               <?php if( get_row_layout() == 'foto_y_texto_fc' ){ ?>
			   <?php if (get_sub_field('foto_fld_2')) { ?>	
						
						<div class="row renglon-txt-pic">
						  <div class="col-md-4">
							<figure class="image-overlay nobackgrou">
							  <img class="imagen-sola" src="<?php the_sub_field('foto_fld_2');?>" alt="<?php the_title();?>">
							</figure>
						  </div>
						   <?php if (get_sub_field('texto_fld_2')) { ?>	
							  <div class="col-md-8">
								<p class="parrafo">
								  <?php the_sub_field('texto_fld_2');?>
								</p>
							  </div>
							<?php } ?>
						</div>
						<div class="fantasma"></div>
			   
               <?php } ?>
			   <?php } ?>
			   
			   <!-- módulo Texto - Imagen -->
               <?php if( get_row_layout() == 'texto_y_foto_fc' ){ ?>
			   <?php if (get_sub_field('texto_fld')) { ?>	
						
						<div class="row renglon-txt-pic">
						  
						   <?php if (get_sub_field('texto_fld')) { ?>	
							  <div class="col-md-8">
								<p class="parrafo">
								  <?php the_sub_field('texto_fld');?>
								</p>
							  </div>
							<?php } ?>
							
							<div class="col-md-4">
							<figure class="image-overlay nobackgrou">
							  <img class="imagen-sola" src="<?php the_sub_field('foto_fld');?>" alt="<?php the_title();?>">
							</figure>
						  </div>
						</div>
						<div class="fantasma"></div>
			   
               <?php } ?>
			   <?php } ?>
			   
			   
			   <?php if( get_row_layout() == 'carrousel_fc' ){ ?>
				<!-- módulo slider -->
				<div class="row renglon-slider">
				  <div class="col-md-12">
					<div class="flexslider">
					  <div class="featured-slider">
							<?php
								$images = get_sub_field('carrousel_fld');
								if($images ): 
									$galeria = 1;
									foreach( $images as $image ): ?>
										<div class="slider-item">
										  <div class="contenedor-img-sld">
											<img src="<?php echo $image['url']; ?>" alt="<?php the_title();?>"/>
										  </div>
										</div><?php
									endforeach; 
								endif;?>
					  </div>
					</div>
				  </div>
				</div>
				<div class="fantasma"></div>
				<?php } ?>
			   	   
               <?php } } ?> 
 
         </article>
         </div>
      </div>
   </div>
</div>
</div>
<?php } ?>
<?php /*if ( have_posts() ) { the_post(); ?>
<?php 
   if( have_rows('modulos') ){ while ( have_rows('modulos') ) { the_row();?>
<!-- módulo texto -->
<?php if( get_row_layout() == 'texto' ){ ?>
<div class="container">
   <div class="row nota-texto">
      <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
         <?php the_sub_field('fc_texto');?>
      </div>
   </div>
</div>
<?php } ?>
<!-- módulo frase sm --> 
<?php if( get_row_layout() == 'frase' ){ ?>
<div class="container">
   <div class="row nota-frase">
      <div class="col-2 col-md-3 nota-frase-comillas">&ldquo;</div>
      <div class="col-10 col-md-7 col-xl-6">
         <h5> <?php the_sub_field('fc_frase');?></h5>
         <?php if (get_sub_field('bajada_autor')) { ?>
         <h6><?php the_sub_field('bajada_autor');?></h6>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>
<?php if( get_row_layout() == 'video' ){  ?>
<!-- módulo video sm -->    
<div class="container">
   <?php if (get_sub_field('tamano') == 'Chico') { ?>
   <div class="row nota-video">
      <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
         <div class="embed-responsive embed-responsive-16by9">
            <div class="embed-container">
               <?php the_sub_field('cf_video'); ?>
            </div>
         </div>
         <?php if (get_sub_field('cf_epigrafe')) { ?>
         <div class="nota-epigrafe">
            <?php the_sub_field('cf_epigrafe');?>
         </div>
         <?php } ?>
      </div>
   </div>
   <?php } else { ?>
   <div class="row nota-video nota-video-lg">
      <div class="col-12">
         <div class="embed-responsive embed-responsive-16by9">
            <div class="embed-container">
               <?php the_sub_field('cf_video'); ?>
            </div>
         </div>
         <?php if (get_sub_field('cf_epigrafe')) { ?>
         <div class="nota-epigrafe">
            <?php the_sub_field('cf_epigrafe');?>
         </div>
         <?php } ?>
      </div>
   </div>
   <?php } ?>
</div>
<?php } ?>
<?php if( get_row_layout() == 'foto' ){ ?>
<?php if (get_sub_field('tamano') == 'chica') { ?>
<div class="container">
   <!-- módulo foto sm -->    
   <div class="row nota-foto">
      <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
         <img src="<?php the_sub_field('cf_foto');?>" alt="<?php the_title();?>" class="img-fluid">
         <?php if (get_sub_field('epigrafe')) { ?>
         <div class="nota-epigrafe">
            <?php the_sub_field('epigrafe');?>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>
<?php if (get_sub_field('tamano') == 'mediana') { ?>
<!-- módulo foto md -->
<div class="container">
   <div class="row nota-foto">
      <div class="col-12">
         <img src="<?php the_sub_field('cf_foto');?>" alt="<?php the_title();?>" class="img-fluid">
         <?php if (get_sub_field('epigrafe')) { ?>
         <div class="nota-epigrafe">
            <?php the_sub_field('epigrafe');?>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>
<?php if (get_sub_field('tamano') == 'grande') { ?>
<!-- módulo foto lg -->
<div class="nota-foto">
   <img src="<?php the_sub_field('cf_foto');?>" alt="<?php the_title();?>" class="img-fluid">
   <?php if (get_sub_field('epigrafe')) { ?>
   <div class="nota-epigrafe">
      <?php the_sub_field('epigrafe');?>
   </div>
   <?php } ?>
</div>
<?php } ?>
<?php } ?> 
<!-- módulo galería -->
<?php if( get_row_layout() == 'galeria_de_fotos' ){ ?>
<div class="container gallery-container nota-galeria">
   <div class="tz-gallery">
      <div class="row">
         <?php
            $images = get_sub_field('galeria_de_fotos');
            if($images ): 
            	$galeria = 1;
            	foreach( $images as $image ): ?>
         <div class="col-6 col-sm-4">
            <a class="lightbox" href="<?php echo $image['url']; ?>">
            <img src="<?php echo $image['url']; ?>" alt="Bridge">
            </a>
         </div>
         <?php
            endforeach; 
            endif;?>
      </div>
      <div class="row">
         <div class="col-12">
            <?php if (get_sub_field('epigrafe_gal')) { ?>
            <div class="nota-epigrafe">
               <?php the_sub_field('epigrafe_gal');?>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>
<?php } ?> 
<!-- módulo redes -->
<?php if( get_row_layout() == 'post_de_redes' ){ ?>
<div class="container">
   <div class="row nota-redes">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
         <?php the_sub_field('post_de_redes');?>
      </div>
   </div>
</div>
<?php } ?> 
<?php }  ?>
<?php } */?>
<?php get_footer();?>