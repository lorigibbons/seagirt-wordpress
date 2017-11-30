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


<!-- MORE BLOGS SECTION -->
<?php $query = new WP_Query ( array(
  'posts_per_page' => '6'
  ) );
if ( $query -> have_posts ()) : while ( $query -> have_posts ()) : $query -> the_post (); ?>
<!-- CONTENT -->
  <!-- BLOG CONTENT -->
  <div class="news-blogs1">  <!-- Display blog grid one time if have posts -->

      <section class="news-blogs__card1 news-blogs1__row1">
        <!-- The Image as a Thumbnail-->
        <?php the_post_thumbnail(); ?>
        <!--The Title -->
        <h3><?php the_title (); ?></h3>
        <!-- The Category and it's function to display categories and comma-->
        <p>
          <?php // GET THE CATEGORY CONTENT
          $categories = get_the_category();
          // IF THERE'S A CATEGORY
          if ( $categories ) {
            // LOOP THROUGH THE CATEGORIES AND DISPLAY THEM
            $i = 1;
            foreach ( $categories as $one ) {
              echo $one -> name;
              // IF THERE IS MORE THAN ONE CATEGORY
              if ( count ( $categories ) > 0 && count ( $categories ) > $i ) {
              echo ', ';
              }
              $i ++;
            }
          } ?>

        <p><?php the_content (); ?></p>
        <!--The Permalink -->
        <p><a href="<?php the_permalink (); ?>" class="red-link">Continue Reading &xrArr;</a></p>
      </section>
  </div>
<?php endwhile ; endif ; ?>

<?php get_footer(); ?>
