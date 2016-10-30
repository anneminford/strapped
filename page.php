<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div class="container">

   <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>
   
   <?php endwhile; ?>

</div>

<?php get_footer(); ?>