<?php
  if (have_rows('page-builder')):
    while (have_rows('page-builder')) : the_row();
      if (get_row_layout() == 'mehrspaltiges_layout'):
        get_template_part('partials/page-builder','columns');
    endwhile;
  endif;
?>
