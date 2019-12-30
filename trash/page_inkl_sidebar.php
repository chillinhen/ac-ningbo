<?php /* Template Name: Seite inkl. Sidebar */
get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
		<div class="row my-5">
			<div class="col-sm-8">
				<h1><?php the_title(); ?></h1>
				<section class="content">
					<?php the_content(); ?>
				</section>
			</div>
			<div class="sidebar col-sm-4">
				<?php if(get_field('welche_sidebar') == 'default'):?>
					<?php get_sidebar(); ?>
				<?php else :?>
					<?php
					if ( ! post_password_required() ) :
						get_template_part('partials/sidebar','custom');
						endif;
					?>
				<?php endif; ?>
			</div>
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


<!-- /section -->
<!-- section bootom -->
<?php get_sidebar("footer");?>
<!-- /section bootom -->
</main>
<?php get_footer(); ?>
