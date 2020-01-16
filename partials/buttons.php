<?php

// check if the repeater field has rows of data
if( have_rows('buttons') ): ?>
    <div class="row my-5 justify-content-center">
            <?php // loop through the rows of data
            while ( have_rows('buttons') ) : the_row();?>
            <?php 
            $link = get_sub_field('button-link');
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            if( $link ): ?>
                <!-- // display a sub field value -->
                <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-default mx-1" title="<?php echo esc_html( $link_title ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="background-color:<?php the_sub_field('button-bg');?>;color:<?php the_sub_field('button-color');?>;">
                    <?php echo esc_html( $link_title ); ?>
                </a>

            <?php endif; endwhile;?>
    </div>
<?php else :

    // no rows found

endif;

?>
