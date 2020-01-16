<?php get_header(); ?>

	<div class="row my-5">
			<div class="col-md-8">
				<!-- section -->
				<section class="content">
				<h1><?php _e( 'Archives', 'ac-ningbo' ); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop-archive'); ?>
					<?php endwhile; ?>
					<?php else: ?>
					<?php get_template_part('loop-404'); ?>

				<?php endif; ?>
				</section>
		<!-- /section -->
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-12">
				<?php get_template_part('pagination'); ?>
			</div>

		<?php edit_post_link(); ?>
		
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
