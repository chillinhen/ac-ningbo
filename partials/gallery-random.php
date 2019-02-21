<?php

$images = get_field('random-header');
$size = 'banner'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul>
      <?php  $i= 0; ?>
        <?php foreach( $images as $image ):
          $i++;
          ?>
            <li id="img_<?php echo $i;?>" style="display:none;">
              <figure>
                <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                <?php if($image['caption']):?>
                <figcaption><?php echo $image['caption']; ?></figcaption>
              <?php endif;?>
              </figure>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
