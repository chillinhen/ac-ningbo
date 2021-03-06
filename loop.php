<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="img-cnt" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('favorite-small', ['class' => 'img-fluid']);?>
			</a>
		<?php endif; ?>

		<div class="body">
			<!-- post title -->
			<small class="category text-small">
				<?php the_category(' | '); // Separated by commas ?>
			</small>
			<h2 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			<div class="text">
				<?php html5wp_excerpt(10); // Build your custom callback length in functions.php ?>
				<?php #html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>
		</div>
		<!-- post details -->
		<div class="w-100 mt-3 flex-wrap post-details d-flex flex-row-reverse justify-content-between">
			<small class="date text-muted text-small"><i class="far fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?></small>
			<small class="author">
				<i class="fas fa-user-edit" data-tooltip="<?php _e( 'Published by', 'ac-ningbo' ); ?>"></i> <?php the_author_posts_link(); ?>
				<?php edit_post_link(); ?>
				</small>
			

		</div>
		<!-- /post details -->
		<!-- /article -->
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'ac-ningbo' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
