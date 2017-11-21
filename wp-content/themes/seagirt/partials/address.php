<!-- Address Options Page Statement
Include code where you want the address to appear:
php get_template_part('partials/address') ?>
-->


<?php  //Set up Variables
  $address = get_field('address', 'options');
  $phone_number = get_field('phone_number', 'options');
  $email_address = get_field('email_address', 'options');

//only display if exists
if ($address || $phone_number || $email_address) {?>

  <?php //  PHP check for link, if exists then display link
  if ($address) { ?>
    <p><?php the_field('address'); ?></p>
    <p><?php the_field('phone_number'); ?></p>
    <p><?php the_field('email_address'); ?></p>
  <?php } ?>

<!--Close if statement from options page statement -->
<?php } ?>
