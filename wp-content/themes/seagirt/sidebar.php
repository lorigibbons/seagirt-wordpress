<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('partials/searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-sidebar')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer')) ?>
	</div>

</aside>
<!-- /sidebar -->
