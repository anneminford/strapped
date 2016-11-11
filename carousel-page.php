<?php
/**
 * The template used for displaying page content in carousel-page.php
 */
?>

   <div class="row">
    <div class="box">
      <div class="col-sm-12 text-center">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

  <?php $bg_img = rwmb_meta('trevyrbarn_sliders_image', 'type=image'); ?>
  <?php if(count($bg_img) > '0'){
    $number = 0;
  foreach ($bg_img as $img) {
    echo '<li data-target="#carousel-example-generic" data-slide-to="'.$number.'"></li>';
    $number++;
  }
  }?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <?php $bg_img = rwmb_meta('trevyrbarn_sliders_image', 'type=image'); ?>
      <?php if(count($bg_img) > '0'){
        foreach ($bg_img as $img) {
          $slider_img = "{$img['full_url']}";
          echo '<div class="item">';
          echo '<img src="'. $slider_img .'">';
          echo '</div>';
        }
      }?>
  </div><!-- .carousel-inner -->
</div><!--/carousel -->
      </div>
    </div>
  </div>
