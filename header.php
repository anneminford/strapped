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
<?php if (rwmb_meta('trevyrbarn_strap_text') != '') {
$strapline = rwmb_meta('trevyrbarn_strap_text');
}?>
<header>
  <div class="brand">Trevyr Barn</div>
  <div class="address-bar"><?php echo $strapline; ?></div>
  
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

    <?php
            $args = array(
              'theme_location' => 'primary',
              'depth'      => 2,
              'container'  => false,
              'menu_class'     => 'nav navbar-nav',
              'walker'     => new Bootstrap_Walker_Nav_Menu()
              );
            if (has_nav_menu('primary')) {
              wp_nav_menu($args);
            }
            ?>

    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>
<div class="container test">

