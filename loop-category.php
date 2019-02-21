<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>

		<!-- post thumbnail -->

			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); // Declare pixel size you need inside the array ?>
				<?php endif; ?>
				<div class="card-body">
					<!-- post title -->
					<h2 class="card-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->
					<div class="card-text">
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
						<!-- post details -->
						<strong class="date"><?php the_time('F j, Y'); ?></strong>
						<!-- /post details -->
					</div>
					<?php #edit_post_link(); ?>
				</div>
			</a>
		<!-- /post thumbnail -->
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
