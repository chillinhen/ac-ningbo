<?php /* Template Name: Kontakt */
get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="row my-5">
		<div class="col-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
				<h1><?php the_title(); ?></h1>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<?php edit_post_link(); ?>
			</article>
		</div>
	</div>
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
<?php #get_sidebar("footer");?>
<!-- /section bootom -->
</main>
<?php get_footer(); ?>
