<?php get_header(); ?>

<!-- Basic WP Loop: -->
<?php if ( have_posts ()) : while ( have_posts ()) : the_post (); ?>

<!-- SINGNLE/INDIVIDUAL NEWS ARTICLE SECTION -->
      <article class="news-article center-heading">
        <h2><?php the_title(); ?></h2>
        <?php the_content (); ?>
        <?php the_post_thumbnail (); ?>

      </article>

<?php endwhile ; endif ; ?> <!-- End basic WP loop -->



      <!-- BLOG SECTION -->
      <main>
        <div class="news-blogs1">
          <section class="news-blogs__card1 news-blogs1__row1">
            <img src="assets/src/img/blogpicture1.jpeg" alt="" title="" />
            <h3>TEsT of the Lease Party</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
            <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
          </section>

          <section class="news-blogs__card2 news-blogs1__row1">
            <img src="assets/src/img/blogpicture2.jpg" alt="" title="" />
            <h3>Lots to see at Sea Girt</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
            <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
          </section>

          <section class="news-blogs__card3 news-blogs1__row1">
            <img src="assets/src/img/blogpicture3.jpg" alt="" title="" />
            <h3>Military History Attracts Vets</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
            <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
          </section>

          <section class="news-blogs__card4 news-blogs1__row1">
            <img src="assets/src/img/blogpicture4.jpg" alt="" title="" />
            <h3>Horseles Carraiges Visit Sea Girt</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minirunt </p>
            <p><a href="#" class="red-link">Continue Reading &xrArr;</a></p>
          </section>
        </div><!-- close news-blogs div -->

<?php get_footer(); ?>
