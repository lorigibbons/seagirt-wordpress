<?php get_header(); ?>

<!-- Basic WP Loop: -->
<?php if ( have_posts ()) : while ( have_posts ()) : the_post (); ?>

<!-- SINGNLE/INDIVIDUAL NEWS ARTICLE SECTION -->
<article class="news-article center-heading">
  <h2><?php the_title(); ?></h2>
  <?php the_content (); ?>
  <?php the_post_thumbnail (); ?>

<!-- PAGINATION -->
  <div id = "pagination">
    <div class = "prev_post" > <?php next_post_link ( '%link' , 'newer stuff' ) ?> </div>
    <div class = "next_post" > <?php previous_post_link ( '%link' , 'older stuff' ) ?> </div>
    <br clear = "both" />
  </div>

</article>

<?php endwhile ; endif ; ?> <!-- End basic WP loop -->

<!-- COMMENTS -->
<?php comments_template();//Go get the comments template ?>
<!-- See comments.php and functions.php for this form

<!-- BLOG SECTION -->
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
