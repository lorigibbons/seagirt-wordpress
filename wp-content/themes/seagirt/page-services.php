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
      <h5>Tours</h5>
      <p>We offer tours every Sunday of the 114-year-old Sea Girt Lighthouse.
      Group tours are offered year round by prior arrangement.
      Come view our extraordinary display of lighthouse memorabilia today!</p>
    </div>
    <!-- PHOTO TOURS -->
    <div class="services-grid__photo-tours">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/binoculars.svg"/>
      <h5>Photo Tour</h5>
      <p>View our extensive scrapbook of the lighthouse, collected over centures.
      These snapshots collected show keepers, their families and later Coast Guardsmen living in the historical monument.</p>
    </div>
    <!-- MEMBERSHIP -->
    <div class="services-grid__membership">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/anchor.svg"/>
      <h5>Membership</h5>
      <p>Membership provides financial support to operate Sea Girt Lighthouse.
      If you are not yet a member, consider joining some 450 of your neighbors.</p>
    </div>
    <!-- VOLUNTEER -->
    <div class="services-grid__volunteer">
      <img src="<?php bloginfo('template_url'); ?>/assets/src/img/liferaft.svg"/>
      <h5>Volunteer</h5>
      <p>Interested in volunteering? Your time can help in many ways!
      Learn the history of the house by aiding in repairs, idenifying artifacts, reaearching history, and more!</p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
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
