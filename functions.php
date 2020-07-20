<?php

function ss_scripts() {
	
    if (!is_admin()) {
		
        wp_deregister_script('jquery'); 
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', false, '1.11.2', true);
		wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '1.0', true );
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.js', array('jquery'), '1.0', true );
		wp_register_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?v=3.exp',array('jquery'), '1.0', true );
		wp_register_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
        wp_register_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );
	
		 wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
		 wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
        wp_enqueue_style( 'customizer', get_template_directory_uri() . '/css/customizer.css', array(), '1.0', 'all');	
		wp_enqueue_style( 'style', get_stylesheet_uri() );  
		
       
		


        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,400italic,500,700,700italic,900' );
		wp_enqueue_style( 'noto', 'https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' );
		wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:900' );
		wp_enqueue_style( 'fira', 'https://fonts.googleapis.com/css?family=Fira+Sans:400,700' );
		wp_enqueue_style( 'ralewayos', 'https://fonts.googleapis.com/css?family=Fira+Sans:400,700|Open+Sans' );
		
        
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'gmap');
        wp_enqueue_script( 'plugin' );
        wp_enqueue_script( 'scripts');
       
	}

}
add_action( 'wp_enqueue_scripts', 'ss_scripts' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'relacionado', 260, 180, true );
add_image_size( 'destacado', 1125, 500, true );
add_image_size( 'home', 540, 355, true );
add_image_size( 'mini', 160, 80, true );
add_image_size( 'mini-side', 95, 80, true );

register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cronicas' ),
) );
//require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
//require_once('wp_bootstrap_pagination.php');
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/wp_bootstrap_navwalker.php');
}
/*function chaco_magazzine_style_nscripts(){
	//css y fonts
	wp_enqueue_style('font-roboto', 'http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,400italic,500,700,700italic,900' );
	wp_enqueue_style('font-frank', 'https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre' );
	wp_enqueue_style('font-noto', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' );
	wp_enqueue_style('font-raleway', 'http://fonts.googleapis.com/css?family=Raleway:900' );
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	//wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('style', get_template_directory_uri().'/style.css' );
	
	//javascripts
	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-1.11.2.min.js');
	wp_enqueue_script('jquery-modernizr', get_template_directory_uri() . '/js/modernizr.min.js');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('plugins-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp');	
	wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.js');
	wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js');

  

}
add_action('wp_enqueue_scripts', 'chaco_magazzine_style_nscripts');
*/

/*function enqueue_ajax_load_more() {
   wp_enqueue_script('ajax-load-more'); // Already registered, just needs to be enqueued   
}
add_action( 'wp_enqueue_scripts', 'enqueue_ajax_load_more' );*/


