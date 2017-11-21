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
  <!-- Testimonial 1-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_1_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_1_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_1_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 2-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_2_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_2_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_2_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 3-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_3_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_3_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_3_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 4-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_4_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_4_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_4_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 5-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_5_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_5_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_5_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 6-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_6_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_6_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_6_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

  <!-- Testimonial 7-->
  <div class="testimonials__text">
    <p> <!-- TEXT -->
      <span>&#147;</span>
      <?php the_field('testimonial_7_text'); ?>
      <span>&#148;</span>
    </p>
    <p><!-- NAME --><?php the_field('testimonial_7_name'); ?></p>
    <!-- IMAGE HERE -->
    <?php $image = get_field('testimonial_7_image'); ?>   
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>

</div><!-- CLOSE OWL CAROUSEL CONTAINER-->

<?php get_footer(); ?>
