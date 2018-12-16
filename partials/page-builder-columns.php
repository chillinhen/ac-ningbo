<?php
  $proportion = get_sub_field('proportion');
  if (have_rows('columns')):?>
  <div class="container">
    <div class="row cols-<?php echo $proportion; ?>">
        <?php
        while (have_rows('columns')) : the_row(); ?>
                <div class="entry-content acf-field">
                    <?php if (get_sub_field('border')):?>
                      <div class="child-item">
                    <?php endif; ?>
                        <?php if (get_sub_field('has_list')):?>
                        <div class="intro">
                          <?php the_sub_field('block'); ?>
                        </div>
                        <div class="list">
                          <?php the_sub_field('liste'); ?>
                        </div>
                      <?php else : ?>
                          <?php the_sub_field('block'); ?>
                      <?php endif; ?>
                    <?php if (get_sub_field('border')):?>
                      </div>
                    <?php endif; ?>
                </div>
            <?php
        endwhile;
        ?>
    </div>
  </div>
<?php else :
    echo "<h3>no Boxes</h3>";
endif;
?>
