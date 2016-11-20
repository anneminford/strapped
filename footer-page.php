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
<div class="socialIcons"><a href="http://www.facebook.com/share.php?u=http://www.trevyrbarn.co.uk&title=Trevyr Barn, Luxury Holiday Cottage"><i class="fa fa-facebook" aria-hidden="true"></i></a></i> <a href="http://twitter.com/home?status=Trevyr Barn, Luxury Holiday Cottage+http://www.trevyrbarn.co.uk"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  

</footer>