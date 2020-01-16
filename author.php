<?php get_header(); ?>
	<div class="row mt-5">
		<div class="col-md-8">
			<!-- section -->
			<section>
			<?php if (have_posts()): the_post(); ?>
				<h1><?php _e( 'Author Archives for ', 'ac-ningbo' ); echo get_the_author(); ?></h1>
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>
				<?php get_template_part('loop-archive'); ?>
				<?php endwhile; ?>

				<?php else: ?>
					<?php get_template_part('loop-404'); ?>
				
			<?php endif; ?>
			<?php get_template_part('pagination'); ?>
			</section>
			<!-- /section -->
		</div>
		<aside class="col-md-4 sidebar author-infos">
			<?php if ( get_the_author_meta('description')) : ?>
				<?php echo get_avatar(get_the_author_meta('user_email')); ?>

				<h3><?php _e( 'About ', 'ac-ningbo' ); echo get_the_author() ; ?></h3>

				<?php echo wpautop( get_the_author_meta('description') ); ?>

			<?php endif; ?>
		</aside>
	</div>


<?php get_footer(); ?>
