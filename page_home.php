<?php /* Template Name: Homepage */
get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="row my-5">

		<div class="col-lg-8 order-2 order-lg-1">
			<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
				<h1><?php the_title(); ?></h1>
				<section class="content">
					<?php the_content(); ?>
				</section>
			</article>
		</div>
		<div class="sidebar col-lg-4 align-self-end order-1 order-lg-2">
			<?php get_template_part('partials/news','carousel'); ?>
		</div>
		<?php edit_post_link(); ?>
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
<?php get_template_part('partials/articles','related'); ?>

<!-- /section -->
<!-- section bootom -->
<?php get_sidebar("footer");?>
<!-- /section bootom -->
</main>
<?php get_footer(); ?>
