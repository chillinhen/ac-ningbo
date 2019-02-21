<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('row my-3 separator'); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="col-sm-2">
				<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); // Declare pixel size you need inside the array ?>
			</div>
		<?php endif; ?>
		<?php if ( has_post_thumbnail()) : ?>
				<div class="col-sm-10">
			<?php else :?>
				<div class="col-sm-12">
				<?php endif; ?>
				<!-- post title -->
				<h2 class="item-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					<!-- post details -->
					<small class="date text-muted float-right "><?php the_time('d.m.Y'); ?></small>
					<!-- /post details -->
				</h2>
				<!-- /post title -->
				<div class="item-text">
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

				</div>
				<?php #edit_post_link(); ?>
			</div>
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
