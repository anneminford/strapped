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


<div class="container">
   <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' );
       
   ?>
   
   <?php endwhile; ?>
   <?php if(is_page('booking-availability')) { 
	    get_template_part('page','contact');
	    echo 'User is on the homepage.';
	  }
	?>


<script>
    jQuery('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</div>
<?php get_footer(); ?>
