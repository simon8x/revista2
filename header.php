<!doctype html>
<html>
<head>
<?php 
   $url = get_bloginfo('url'); 
   $path = get_bloginfo('template_directory');
  ?>
  <meta charset="utf-8">
  <title>Crónicas del agua</title>
  <?php wp_head(); ?>
  <meta name="keywords" content="Terciar.ar">
  <meta name="description" content="Crónicas del agua">
  <meta name="author" content="Crónicas del agua">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Favicon -->
  <!--link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192"-->

  <!-- Google Fonts -->
  <!--link href="http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,400italic,500,700,700italic,900" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet" type="text/css"-->
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<!-- inicio agregado adsence -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7874163318003185",
    enable_page_level_ads: true
  });
</script>
	<!-- fin agregado adsence -->
	
	
</head>
<body class="fixed-header">
<div id="main" class="header-big">
  <header class="header-wrapper clearfix">
	<div class="header-mid">
      <div class="container">
        <div class="mag-content">
          <div class="row">
            <div class="col-md-12">
              <div class="header-mid-wrapper text-center clearfix">
                <div class="mid-logo-wrapper">
                  <a class="logo-nuevo" href="<?php echo $url;?>" title="Crónicas de agua" rel="home">
                    <img src="https://cronicasdeagua.com/wp-content/uploads/2019/04/logo-cronicas-menu.jpg">
                  </a><!-- .logo -->
                  <!--<p class="logo-description">Fully Responsive Magazine Template</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .header-mid -->
	
	<div class="header text-center" id="header">
      <div class="container">
        <div class="mag-content">
          <div class="row">
            <div class="col-md-12">
                          <!-- Mobile Menu Button -->
            <a class="navbar-toggle collapsed" id="nav-button" href="#mobile-nav">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a><!-- .navbar-toggle -->

            <!-- Main Nav Wrapper -->
            <nav class="navbar mega-menu">
              <a class="logo logo-nuevo-en-menu" href="<?php echo $url;?>" title="Crónicas de agua" rel="home">
                <img src="https://cronicasdeagua.com/wp-content/uploads/2019/04/logo-cronicas-menu.jpg">  
              </a><!-- .logo -->
              
              <!-- Navigation Menu -->
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
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
                  
                </ul><!-- .nav .navbar-nav -->
              </div><!-- .navbar-collapse -->              <!-- End Navigation Menu -->

              <div class="header-right">
                <div class="social-icons">
                  <a href="https://www.facebook.com/cronicasdeagua/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a>
                  <a href="https://twitter.com/cronicasdeagua " target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter fa-lg"></i></a>
                  <a href="https://www.instagram.com/cronicasdeaguaok/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram fa-lg"></i></a>
                  <!-- Only for Fixed Sidebar Layout -->
                  <a href="#" class="fixed-button navbar-toggle" id="fixed-button">
                    <i></i>
                    <i></i>
                    <i></i>
                    <i></i>
                  </a><!-- .fixed-button -->
                </div><!-- .social-icons -->
              </div><!-- .header-right -->

            </nav><!-- .navbar -->

            <div id="sb-search" class="sb-search">
              <form role="form" method="get" id="searchform" action="<?php  echo esc_url( home_url( '/' ) ); ?>">
                <input class="sb-search-input" placeholder="Texto para buscar..." type="text" value="" name="s" id="s">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search fa fa-search" data-toggle="tooltip" data-placement="bottom" title="Search"></span>
              </form>
			  
			  
			  
            </div><!-- .sb-search -->            </div>
          </div>
        </div>
      </div>
    </div><!-- .header -->
	
	
    
  </header><!-- .header-wrapper -->