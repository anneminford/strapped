<?php
/**
 * The template used for displaying page content in footer-page.php
 */
?>

  <div class="row">
    <div class="box">
      <div class="col-sm-12">
        <h2 class="brand-before text-center"> <small>Welcome to</small> </h2>
        <h1 class="brand-name text-center"><?php the_field('brand_name'); ?></h1>
        <hr class="tagline-divider"> 
        <?php if( have_rows('home_page_aside_bullets') ): ?>
          <ul class="pull-right highlights">
          <?php while( have_rows('home_page_aside_bullets') ): the_row(); 
            $bullet = get_sub_field('aside_bullet');
           ?>
            <li><?php echo $bullet; ?></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <hr class="visible-xs">
        <?php if( have_rows('home_page_copy_paragraphs') ): ?>
        <?php while( have_rows('home_page_copy_paragraphs') ): the_row(); 
          $paragraph = get_sub_field('home_page_copy_paragraph');
         ?>
          <p><?php echo $paragraph; ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div><!--/container-->