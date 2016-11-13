<?php
/**
 *
 * Template Name: common
 *
 * The template for displaying the homepage and other pages.
 *
 *
 * @package bootstrapwp
 */

get_header(); ?>

  <?php if(is_front_page()) { 
      get_template_part('carousel','page');
      get_template_part('opening','page');
    }
  ?>

  <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' );   
  ?>
  <?php endwhile; ?>

  <?php if(is_page('booking-availability')) { 
	    get_template_part('page','contact');
	    echo 'User is on the booking page.';
	  }
	?>
</div >

<?php get_footer(); ?>


