<?php get_header(); ?>

		<!-- section -->
		<div class="row my-5">
			<div class="col-md-8">
			<!-- article -->
			<article id="post-404" style="text-align:center;">

				<h1><?php _e( 'Page not found', 'ac-ningbo' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'ac-ningbo' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</div>
		<?php get_sidebar();?>
		<!-- /section -->
	</div>
<?php get_footer(); ?>
