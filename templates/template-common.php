<?php
/**
 *
 * Template Name: common
 *
 * The template for displaying the homepage.
 *
 *
 * @package bootstrapwp
 */

get_header(); ?>
  <?php if(is_front_page()) { 
      get_template_part('carousel','page');
      echo 'User is on the homepage.';
    }
  ?>
 
  <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' );   
  ?>
  <?php endwhile; ?>

  <?php if(is_page('booking-availability')) { 
	    get_template_part('page','contact');
	    echo 'User is on the homepage.';
	  }
	?>
</div >
<?php get_footer(); ?>


