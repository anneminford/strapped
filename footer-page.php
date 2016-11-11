<?php
/**
 * The template used for displaying page content in footer-page.php
 */
?>

   <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-left">


<ul class="list-inline accreditations test">
<li>
 <?php $footer_img = rwmb_meta('trevyrbarn_footer_image', 'type=image'); ?>
      <?php if(count($footer_img) > '0'){
        foreach ($footer_img as $logo) {
          $footer_img = "{$logo['full_url']}";

          echo '<img src="'. $footer_img .'">';

        }
      }?>
      </li></ul>
<!--/list-inline accreditations -->


      <!--   <ul class="list-inline accreditations">
                    <li> <a href="#" class="btn-social btn-outline">
                    
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fiveStar_80.png" alt="Visit Wales 5 Star rating logo" data-pin-nopin="true">
                                       
                    </a> </li>
          <li> <a href="#" class="btn-social btn-outline"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cyclistsSmall_80.png" alt="Cyclists Welcome logo" data-pin-nopin="true"></a> </li>
          <li> <a href="#" class="btn-social btn-outline"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/walkersSmall_80.png" alt="Walkers Welcome logo" data-pin-nopin="true"></a> </li>
          <li> <a href="http://www.special-escapes.co.uk/search/display.php?FileID=bsc6817"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sawday.jpg" alt="We are in Alastair Sawday's Special Escapes" border="0" data-pin-nopin="true"></a> </li>
          <li> <a href="http://www.greentraveller.co.uk/accommodation/trevyr-barn-wales"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/greentraveller.png" alt="Green Traveller accreditation" data-pin-nopin="true"></a> </li>
        </ul> -->
      </div>
      <div class="col-lg-4 text-right">
        <ul class="list-inline accreditations">
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-twitter"></span></a></li>
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-facebook"></span></a></li>
          <li> <a href="http://twitter.com/qimzu" class="pure-button socicon-button"><span class="socicon socicon-mail"></span> </a></li>
        </ul>
      </div>
    </div>
  </div>
  <p>© <?php echo date('Y'); ?> trevyrbarn.co.uk</p>

</footer>