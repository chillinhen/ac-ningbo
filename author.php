<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'ac-ningbo' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'ac-ningbo' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('row my-5'); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" class="col-md-2" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120), ['class' => 'img-fluid']); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<div class="col-md-10">
				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /Post title -->

				<!-- post details -->
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'ac-ningbo' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'ac-ningbo' ), __( '1 Comment', 'ac-ningbo' ), __( '% Comments', 'ac-ningbo' )); ?></span>
				<!-- /post details -->

				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>
				<div class="w-100 mt-3 flex-wrap post-details d-flex flex-row-reverse justify-content-between">
			<small class="date text-muted text-small"><?php the_time('d. F Y'); ?></small>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<?php edit_post_link(); ?>
		</div>
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

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
