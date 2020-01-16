<!-- only for archive articles -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->

		

		<div class="body row">
			<div class="col-sm-12">
				<!-- post title -->
				<small class="category text-small">
					<?php the_category(' | '); // Separated by commas ?>
				</small>
				<h2 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
			</div>
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a class="img-cnt col-sm-4 col-md-12 col-lg-4" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('favorite-small', ['class' => 'img-fluid']);?>
				</a>
			<?php endif; ?>
			<div class="text <?php echo has_post_thumbnail() ? 'col-sm-8 col-md-12 col-lg-8' : 'col-sm-12';?>">
				<?php html5wp_excerpt(5); // Build your custom callback length in functions.php ?>
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
