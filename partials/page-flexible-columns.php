<?php
  if (have_rows('ind-columns')):
    while (have_rows('ind-columns')) : the_row();
      if (get_row_layout() == 'mehrspaltiges_layout'):
        get_template_part('partials/page-builder','columns');
      endif;
    endwhile;
  endif;
?>
