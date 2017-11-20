<?php
/*
Template Name: Services
*/
get_header(); ?>

<!-- SERVICE LISTING SECTION -->
<section class="services-header">
  <h2>Our Service Offerings</h2>
  <!-- TOURS -->
  <div class="services-grid">
    <div class="services-grid__tours">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/sailorhat.svg"/>
      <h5><?php the_field('service-title'); ?></h5>
      <p><?php the_field('services-content'); ?></p>
    </div>
    <!-- PHOTO TOURS -->
    <div class="services-grid__photo-tours">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/binoculars.svg"/>
      <h5><?php the_field('service-title-2'); ?> </h5>
      <p><?php the_field('services-content-2'); ?> </p>
    </div>
    <!-- MEMBERSHIP -->
    <div class="services-grid__membership">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/anchor.svg"/>
      <h5><?php the_field('service-title-3'); ?></h5>
      <p><?php the_field('services-content-3'); ?>.</p>
    </div>
    <!-- VOLUNTEER -->
    <div class="services-grid__volunteer">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/liferaft.svg"/>
      <h5><?php the_field('service-title-4'); ?></h5>
      <p><?php the_field('services-content-4'); ?></p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS WITH OWL CAROUSEL -->
<div class="testimonials owl-carousel owl-theme">
  <div class="testimonials__text">
    <p><span>&#147;</span>This was the best lighthouse tour I've ever been on<span>&#148;</span></p>
    <p>&#8275;Elle Pierce</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/family-inside-lighthouse.jpg" alt="" title=""/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>Thank you to karen at Sea Girt for making this trip amazing!<span>&#148;</span></p>
    <p>&#8275;Jane Doe</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial02.jpg" alt="Testimonial" title="Testimonial"/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>The lighthouse is beautifully restored and looks amazing.<span>&#148;</span></p>
    <p>&#8275;Peter Griffin</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial03.jpg" alt="" title=""/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>The old-world feel is captured perfectly.<span>&#148;</span></p>
    <p>&#8275;Bob Smith</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial04.jpg" alt="" title=""/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>Sea Girt Lighthouse made my vacation dream a reality.<span>&#148;</span></p>
    <p>&#8275;Helen Brown</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial05.jpg" alt="" title=""/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>We received individual attention and loved every minute!<span>&#148;</span></p>
    <p>&#8275;Elle Pierce</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial06.jpg" alt="" title=""/>
  </div>

  <div class="testimonials__text">
    <p><span>&#147;</span>The history buff in me jumped for joy at the lighthouse!</span></span><span>&#148;</span></p>
    <p>&#8275;Boe Schnitzel</p>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/testimonial07.jpg" alt="" title=""/>
  </div>
</div>

<?php get_footer(); ?>
