<?php /* Template Name: volle Seitenbreite (Gutenberg Template) */
get_header('ge'); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
				<div class="col-sm-12"><h1><?php the_title(); ?></h1></div>
		</div>

		<section class="content">
			<?php the_content(); ?>
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
<!-- section bootom -->
<?php get_sidebar("footer");?>
<!-- /section bootom -->
</main>
<?php get_footer('ge'); ?>