function cronicas() {

	$labels = array(
		'name'                  => _x( 'Cronicas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cronicas', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cronicas', 'text_domain' ),
		'name_admin_bar'        => __( 'Cronicas', 'text_domain' ),
		'archives'              => __( 'Cronicas', 'text_domain' ),
		'attributes'            => __( 'Características', 'text_domain' ),
		'parent_item_colon'     => __( 'Ítem superior', 'text_domain' ),
		'all_items'             => __( 'Todas las cronicas', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nueva cronica', 'text_domain' ),
		'add_new'               => __( 'Agregar nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva cronica', 'text_domain' ),
		'edit_item'             => __( 'Editar cronica', 'text_domain' ),
		'update_item'           => __( 'Actualizar cronica', 'text_domain' ),
		'view_item'             => __( 'Ver cronica', 'text_domain' ),
		'view_items'            => __( 'Ver cronicas', 'text_domain' ),
		'search_items'          => __( 'Buscar cronicas', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encontraron cronicas', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Asignar imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el cronica', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizado', 'text_domain' ),
		'items_list'            => __( 'Lista de cronicas', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de cronicas a filtrar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'cronicas',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'cronicas', 'text_domain' ),
		'description'           => __( 'cronicas', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail', 'excerpt','author',),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'has_archive'        => true,
	);
	register_post_type( 'cronicas', $args );

}
add_action( 'init', 'cronicas', 0 );

//publicidad
/*function publicidad() {

	$labels = array(
		'name'                  => _x( 'Publicidad', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Publicidad', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Publicidad', 'text_domain' ),
		'name_admin_bar'        => __( 'Publicidad', 'text_domain' ),
		'archives'              => __( 'Publicidad', 'text_domain' ),
		'attributes'            => __( 'Características', 'text_domain' ),
		'parent_item_colon'     => __( 'Ítem superior', 'text_domain' ),
		'all_items'             => __( 'Todas las publicidades', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nueva Publicidad', 'text_domain' ),
		'add_new'               => __( 'Agregar nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva Publicidad', 'text_domain' ),
		'edit_item'             => __( 'Editar Publicidad', 'text_domain' ),
		'update_item'           => __( 'Actualizar Publicidad', 'text_domain' ),
		'view_item'             => __( 'Ver Publicidad', 'text_domain' ),
		'view_items'            => __( 'Ver publicidad', 'text_domain' ),
		'search_items'          => __( 'Buscar publicidades', 'text_domain' ),
		'not_found'             => __( 'No encontrada', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encontraron publicidades', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Asignar imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Publicidad', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizado', 'text_domain' ),
		'items_list'            => __( 'Lista de publicidad', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de publicidad a filtrar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'publicidad',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'publicidad', 'text_domain' ),
		'description'           => __( 'publicidad', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title',),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'publicidad', $args );

}
add_action( 'init', 'publicidad', 0 );
*/
//videos
function videos() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Videos', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Videos', 'text_domain' ),
		'name_admin_bar'        => __( 'Videos', 'text_domain' ),
		'archives'              => __( 'Videos', 'text_domain' ),
		'attributes'            => __( 'Características', 'text_domain' ),
		'parent_item_colon'     => __( 'Ítem superior', 'text_domain' ),
		'all_items'             => __( 'Todos los videos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo video', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo video', 'text_domain' ),
		'edit_item'             => __( 'Editar video', 'text_domain' ),
		'update_item'           => __( 'Actualizar video', 'text_domain' ),
		'view_item'             => __( 'Ver video', 'text_domain' ),
		'view_items'            => __( 'Ver videos', 'text_domain' ),
		'search_items'          => __( 'Buscar videos', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encontraron videos', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Asignar imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el video', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizado', 'text_domain' ),
		'items_list'            => __( 'Lista de videos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de videos a filtrar', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'videos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'videos', 'text_domain' ),
		'description'           => __( 'videos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'videos', $args );

}
add_action( 'init', 'videos', 0 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Home Destacados',
		'menu_title'	=> 'Home Destacados',
		'menu_slug' 	=> 'home-destacados',
		'icon_url'		=> 'dashicons-star-filled',
		'redirect'		=> false
	));
	/*acf_add_options_page(array(
		'page_title' 	=> 'Home Frases',
		'menu_title'	=> 'Home Frases',
		'menu_slug' 	=> 'home-frases',
		'icon_url'		=> 'dashicons-format-quote',
		'redirect'		=> false
	));*/
}

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
//Quitar logo Escritorio
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}



add_filter( 'gettext', 'wpse22764_gettext', 10, 2 );
function wpse22764_gettext( $translation, $original )
{
    if ( 'Excerpt' == $original ) {
        return 'Bajada';
    }else{
        $pos = strpos($original, 'Excerpts are optional hand-crafted summaries of your');
        if ($pos !== false) {
            return  '';
        }
    }
    return $translation;
}

function remove_headlinks_and_emojis() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'remove_headlinks_and_emojis' );

// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}

// Añadir columna al listado de post de wp-admin
function posts_column_views($defaults){
    $defaults['post_views'] = __('Vistas', 'your_textdomain');
    return $defaults;
}
add_filter('manage_posts_columns', 'posts_column_views');

function posts_custom_column_views($column_name, $id){
    if ($column_name === 'post_views'){
        echo get_post_views(get_the_ID());
    }
}
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);


if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; 
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;
require_once('wp_bootstrap_pagination.php');


function f_publicidad($postid){
$args = "";
$hoy = date( 'd-m-Y');
$args = array('p' => $postid,'post_type' => 'publicidad',);
$loop = new WP_Query($args);
if($loop->have_posts()) : $loop->the_post(); 
	if( have_rows('tipo_publicidad') ){ 
		while ( have_rows('tipo_publicidad') ) { the_row();  
			if( get_row_layout() == 'imagen_cf' && ((strtotime($hoy) >= strtotime(get_sub_field('fecha_inicio_pub'))  ) && ( $hoy <= strtotime(get_sub_field('fecha_fin_pub') )) )){ ?>
				<div class="ad728-wrapper mid-wrapper">
					<a href="<?php the_sub_field('link_pub');?>" target="_blank">
						<img class="img-responsive" src="<?php the_sub_field('imagen_pub');?>" alt=""/>
					</a>
				</div>
				<?php } elseif ( get_row_layout() == 'iframe_cf' && ((strtotime($hoy) >= strtotime(get_sub_field('fecha_inicio_pub_emb'))  ) && ( strtotime($hoy) <= strtotime(get_sub_field('fecha_fin_pub_emb') )) )){ ?>
								<div class="ad728-wrapper mid-wrapper">
								   <?php the_sub_field('codigo_embebed');?>
								</div>
				<?php } else { ?>
							<div class="ad728-wrapper mid-wrapper">
								<a href="#">
									<img src="http://placehold.it/728x90" alt=""/>
								</a>
							</div>
				<?php } ?>
			<?php } ?>
		<?php } else { ?>
					 <div class="col-md-12">
						<div class="ad728-wrapper mid-wrapper">
						   <a href="#">
						   <img src="http://placehold.it/728x90" alt=""/>
						   </a>
						</div>
					 </div>
			<?php } ?>
<?php 
endif; wp_reset_query();
return;
}

//load more category...

function misha_my_load_more_scripts() {
 

	global $wp_query; 
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );

}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args );
	if( have_posts() ) : ?>
		 <div class="row">
		 <?php while( have_posts() ): the_post(); ?>
				<div class="col-md-6">
					<article class="news-block">
						<a href="<?php the_permalink();?>" class="overlay-link">
							<figure class="image-overlay">
							   <?php if ( has_post_thumbnail() )  { the_post_thumbnail('destacado', array('class' => 'img-responsive'));} ?>
							</figure>
						</a>
						<div class="news-details">
							<h3 class="news-title">
							   <a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h3>
							<?php the_excerpt();?>
							<p class="simple-share">
							   por <b><?php the_author_posts_link(); ?> </b>
							</p>
						</div>
					 </article>
				</div>
		<?php endwhile;?>
		</div>
 <?php
	endif;
	die; 
}
  
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler');

