<?php
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image-cover');
$post_image = $thumb['0'];
$post_caption = get_post(get_post_thumbnail_id())->post_excerpt;
?>
<div class="header-image bg-image">
    <figure>
    <?php the_post_thumbnail('banner',array('class' => 'img-fluid')); ?>
    <?php
      if($post_caption) : ?>
      <figcaption class="d-flex justify-content-end align-items-baseline">
        <i class="fas fa-info-circle mt-1 mr-3"></i>
        <span><?php echo $post_caption;?></span>
      </figcaption>
    <?php endif;?>
</div>
