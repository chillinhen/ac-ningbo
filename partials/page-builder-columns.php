<?php
  $proportion = get_sub_field('proportion');
  if (have_rows('columns')):?>
    <div class="row cols-<?php echo $proportion; ?>">
        <?php
        while (have_rows('columns')) : the_row(); ?>
                <div class="entry-content acf-field">
                  <?php if (get_sub_field('block')):?>
                    <?php if (get_sub_field('attribute')):?>
                      <div class="block <?php the_sub_field('attribute');?>">
                    <?php endif; ?>
                      <?php the_sub_field('block'); ?>
                    <?php if (get_sub_field('attribute')):?>
                      </div>
                    <?php endif;
                  endif;?>
                </div>
            <?php
        endwhile;
        ?>
    </div>
<?php else :
    echo "<!--no Boxes-->";
endif;
?>
