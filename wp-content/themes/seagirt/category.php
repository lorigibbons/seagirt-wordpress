<?php get_header(); ?>

	<main class="center-heading">
		<!-- Displays the single category text -->
    <h2><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h2>

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
                  // IF THERE ARE MORE THAN ONE CATEGORY
                  if ( count ( $categories ) > 0 && count ( $categories ) > $i ) {
                  echo ', ';
                  }
                  $i ++;
                }
              } ?>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
            <!--The Permalink -->
            <p><a href="<?php the_permalink (); ?>" class="red-link">Continue Reading &xrArr;</a></p>
          </section>

        <?php endwhile; ?>

      </div>

    <?php else: ?>
      <em>Sorry, no posts found.</em>

    <?php endif ; ?>

  </main>


<?php get_footer(); ?>
