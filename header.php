<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="top-right">
     <a href="<?php echo home_url(); ?>">Strona główna</a>
     <a href="#" class="contact-btn" onclick="toggleContact()">Kontakt</a>
  </div>
  <div class="header-text">
    <h1><?php bloginfo('name'); ?></h1>
    <br>
    <p>Trzy domki, pełna wygoda. Wybierz swój klimat!</p>
  </div>
</header>