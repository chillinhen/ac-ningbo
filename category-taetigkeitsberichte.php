<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1 class="category-title">
				<?php echo get_category_parents( $cat, true, ' &raquo; ' );?>
			</h1>
			<div class="my-5">
				<?php get_template_part('loop','liste'); ?>
			</div>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
