<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- BOOK YOUR TOUR NOW SECTION -->
<section class="booking">
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

<!-- ATTENTION GRABBER SECTION -->
<article class="index-article">
  <div class="index-article__text">
    <h2><?php the_field('home_headline'); ?></h></h2>
    <p><?php the_field('home_body'); ?></p>
    <button><?php the_field('home_button'); ?></button>
  </div>
  <!-- IMAGE HERE -->
  <?php $image = get_field('home_image'); ?>          
  <img class="index-article__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</article>

<!-- FUN FACTS SECTION -->
<section class="fun-facts">
  <div class="fun-facts__fact1">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/sailorhat.svg"/>
    <h5>185 Years Old</h5>
  </div>
  <div class="fun-facts__fact2">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/lighthouse.svg"/>
    <h5>240 Feet Tall</h5>
  </div>
  <div class="fun-facts__fact3">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/binoculars.svg"/>
    <h5>53 Miles of Light</h5>
  </div>
  <div class="fun-facts__fact4">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/light.svg"/>
    <h5>Electrified in 1924</h5>
  </div>
</section>

<?php get_footer(); ?>
