<!-- sidebar -->
<aside class="sidebar col-sm-4" role="complementary">
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
        <?php #get_template_part('partials/acf','fields'); ?>

</aside>
<!-- /sidebar -->
