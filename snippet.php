<?php
/**
 * Block Name: Downloads
 *
 * This is the template that displays the downloads block.
 */
?>

<?php

// check if the repeater field has rows of data
if( have_rows('list-item') ):?>
<ul class='download-list'>
 	<?php while ( have_rows('list-item') ) : the_row(); ?>
        <li>
            <?php 
                $link = get_sub_field('link');
                if($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : 'self';
                endif;
            ?>
                <a class="button" href="" target="">
                Item Link
                </a>
            
        <li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

