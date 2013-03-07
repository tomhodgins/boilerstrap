<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Boilerstrap
 * @subpackage boilerstrap
 * @since Boilerstrap 0.1
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-more-ie7.min.css">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
  
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
    <meta property="og:image" content="" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-57-precomposed.png">
    
    <!-- BoilerStrap CSS Goes Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-corp.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-social.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ext.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/typography.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/palette.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" type="text/css" media="all" />
    <?php if ( is_admin_bar_showing() ) {?>
    	<style>
    		#site-navigation { top: 28px !important; }
    	</style>
    <?php }?>

    <!-- BoilerStrap JavaScript Goes Here -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/keypress-1.0.1.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/boilerstrap.js" type="text/javascript"></script>
    
  </head>

<body <?php body_class(); ?>>

  <div id="site-navigation" class="navbar navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <i class="icon-chevron-down"></i>
        </button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerstrap' ); ?>"><?php _e( 'Skip to content', 'boilerstrap' ); ?></a>
        <div class="nav-collapse collapse">
  	  	<?php 
  	  	    wp_nav_menu( array(
  	  	        'menu'       => 'top_menu',
  	  	        'depth'      => 3,
  	  	        'container'  => false,
  	  	        'menu_class' => 'nav',
  	  	        //Process nav menu using our custom nav walker
  	  	        'walker' => new twitter_bootstrap_nav_walker())
  	  	    );
  	  	?>
  			<form method="get" id="searchform" class="navbar-search pull-right" action="<?php bloginfo('home'); ?>/">
  			<div>
  				<form class="form-search">
  					<input type="text" name="s" id="s" class="search-query" placeholder="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" x-webkit-speech tabindex="1">
  				</form>
  			</div>
  			</form>
  
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
  <div id="page" class="hfeed site container">
  	<header id="masthead" class="site-header" role="banner">
  		
  		<?php $header_image = get_header_image();
  		if ( ! empty( $header_image ) ) : ?>
  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
  		<?php endif; ?>
  	</header><!-- #masthead -->
  
  	<div id="main" class="wrapper">
  <div class="row-fluid">