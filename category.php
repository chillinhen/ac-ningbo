<?php get_header(); ?>
		<!-- section -->
		<div class="articles row mt-5">
			<div class="col-12">
			<section>
				<h1 class="category-title">
					<?php echo get_category_parents( $cat, true, ' &raquo; ' );?>
				</h1>
				<div class="article-list">
					<?php get_template_part('loop'); ?>
				</div>
				<?php get_template_part('pagination'); ?>
			</section>
		</div>
		</div>
		<!-- /section -->

<?php get_footer(); ?>
