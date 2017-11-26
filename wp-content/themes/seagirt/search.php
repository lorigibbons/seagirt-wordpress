<!-- Displays the search results. Style me as you wish! -->

<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

		<?php get_template_part('partials/loop'); ?>

		<?php get_template_part('partials/pagination'); ?>

	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
