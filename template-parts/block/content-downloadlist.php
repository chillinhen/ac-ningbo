<?php
/**
 * Block Name: Downloads
 *
 * This is the template that displays the downloads block.
 */
?>

<?php

// check if the repeater field has rows of data
if( have_rows('download-link') ): ?>
    <ul class="download-list list-group">
 	<?php // loop through the rows of data
        while ( have_rows('download-link') ) : the_row(); ?>
        <li class="list-group-item list-group-item-action">
            <?php   $icon = get_sub_field('icon');
                    if($icon) : ?>
                    <i class="fas fa-file-<?php echo $icon;?> fa-xl mr-3"></i>
            <?php endif;?>
            <?php   $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';      
                    ?>
                    <a  href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
            <?php   $size = get_sub_field('size');
                    if($size) : ?>
                        <span class="ml-3 badge badge-secondary"><?php echo $size;?></span>
            <?php endif;?>
        </li>
    <?php endwhile;?>
</ul>
<?php endif; ?>
<style type="text/css">
	i.fas {
		color: <?php the_field('link-type-icon_color'); ?>;
	}
</style>

