<?php get_header(); ?>

<!-- Basic WP Loop: -->
<?php if ( have_posts ()) : while ( have_posts ()) : the_post (); ?>

<!-- SINGNLE/INDIVIDUAL NEWS ARTICLE SECTION -->
<article class="news-article center-heading">
  <h2><?php the_title(); ?></h2>
  <?php the_content (); ?>
  <?php the_post_thumbnail (); ?>
</article>

<!--PAGINATION FOR SINGLE POSTS -->
<div class = "pagination">
  <button class = "pagination__prev-post" >
    <?php next_post_link ( '%link' , 'newer news' ) ?>
  </button>
  <button class = "pagination__next-post" >
    <?php previous_post_link ( '%link' , 'older news' ) ?>
  </button>
    <br clear = "both" />
</div>

<?php endwhile ; endif ; ?> <!-- End basic WP loop -->

<!-- COMMENTS, calls comments.php -->
<?php comments_template();//Go get the comments template ?>
  <!-- See comments.php and functions.php for this form-->

<!-- SIDEBAR -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
