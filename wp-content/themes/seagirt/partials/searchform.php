<!-- Displays the search box. Style me as you wish! -->


<!-- To get SEARCH to work, include this code in the area where you want to put it:
?php get_template_part('partials/searchform'); ? -->
<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'SEARCH', 'html5blank' ); ?>"> <!-- Change terminology here to fit your needs. -->
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->
