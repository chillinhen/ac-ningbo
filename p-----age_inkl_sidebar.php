<?php if(get_field('welche_sidebar') == 'standard'):?>
	<?php get_sidebar(); ?>
<?php else :?>
	<?php
	if ( ! post_password_required() ) :
		get_template_part('partials/sidebar','custom');
		endif;
	?>
<?php endif; ?>
