<!-- FOOTER -->
<footer class="footer">
  <div class="footer__stay-connected">
    <h6>Stay connected</h6>
    <p>Join your neighbors and receive bi-weekly news emails to get latest Sea Girt updates.</p>
    <input type="email" name="email" placeholder="EMAIL">
    <button>Sign Up</button>
    <!-- Get the social media partials code and inject here -->
    <?php get_template_part('partials/social_media') ?>
  </div>
  <div class="footer__visit-us">
    <h6>ComeVisit Us!</h6>
    <a href="https://www.google.com/maps/place/Sea+Girt+Lighthouse/@40.1366563,-74.0297122,17z/data=!3m1!4b1!4m5!3m4!1s0x89c188779922b497:0x8e5054a8a4ff098e!8m2!3d40.1366563!4d-74.0275235" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/src/img/map.svg" alt="Map to Sea Girt" title="Map"/></a>
    <!-- call widget -->
    <?php dynamic_sidebar( 'Address Widget' ); ?>
    <!-- SEARCH FORM HERE -->
    <?php get_template_part('partials/searchform'); ?>
  </div>
  <div class="footer__sitemap">
    <h6>Sitemap</h6>
      <?php html5blank_nav_footer(); ?>
  </div>

  <!-- COPYRIGHT INFO -->
  <p class="footer__copyright">&copy; <?= date('Y'); ?> Lori Gibbons <br> &star;     "Creativity Springs From Desire"     &star;</p>
</footer>

<?php wp_footer(); ?>

		<!-- TODO: ADD GOOGLE ANALYTICS -->

	</body>
</html>
