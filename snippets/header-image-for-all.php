<?php
if (is_singular() && has_post_thumbnail()) :
    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image-cover');
    $post_image = $thumb['0'];
    ?>

    <div class="header-image bg-image">

        <?php the_post_thumbnail('post-image'); ?>
        <?php dynamic_sidebar('language'); ?>
    </div>

    <?php
else :

    $header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/library/img/headers/ac-ningbo-header.jpg';
    ?>

    <div class="header-image bg-image">

        <img src="<?php echo $header_image; ?>" />
        <?php dynamic_sidebar('language'); ?>
    </div>

<?php endif; ?>