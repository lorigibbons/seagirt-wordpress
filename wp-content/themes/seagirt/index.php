<?php get_header(); ?>

<!-- BLOG SECTION -->
  <main class="center-heading">
    <h2>Sea Girt News</h2>

    <?php if ( have_posts ()) : ?>

      <!-- BLOG CONTENT -->
      <div class="news-blogs1">  <!-- Display blog grid one time if have posts -->

        <?php while ( have_posts()): the_post(); ?>

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

        <?php endwhile; ?>

      </div>

      <!-- INDEX.PHP PAGINATION GOES HERE -->
      <div class = "row index-pagination">
        <div class = "large-6 columns">
          <?php previous_posts_link ( '<button><i class="pagination-left"></i> Next Post</button>' ) ?>
        </div>
        <div class = "large-6 columns">
          <?php next_posts_link ( '<button>Previous Post <i class="pagination-right"></i></button>' ) ?>
        </div>
      </div>

    <?php else: ?>
      <em>Sorry, no posts were found.</em>

    <?php endif ; ?>

  </main>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
