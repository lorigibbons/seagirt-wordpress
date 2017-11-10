<?php get_header(); ?>

<!-- Get the repeating content in custom fields -->
<?php $toursVar = get_field('tour_page_repeating_content'); ?>
<!-- START WP LOOP -->
<?php if ( have_posts()) : ?>

<!-- TOUR SEA GIRT SECTION -->
<section class="tours">
  <div class="tours-header">
    <div class="tours-header__text">
      <h2>Tour <br /><span>Sea <br /> Girt</span></h2>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/tour-sea-girt.jpg" alt="tour sea girt" title="Tour Sea Girt" />
  </div>

  <!-- Section for WP Loop that we are looping over-->
  <?php while (have_posts ()) : the_post (); ?>

  <!-- CONTENT ARTICLES AND IMAGES -->
  <main class="tours-main">
      <div class="tours-main__section-text">
        <?php if(get_field('tours_heading')); ?>
        <h3><?= the_field('tours_heading'); ?></h3>
        <p><?= the_field('tours_body'); ?></p>
      </div>
      <div class="tours-main__image" <?php the_field('tours_image'); ?> ></div>

        <!--END WP LOOP -->
      <?php endwhile; endif; ?>

  </main>
</section>

<!-- BOOK TOUR NOW CALL TO ACTION -->
<section class="booking booking-inline">
  <h4 class="booking__title"><?php the_field('booking_message'); ?></h4>
  <div class="booking__date">
    <h6>Date</h6>
    <input type="date" name="search" placeholder="10-DEC-2017">
  </div>
  <div class="booking__visitors">
    <h6>Visitors</h6>
    <input type="number" name="numVisitors" value="2">
  </div>
  <button class="booking__button">Book Now</button>
  </section>
<div class="stripe"></div>



<?php get_footer(); ?>
