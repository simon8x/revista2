<?php include('header.php');?>
<div class="container main-wrapper">
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$args = array('class' => 'img-responsive img-circle avatar');
//$user_id = 2;
?>
	<div class="mag-content clearfix">
		<div class="main-content mag-content clearfix" data-stickyparent>
			<div class="row blog-content">
				<div class="col-md-4" data-stickycolumn>
					<aside class="sidebar">
						<div class="widget author-widget">
							<div class="author-thumb">
								<a href="page_author.html">
									<?php //echo get_avatar( $user_id, 128, null, null, $args  ); ?>
									  <?php echo get_avatar( get_the_author_meta('user_email'), $size = '128'); ?>
								</a>
							</div>
							<div class="author-meta">
								<h3 class="author-title">
									<a href="page_author.html"><?php echo $curauth->nickname; ?></a>
								</h3>
								<p class="author-position">Chief editor</p>
								<p class="author-bio"><?php echo $curauth->user_description; ?></p>
								<div class="author-page-contact">
								<?php 
									$twitter = get_the_author_meta( 'twitter', $post->post_author );
									$facebook = get_the_author_meta( 'facebook', $post->post_author );
									echo '<a href="https://twitter.com/' . $twitter .'" rel="nofollow" target="_blank">Twitter</a> | <a href="'. $facebook .'" rel="nofollow" target="_blank">Facebook</a>';
									?> 
									<a href="#">
										<i class="fa fa-envelope-o"></i>
									</a> 
									<a href="#" target="_blank">
										<i class="fa fa-link"></i>
									</a>  
									<a href="#" target="_blank">
										<i class="fa fa-twitter"></i>
									</a> 
									<a href="#" >
										<i class="fa fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
					</aside>
				</div> 
			<div class="col-md-8">
				<h3 class="block-title"><span><?php echo $curauth->nickname; ?></span></h3>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article class="simple-post simple-big clearfix">  
				<div class="simple-thumb">
					<a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() )  { the_post_thumbnail('relacionado', array('class' => 'img-responsive'));} ?>
					</a>
				</div>
				<header>
					<p class="simple-share">
						<a href="#"> <?php the_category('&');?></a> / 
						por <a href="#"><?php echo $curauth->nickname; ?></a> - 
						<span><i class="fa fa-clock-o"></i><?php the_time('d m Y'); ?></span>
					</p>
					<h3>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h3>
					<p class="excerpt"><?php the_excerpt(); ?></p>
				</header>
            </article>
			<?php endwhile; else: ?>
				 <p><?php _e('No hay publicaciones de este Autor.'); ?></p>
			<?php endif; ?>
			<div class="load-more">
				<button type="button" class="btn btn-lg btn-block">Mostrar más</button>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
<?php include('footer.php');?>