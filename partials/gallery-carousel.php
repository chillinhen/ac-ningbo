<?php

$images = get_field('slider-images','option');
$size = 'banner'; // (thumbnail, medium, large, full or custom size)


if( $images ): ?>
<div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="8000" data-pause="hover" data-wrap="true" data-touch="true">
  <ol class="carousel-indicators">
    <?php  $i= 0; ?>
    <?php foreach( $images as $image ):?>
      <li data-target="#bannerCarousel" data-slide-to="<?php echo $i;?>"></li>
      <?php $i++;
       endforeach; ?>
  </ol>
  <div class="carousel-inner" style="background:black;">
        <?php foreach( $images as $image ): ?>
            <div class="carousel-item">
              <figure class="d-block w-100">
              	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                <?php if($image['caption']):?>
                  <figcaption class="d-flex justify-content-end">
                    <i class="fas fa-info-circle mt-1 mr-3 align-items-baseline"></i>
                    <span><?php echo $image['caption']; ?></span>
                  </figcaption>
                  <?php endif;?>
              </figure>
            </div>
        <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<?php endif; ?>
