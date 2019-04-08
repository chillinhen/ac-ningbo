<?php /* Template Name: Taetigkeitsfelder */
get_header(); ?>

<?php

   $args = array('cat' => 18);
   $category_posts = new WP_Query($args);

   if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
         $category_posts->the_post();
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php #the_content() ?>----</div>

<?php
      endwhile;
   else:
?>

      Oops, there are no posts.

<?php
   endif;
?>
<?php get_footer(); ?>
