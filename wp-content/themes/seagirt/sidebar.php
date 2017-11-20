<!-- sidebar -->
<!-- Tie this page in with single or index using php get_sidebar();
Control in Widgets area-->
<!-- Style this page accordingly -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-test')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('dynamic_sidebar-test')) ?>
	</div>

</aside>
<!-- /sidebar -->
