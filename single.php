<?php get_header();

?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
			<?php the_content(); // Dynamic Content ?>
			<!-- post details -->
			<footer class="article-footer">
				<strong class="date"><?php the_time('d.m.Y'); ?></strong>
				<hr>
				<div class="d-flex post-details text-muted">
						<span class="tags">
							<?php the_tags( _e( 'Tags: ', 'ac-ningbo' ), ', ', ' | ');
							// Separated by commas with a line break at the end ?>
						</span>
						<span class="categories">
							<?php _e( 'Categorised in: ', 'ac-ningbo' ); the_category(', '); // Separated by commas ?>
						</span>
				</div>
			</footer>
			<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ac-ningbo' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'ac-ningbo' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
