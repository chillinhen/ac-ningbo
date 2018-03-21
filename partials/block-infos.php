<?php 
    // override $post
    $post = $infos;
    setup_postdata($post);?>


    ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('widget-acf contact-data'); ?>>
         <h3><?php the_title(); ?></h3>
             <?php the_content(); ?>
    <?php edit_post_link(); ?>
    </div>
    <?php
    wp_reset_postdata();?>