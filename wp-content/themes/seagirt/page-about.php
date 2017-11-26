<?php
/*
Template Name: About
*/
get_header(); ?>

<!-- LEARN ABOUT SECTION HEADER -->
<section>
  <div class="about-header">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/seagirtguards.jpg" alt="Sea Girt Life Guards" title="Sea Girt Life Guards" />
    <div class="about-header__text">
      <h2>Learn About<br /><span>Sea <br /> Girt</span></h2>
    </div>
  </div>

  <main class="main">
    <!-- THE PAGE TITLE HEADING -->
    <h3><?php the_field('about_heading'); ?></h3>
    <!--- ABOUT REPEATING CONTENT -->
    <!--- LOOP OVER EACH EXISTING CONTENT ITEM -->
    <!--Controlled through custom fields - Get the custom field named about page repeating content and put in variable -->
    <?php $stuffVar = get_field('about_page_repeating_content'); ?>

    <!-- PING PONG START -->
    <?php $imageLeft = true; //default to true
    //echo 'image is right here ' . $imageLeft;
    if ($stuffVar) {
      foreach ($stuffVar as $one) { //looping through

        //var_dump($one['about-image']);
        //if image is on left side, display image and do this:
        if ($imageLeft) { ?>
          <img src="<?= $one['about-image']['url'];?>" alt="<?= $one['about-image']['alt'];?>" >
        <?php } ?>
        <!-- TEXT CONTENT -->
        <div class="main__text">
          <h3><?= $one['about-title']; ?></h3>
          <?= $one['about-body']; ?>
        </div>
        <!-- if image id not on left display image, do this (display on right) -->
        <?php if (!$imageLeft) { ?>
          <img src="<?= $one['about-image']['url'];?>" alt="<?= $one['about-image']['alt'];?>" >
        <?php }
        //variable switch, switches from false to true
        //echo 'imageLeft ' . $imageLeft;
        $imageLeft = ($imageLeft == true) ? false : true; ?>
      <?php } ?>
    <?php } ?>

  </main>
</section>

<?php get_footer(); ?>