//load more tag...

function misha_my_load_more_scripts_tag() {
	if(is_tag() ){
	global $wp_query; 
	wp_register_script( 'my_loadmore_tag', get_stylesheet_directory_uri() . '/js/myloadmore_tag.js', array('jquery') );
	wp_localize_script( 'my_loadmore_tag', 'misha_loadmore_params_tag', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore_tag' );
	}
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts_tag' );

function misha_loadmore_ajax_handler_tag(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args );
	if( have_posts() ) : ?>

		 <?php while( have_posts() ): the_post(); ?>
				<article class="simple-post simple-big clearfix">  
					<div class="simple-thumb">
						<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() )  { the_post_thumbnail('side', array('class' => 'img-responsive'));} ?></a>
					</div>
					<header>
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<p class="excerpt"><?php the_excerpt(); ?></p>
					</header>
				</article>
		<?php endwhile;?>

 <?php
	endif;
	die; 
}
  
add_action('wp_ajax_loadmore_tag', 'misha_loadmore_ajax_handler_tag');
add_action('wp_ajax_nopriv_loadmore_tag', 'misha_loadmore_ajax_handler_tag');

//load more search...

function misha_my_load_more_scripts_search() {
	if(is_search()) {
	global $wp_query; 
	wp_register_script( 'my_loadmore_search', get_stylesheet_directory_uri() . '/js/myloadmore_search.js', array('jquery') );
	wp_localize_script( 'my_loadmore_search', 'misha_loadmore_params_search', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore_search' );
	}
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts_search' );

function misha_loadmore_ajax_handler_search(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args );
	if( have_posts() ) : ?>

		 <?php while( have_posts() ): the_post(); ?>
				<article class="simple-post simple-big clearfix">  
					<div class="simple-thumb">
						<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() )  { the_post_thumbnail('relacionado', array('class' => 'img-responsive'));} 
						else {  ?>
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
		<?php endwhile;?>

 <?php
	endif;
	die; 
}
  
add_action('wp_ajax_loadmore_search', 'misha_loadmore_ajax_handler_search');
add_action('wp_ajax_nopriv_loadmore_search', 'misha_loadmore_ajax_handler_search');


//load more autor...

function misha_my_load_more_scripts_autor() {
	if(is_author()) {
	global $wp_query; 
	wp_register_script( 'my_loadmore_autor', get_stylesheet_directory_uri() . '/js/myloadmore_autor.js', array('jquery') );
	wp_localize_script( 'my_loadmore_autor', 'misha_loadmore_params_autor', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore_autor' );
	}
}
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts_autor' );

function misha_loadmore_ajax_handler_autor(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args );
	if( have_posts() ) : ?>

		 <?php while( have_posts() ): the_post(); ?>
			<article class="simple-post simple-big clearfix">  
							<div class="simple-thumb">
								<a href="<?php the_permalink() ?>">
									<?php if ( has_post_thumbnail() )  { the_post_thumbnail('relacionado', array('class' => 'img-responsive'));} ?>
								</a>
							</div>
							<header>
								<p class="simple-share">
									<a href="#"> <?php the_category('&');?></a> 
									<span><i class="fa fa-clock-o"></i> <?php the_time('d m Y'); ?></span>
								</p>
								<h3>
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</h3>
								<p class="excerpt"><?php the_excerpt(); ?></p>
							</header>
						</article>
		<?php endwhile;?>

 <?php
	endif;
	die; 
}
  
add_action('wp_ajax_loadmore_autor', 'misha_loadmore_ajax_handler_autor');
add_action('wp_ajax_nopriv_loadmore_autor', 'misha_loadmore_ajax_handler_autor');

//load more cronicas...

function misha_my_load_more_scripts_cronicas() {
	if(is_archive()) {
	global $wp_query; 
	wp_register_script( 'my_loadmore_cronicas', get_stylesheet_directory_uri() . '/js/myloadmore_cronicas.js', array('jquery') );
	wp_localize_script( 'my_loadmore_cronicas', 'misha_loadmore_params_cronicas', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore_cronicas' );
	}
}
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts_cronicas' );

function misha_loadmore_ajax_handler_cronicas(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
	query_posts( $args ); ?>

<div class="row">
		 <?php while( have_posts() ): the_post(); ?>
				<div class="col-md-6">
					<article class="news-block">
						<a href="<?php the_permalink();?>" class="overlay-link">
							<figure class="image-overlay">
							   <?php if ( has_post_thumbnail() )  { the_post_thumbnail('destacado', array('class' => 'img-responsive'));} ?>
							</figure>
						</a>
						<div class="news-details">
							<h3 class="news-title">
							   <a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h3>
							<?php the_excerpt();?>
							<p class="simple-share">
							   por <b><?php the_author_posts_link(); ?> </b>
							</p>
						</div>
					 </article>
				</div>
		<?php endwhile;?>
		</div>

 <?php

	die; 
}
  
add_action('wp_ajax_loadmore_cronicas', 'misha_loadmore_ajax_handler_cronicas');
add_action('wp_ajax_nopriv_loadmore_cronicas', 'misha_loadmore_ajax_handler_cronicas');

/*
add_action( 'pre_get_posts', function ( $q )
{
    if (    !is_admin() // Only targets front end
         && $q->is_main_query() // Targets only the main query
         //&& $q->is_category( 'agro' ) // Only targets your custom category page, change accordingly
    ) {
        $q->set( 'posts_per_page', 2 ); // Sets 2 posts per page on special category page
    }
});*/

function get_users_ordered_by_post_date($args = '') {
    // Prepare arguments
    if (is_string($args) && '' !== $args)
        parse_str($args, $args);
    $asc = (isset($args['order']) && 'ASC' === strtoupper($args['order']));
    unset($args['orderby']);
    unset($args['order']);

    // Get ALL users
    $users = get_users($args);
    $post_dates = array();
    if ($users) {
        // For EACH user ...
        foreach ($users as $user) {
            $ID = $user->ID;

            // ... get ALL posts (per default sorted by post_date), ...
            $posts = get_posts('author='.$ID);
            $post_dates[$ID] = '';

            // ... then use only the first (= newest) post
            if ($posts) $post_dates[$ID] = $posts[0]->post_date;
        }
    }

    // Sort dates (according to order), ...
    if (! $asc)
        arsort($post_dates);

    // ... then set up user array
    $users = array();
    foreach ($post_dates as $key => $value) {
        // $user = get_userdata($key);
        // $users[] = $user->ID;
        $users[] = get_userdata($key);
    }
    return $users;
}

?>