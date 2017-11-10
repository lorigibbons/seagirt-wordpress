<?php
/*
Template Name: News Index
*/
get_header(); ?>

<!-- BLOG SECTION -->
<main class="center-heading">
  <h2>TEST Sea Girt News Updates</h2>

<!-- News Blog -->

<?php if ( have_posts ()) : ?>

  <!-- BLOG CONTENT -->
  <div class="news-blogs1">  <!-- Display blog grid one time if have posts -->

    <?php while ( have_posts()): the_post(); ?>

      <section class="news-blogs__card1 news-blogs1__row1">
        <!-- The Image as a Thumbnail-->
        <?php the_post_thumbnail(); ?>
        <!--The Title -->
        <h3><?php the_title(); ?></h3>
        <!-- The Category and it's function to display categories and comma-->
        <>
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

        <p><?php the_content();?></p>
        <!--The Permalink -->
        <p><a href="<?php the_permalink(); ?>" class="red-link">Continue Reading &xrArr;</a></p>
      </section>

    <?php endwhile; ?>

  </div>

<?php else: ?>
  <em>Sorry, no posts found.</em>

<?php endif ; ?>


<!--
    <div class="news-blogs1">
      <section class="news-blogs__card1 news-blogs1__row1">
        <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture1.jpeg" alt="" title="" />
        <h3>Signing of the Lease Party</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
        <p><a href="newsindividual.html" class="red-link">Continue Reading &xrArr;</a></p>
      </section>

      <section class="news-blogs__card2 news-blogs1__row1">
        <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture2.jpg" alt="" title="" />
        <h3>Lots to see at Sea Girt</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
        <p><a href="newsindividual.html" class="red-link">Continue Reading &xrArr;</a></p>
      </section>

      <section class="news-blogs__card3 news-blogs1__row1">
        <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture3.jpg" alt="" title="" />
        <h3>Military History Attracts Vets</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
        <p><a href="newsindividual.html" class="red-link">Continue Reading &xrArr;</a></p>
      </section>

      <section class="news-blogs__card4 news-blogs1__row1">
        <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture4.jpg" alt="" title="" />
        <h3>Horseless Carraiges Visit Sea Girt</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
        <p><a href="newsindividual.html" class="red-link">Continue Reading &xrArr;</a></p>
      </section>
    </div>



  <div class="news-blogs2">
    <section class="news-blogs__card1 news-blogs2__row2">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture1.jpeg" alt="" title="" />
      <h3>Signing of the Lease Party</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
      <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
    </section>

    <section class="news-blogs__card2 news-blogs2__row2">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture2.jpg" alt="" title="" />
      <h3>Lots to see at Sea Girt</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
      <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
    </section>

    <section class="news-blogs__card3 news-blogs2__row2">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture3.jpg" alt="" title="" />
    <h3>Military History Attracts Vets</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
    <p><a href="#" class="red-link" >Continue Reading &xrArr;</a></p>
  </section>

  <section class="news-blogs__card4 news-blogs2__row2">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/blogpicture4.jpg" alt="" title="" />
    <h3>Horseless Carraiges Visit Sea Girt</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
    <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
  </section>-->
</main>

<?php get_footer(); ?>
