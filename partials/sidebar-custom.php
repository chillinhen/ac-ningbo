<?php if (have_rows('custom_sidebar')):
  // loop through the rows of data
  while ( have_rows('custom_sidebar') ) : the_row();
  get_template_part('partials/textblock','attributes');
    endwhile;
  endif;?>
