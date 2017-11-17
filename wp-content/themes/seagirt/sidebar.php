<!-- sidebar -->
<!-- Tie this page in with single or index using php get_sidebar(); -->
<!-- Style this page accordingly -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('partials/searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-test')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('dynamic_sidebar-test')) ?>
	</div>

</aside>
<!-- /sidebar -->
