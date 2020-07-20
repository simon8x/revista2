<?php get_header();?>
 <div class="container main-wrapper">
    <div class="main-content mag-content clearfix">

      <div class="row blog-content">
        <div class="col-md-12">
            <h3 class="tag-title">Ups... <span>Error 404</span></h3>

            <p>Esta página no existe.</p>
            <div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="search-div clearfix">
					  <!--form class="searchwidget-form">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Buscar...">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						  </span>
						</div>
					  </form-->
					  <form class="searchwidget-form" role="form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
						<div class="input-group">
							<input class="sb-search-input search" placeholder="ingresar texto a buscar..." autocomplete="off" type="text" value="" name="s" id="s">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						  </span>
						</div>
						  </form>
					  
					  
					</div><!-- .search-div -->
				</div>
			</div>
            <div class="row">
              <div class="col-md-6">
                <div class="widget categorywidget">
                  <h3 class="block-title"><span>Categorias</span></h3>
                  <ul>
					<?php 
                                    $args = array('orderby' => 'name','parent' => 0);
                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) {
                                    	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
									}
                    ?>
                    

                  </ul>
                </div>
              </div>

              <div class="col-md-6">
                <div class="widget tagwidget">
                  <h3 class="block-title"><span>Etiquetas</span></h3>
                  <ul class="tags-widget">
					<?php 
	wp_tag_cloud( array( 'topic_count_text_callback' => 'my_tag_text_callback' ) ); 

	function my_tag_text_callback( $count ) {
		return sprintf( _n( '%s picture', '%s pictures', $count ), number_format_i18n( $count ) );
	}
?>
                  </ul>
                </div>
              </div>
            </div>

        </div>
		</div>
		</div>
		</div>
<?php get_footer();?>