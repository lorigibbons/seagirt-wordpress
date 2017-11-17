<?php get_header(); ?>

<!-- Basic WP Loop: -->
<?php if ( have_posts ()) : while ( have_posts ()) : the_post (); ?>

<!-- SINGNLE/INDIVIDUAL NEWS ARTICLE SECTION -->
<article class="news-article center-heading">
  <h2><?php the_title(); ?></h2>
  <?php the_content (); ?>
  <?php the_post_thumbnail (); ?>

  <!--PAGINATION FOR SINGLE POSTS -->
  <div class = "pagination">
    <div class = "pagination__prev-post" >
      <?php next_post_link ( '%link' , 'newer news' ) ?>
    </div>
    <div class = "pagination__next-post" >
      <?php previous_post_link ( '%link' , 'older news' ) ?>
    </div>
      <br clear = "both" />
  </div>

</article>

<?php endwhile ; endif ; ?> <!-- End basic WP loop -->

<!-- COMMENTS -->
<?php comments_template();//Go get the comments template ?>
<!-- See comments.php and functions.php for this form

<!-- SIDEBAR -->
<?php get_sidebar(); ?>


<!-- MORE BLOGS SECTION -->
<?php $query = new WP_Query ( array(
  'posts_per_page' => ''
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


<!-- SINGLE.PHP PAGINATION GOES HERE

  <!--<main>

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
  </div> close news-blogs div -->

  <!--
  <div class="comments">
    <div class="section-heading">
      <h2 class="section-heading__title">
        Comments
      </h2>
      <h3 class="section-heading__subheading">
        Leave Your Thoughts
      </h3>
    </div>

    <div class="comments__form">
      <form action="">
        <input type="text" placeholder="Name" />
        <input type="email" placeholder="Email"/>
        <input type="url" placeholder="Website"/>
        <textarea type="Comments"></textarea>
        <input type="submit" name="submit" Value="submit" />
      </form>
    </div>
    <div class="comments__responses__one">
      <div class="comments__responses__one__original">
        <div class="comments__responses__avatar">
          <img src=""/>
        </div>
        <div class="comments__responses__content">
          <h3 class="comments__responses__date">ffdjfkldjs</h3>
          <h3 class="comments__responses__subheading">Name something</h3>
          <p>Some text here.</p>
          <div class="comments__responses__reply">
            <a href="#">Reply</a>
          </div>
        </div>
    </div>-->
<?php get_footer(); ?>
