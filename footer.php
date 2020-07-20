<!-- Footer -->
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
  ?>
<footer class="footer source-org vcard copyright clearfix" id="footer" role="contentinfo">
  <div class="footer-main">
    <div class="fixed-main">
      <div class="container">
        <div class="mag-content">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-block clearfix">
                <p class="clearfix p-del-logo">
                  <!-- <a class="logo" href="index.html" title="Admag - Responsive magazine HTML Template" rel="home"> -->
                     <img src="<?php echo $path;?>/images/logo-cronicas-menu.jpg" class="img-responsive logo-cronicas-pie">
                  <!--</a> .logo -->
                </p>
                <p class="description">
                 <span class="site-name-foo"> Crónicas de agua</span><br>
                 <span class="site-mail-foo">redaccion@cronicasdeagua.com</span>
                </p>
                <ul class="social-list clearfix">
                  <li class="social-facebook">
                    <a href="https://www.facebook.com/cronicasdeagua/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                    <a href="https://twitter.com/cronicasdeagua" target="_blank">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>

                  <li class="social-youtube">
                    <a href="https://www.youtube.com/channel/UC5KCUlqNORCMn-iFUQTclTg" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li class="social-instagram">
                    <a href="https://www.instagram.com/cronicasdeaguaok/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>

                </ul>
              </div><!-- Footer Block -->
            </div>
				
            <!--div class="col-md-4">
              <div class="footer-block clearfix columna-2-pie">
                <img src="https://cronicasdeagua.com/wp-content/uploads/2019/01/nuevologo-fondo-0-blanco.png" class="img-responsive logo-fondo" >

                <ul class="footer-menu enlases-del-pie">
                  <li>
                    <a href="#">
                      CDA
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Staff
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Colaboradores
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Política de privacidad
                    </a>
                  </li>
                </ul>
              </div>
            </div-->
			
			<div class="col-md-8">
              <div class="footer-block clearfix">
                <!-- <h3 class="footer-title pull-right">Etiquetas</h3> -->
				<!-- 
                <ul class="tags-widget">
				   <?php $tags = wp_tag_cloud( array('smallest'=>10, 'largest'=>10, 'number'=>33, 'orderby'=>'name', 'order'=>'ASC', 'format' => 'array') );
						foreach($tags as $tag) {
							if($tag) {
								echo '<li>'. $tag .'</li>';
							}
					} ?>

                </ul> 
				-->
				  
              </div>
            </div>
			
			
			
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom clearfix">
    <div class="fixed-main">
      <div class="container">
        <div class="mag-content">
          <div class="row">
            <div class="col-md-6">
              <p>Crónicas de Agua © 2019</p>
            </div>

            <div class="col-md-6">
              <div class="social-icons pull-right by-terciar">
                <a href="https://terciar.info/" target="_blank">Hecho con <i class="fa fa-heart"></i> por <strong>Terciar</strong></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <?php wp_footer(); ?>
</footer>
<!-- End Footer -->

</div><!-- End Main -->

<!-- Mobile Menu -->
<ul id="mobile-nav" class="nav navbar-nav">
<?php
				wp_nav_menu(array(
				'theme_location'    => 'primary',
				'container'       => 'ul',
				'container_id'    => '',
				'container_class' => 'navbar-collapse collapse',
				'menu_id'         => false,
				'menu_class'      => 'nav navbar-nav',
				'depth'           => 0,
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'walker'          => new wp_bootstrap_navwalker()
				));
				?>
    </ul>

<!-- / Mobile Menu -->
<div id="go-top-button" class="fa fa-angle-up" title="Scroll To Top"></div>
<div class="mobile-overlay" id="mobile-overlay"></div>


<!--script>
 var ajaxUrl = "<?php //echo admin_url('admin-ajax.php')?>";
    var page = 1; // What page we are on.
    var ppp = 3; // Post per page

    $("#more_posts").on("click",function(){ // When btn is pressed.
        $("#more_posts").attr("disabled",true); // Disable the button, temp.
        $.post(ajaxUrl, {
            action:"more_post_ajax",
            offset: (page * ppp) + 1,
            ppp: ppp
        }).success(function(posts){
            page++;
            $(".name_of_posts_class").append(posts); // CHANGE THIS!
            $("#more_posts").attr("disabled",false);
        });

   });
</script-->
</body>
</html>