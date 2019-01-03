<?php get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="col-sm-12"><h1><?php the_title(); ?></h1></div>
		<section class="content">
			<div class="col-sm-8">
			<?php the_content(); ?>
		</div>
			<?php get_sidebar(); ?>
		</section>
		<?php edit_post_link(); ?>

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


<!-- /section -->
</main>
<?php get_footer(); ?>
