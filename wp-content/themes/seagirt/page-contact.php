<?php
/*
Template Name: Contact
*/
get_header(); ?>

<!-- CONTACT SECTION -->
<main class="contact-page">
  <img src="<?php bloginfo('template_url'); ?>/assets/src/img/contact-bg.jpeg" alt="" title="">
  <div class="contact-page__form">
    <h2>Contact Us!</h2>
    <!-- Using Contact Form 7.  Shortcode it generated is below. -->
    <?= do_shortcode('[contact-form-7 id="79" title="Contact form 1"]'); ?>
  </div>
  <div class="contact-page__social-media">
    <h2>Get Social with us!</h2>
    <ul class="contact-page__social-media__icons">
      <!-- EMAIL -->
      <li><a href="#"><svg class="icon icon-mail"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-envelop"></use></svg></a></li>
      <!-- FACEBOOK -->
      <li><a href="#"><svg class="icon icon-facebook"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-facebook"></use></svg></li>
      <!-- INSTAGRAM -->
      <li><svg class="icon icon-instagram"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-instagram"></use></svg></li>
      <!-- TWITTER -->
      <li><a href="#"><svg class="icon icon-twitter"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-twitter"></use></svg></a></use></li>
    </ul>

  <!-- DESKTOP INFO -->
  <div class="contact-page__info-desk">
    <h2>Other Notables </h2>
    <!-- call widget -->
    <?php dynamic_sidebar( 'Address Widget' ); ?>
  </div>
  <!-- MOBILE INFO -->
  <div class="contact-page__info-mobile">
    <h2>Other Notables </h2>
    <!-- call widget -->
    <?php dynamic_sidebar( 'Address Widget' ); ?>
  </div>

  </div>
</main>        <!-- closing contact main tag-->

<!-- GOOGLE MAP EMBED -->
<div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.2526193029835!2d-74.0297121846126!3d40.13665627939875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c188779922b497%3A0x8e5054a8a4ff098e!2sSea+Girt+Lighthouse!5e0!3m2!1sen!2sus!4v1506647341061" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php get_footer(); ?>
