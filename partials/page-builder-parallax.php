<?php
$image = get_sub_field('hintergrundbild');
$bgColor = get_sub_field('hintergrundfarbe');
  if( $image ) : ?>
  <div class="parallax full-width <?php the_field('band'); ?>" style="background-image:url(<?php the_sub_field('hintergrundbild') ?>);">
  <?php else : ?>
  <div class="full-width" style="background-image:url(<?php the_sub_field('hintergrundbild') ?>);">
  <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12"><?php the_sub_field('text');?></div>
      </div>
    </div>
  </div>
