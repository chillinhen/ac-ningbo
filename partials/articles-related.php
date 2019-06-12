<?php

$posts = get_field('favorite-posts');

if( $posts ): ?>
<div class="card-deck pb-5">
  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
    <div class="card related-post p-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail('favorite-small', array('class' => 'card-img-top'));?>
        </a>
      <?php else :?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php echo '<img class="card-img-top" src="'.get_template_directory_uri().'/library/img/default/default-bg.png" />';?>
        </a>
      <?php endif; ?>
      <div class="card-body">
        <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="card-details d-flex">
          <!-- post details -->
          <small class="category text-muted text-small">
            <?php the_category(' | '); // Separated by commas ?>
          </small>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
