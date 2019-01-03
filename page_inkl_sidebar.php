<?php /* Template Name: Seite inkl. Sidebar */
get_header(); ?>

<!-- section -->

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<!-- config sidebar position -->
	<?php if( get_field('position_sidebar') == 'left' ):
		$firstCol = ' order-1';
		$scndCol = ' order-2';
		?>
	<?php	endif;?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('row entry-content'); ?>>
		<div class="col-sm-8<?php echo $scndCol;?>">
		<h1><?php the_title(); ?></h1>
		<section class="content">
			<?php the_content(); ?>
		</section>
	</div>
	<div class="col-sm-4<?php echo $firstCol;?>">
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
