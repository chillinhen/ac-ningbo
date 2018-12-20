<?php get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<section class="content">
			<?php the_content(); ?>
			<?php  if ( ! post_password_required() ) :
	      get_template_part('partials/page-builder');
	    endif; ?>
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
