<?php
$proportion = get_sub_field('proportion');
if (have_rows('columns')):?>
  <div class="row pb-5 cols-<?php echo $proportion; ?>">
    <?php
      while (have_rows('columns')) : the_row(); ?>
        <div class="entry-content acf-field">
          <?php get_template_part('partials/textblock','attributes');?>
        </div>
      <?php endwhile; ?>
  </div>
<?php endif;?>
