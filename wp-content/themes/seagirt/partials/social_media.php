<!-- Social Media Options Page Statement
Include code where you want the social media icons to appear:
php get_template_part('partials/social_media') ?>
-->


<?php  //Set up Variables
  $email = get_field('email', 'options');
  $facebook = get_field('facebook', 'options');
  $instagram = get_field('instagram', 'options');
  $twitter = get_field('twitter', 'options');

//only display if exists
if ($email || $facebook || $instagram || $twitter) {?>

<ul class="nav__social-media footer__social-media">
  <?php // Email PHP check for link, if exists then display link
  if ($email) { ?>
    <li><a href="<?= $email; ?>" target="_blank"><svg class="icon icon-envelop"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-envelop"></use></svg></a></li>
  <?php } ?>

  <?php // FACEBOOK PHP check then readline_redisplay
    if ($facebook) { ?>
    <li><a href="<?= $facebook; ?>" target="_blank"><svg class="icon icon-facebook"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-facebook"></use></svg></li>
  <?php } ?>

  <?php // PHP INSTAGRAM check for link, if exists then display link
    if ($instagram) {?>
      <li><a href="<?= $instagram; ?>" target="_blank"><svg class="icon icon-instagram"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-instagram"></use></svg></li>
    <?php } ?>

  <?php // PHP Twitter check for link, if exists then display link
  if ($twitter) {?>
    <li><a href="<?= $twitter; ?>" target="_blank"><svg class="icon icon-twitter"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-twitter"></use></svg></a></li>
  <?php } ?>
</ul>

<!--Close if statement from social media options page statement -->
<?php } ?>
