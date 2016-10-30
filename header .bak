<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html>
<head>
<title>
<?php wp_title( '| Trevyr Barn', true, 'right' ); ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="PO3bWDpUEh4O6XXwnmfyfxrKRDf8JsRrNIcGdzv3POs" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<script type="text/javascript" src="//use.typekit.net/tty6xpj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('gtm-include'); ?>
<header>
  <div class="brand">Trevyr Barn</div>
  <div class="address-bar">Luxury holiday cottage in South Wales</div>
  
 
  
  <?php // REMOVED STANDARD WP NAV wp_nav_menu( array( 
//            'theme_location' => 'primary',
//            'container' => false,
//            'menu_class' => 'menu'
//      ) ); ?>
</header>
<nav class="tnavbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed --> 
      <a class="navbar-brand" href="/wordpress"><span class="glyphicon glyphicon-home"></span></a>
      <a class="navbar-brand" href="tel:07786 243355"><span class="glyphicon glyphicon-phone-alt"></span></a>
      <!--<span class="glyphicon glyphicon-phone-alt"></span>--></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="hidden-xs hidden-sm hidden-md"> <a href="http://localhost:81/wordpress-trevrybarn/"><span class = "glyphicon glyphicon-home"></span></a> </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Accommodation<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo get_page_link( get_page_by_title( 'downstairs' ) ); ?>">Downstairs</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title( 'upstairs' ) ); ?>">Upstairs</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title( 'outside' ) ); ?>">Outside</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="">Things to do<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo get_page_link( get_page_by_title( 'the great outdoors' ) ); ?>">The great outdoors</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title( 'History and Culture' ) ); ?>">History & culture</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title( 'seasonal' ) ); ?>">Seasonal</a></li>        
        </ul>
        <li class="dropdown"><a href="<?php echo get_page_link( get_page_by_title( 'Food, Drink and Dining' ) ); ?>">Food, Drink & Dining</a> </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Booking & Contact<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo get_page_link( get_page_by_title( 'Booking and availability' ) ); ?>">Booking</a></li>
          <li><a href="<?php echo get_page_link( get_page_by_title( 'The practicalities' ) ); ?>">Practicalities</a></li>
          <li><a href="<?php echo get_page_link( get_page_by_title( 'Access' ) ); ?>">Access</a></li>
        </ul>
        <li class="dropdown"><a href="<?php echo get_page_link( get_page_by_title( 'Environment' ) ); ?>">Environment</a> </li>
        <!--<li class="dropdown"> <a href="gallery.html">Gallery</a> </li>-->
         <li class="dropdown"><a href="<?php echo get_page_link( get_page_by_title( 'Gallery' ) ); ?>">Gallery</a> </li>
         <li><a href="<?php echo get_page_link( get_page_by_title( 'Booking and availability' ) ); ?>"><span class="glyphicon glyphicon-phone-alt hidden-xs hidden-sm hidden-md"></span><span class="visible-xs">Contact</span></a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>

