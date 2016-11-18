<?php
/**
 * The template used for displaying page content in footer-page.php
 */
?>

   <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-left">


  <ul class="list-inline accreditations">
  <p><?php the_field('image', 'option'); ?></p>
  <?php while( have_rows('footer_logos', 'option') ): the_row(); 
    // vars
    $footerlogo = get_sub_field('image_logo', 'option');
    $logolink = get_sub_field('link_logo', 'option');
    ?>
    <li>
      <?php if( $logolink ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>
        <img src="<?php echo $footerlogo['url']; ?>" alt="<?php echo $footerlogo['alt'] ?>" />
      <?php if( $logolink ): ?>
        </a>
      <?php endif; ?>  
    </li>
  <?php endwhile; ?>
    <li>© <?php echo date('Y'); ?> trevyrbarn.co.uk</li>
  </ul>



</div>
      <div class="col-lg-4 text-right">
       <!--  <ul class="list-inline accreditations">
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-twitter"></span></a></li>
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-facebook"></span></a></li>
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-mail"></span> </a></li>
        </ul> -->
      </div>
    </div>
  </div>
  

</footer>