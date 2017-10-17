<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- BOOK YOUR TOUR NOW SECTION -->
<section class="booking">
  <h4 class="booking__title">Book your tour today!</h4>
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
    <h2>A Light in the Darkness</h2>
    <p>Sea Girt Lighthouse was built, on the orders of the U.S. Light-House Board, in 1896 to illuminate a dark spot midway in the 38½-mile stretch between the Navesink and Barnegat Lighthouses.</p>
    <p>Since its restoration, the lighthouse is in use some 200 days a year. Come and see it in person!</p>
    <button>Read More</button>
  </div>
  <img class="index-article__image" src="<?php bloginfo('template_url'); ?>/assets/src/img/lightindarkness.jpg" alt="A light in the darkness" title="A light in the darkness lighthouse" />
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
