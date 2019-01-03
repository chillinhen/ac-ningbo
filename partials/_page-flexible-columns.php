<?php if (have_rows('custom_sidebar')):
  // loop through the rows of data
  while ( have_rows('custom_sidebar') ) : the_row();

    endwhile;
  endif;?>
