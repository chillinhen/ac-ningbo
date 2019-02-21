<?php
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image-cover');
$post_image = $thumb['0'];
?>
<div class="header-image bg-image">
    <figure>
    <?php the_post_thumbnail('banner',array('class' => 'img-fluid')); ?>
    <figcaption><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></figcaption>
  </figure>
</div>
