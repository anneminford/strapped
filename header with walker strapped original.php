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
  


<nav role="navigation">
    <div class="navbar navbar-static-top navbar-default">
      <div class="container">
        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
        </div>

        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <?php

          $args = array(
            'theme_location' => 'primary',
            'depth'      => 2,
            'container'  => false,
            'menu_class'     => 'nav navbar-nav navbar-right',
            'walker'     => new Bootstrap_Walker_Nav_Menu()
            );

          if (has_nav_menu('primary')) {
            wp_nav_menu($args);
          }

          ?>

        </div>
      </div>
    </div>           
  </nav>

  </header><!-- #masthead -->

  <div id="content" class="site-cont
<div class="container test">

