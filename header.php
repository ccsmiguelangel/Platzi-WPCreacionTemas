<!DOCTYPE html>
<!-- Configuración de idioma -->
<html <?php language_attributes() ?>>

<head>
  <!-- Charset de wordpress -->
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php wp_head(); ?>

</head>

<body>
  <!-- Dar Analythics -->
  <?php wp_body_open() ?>
  <header class="encabezado">
    <div class="container-fluid gx-5 py-3">
      <div class="row">
        <div class="encabezado__hamburguesa col-2">
          <?php the_custom_logo() ?>
        </div>
        <div class="enbezado__logo col-5 col-md-2 px-2 px-md-4">
          <a href="<?php echo home_url() ?>">
            <!--Dar Home-->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="100%" alt="Yard Sales">
          </a>
        </div>
        <div class="encabezado__menu col-6 col-md-5">
          <ul>
            <li class="encabezado__item current"><a href="#">All</a></li>
            <li class="encabezado__item"><a href="#">Clothes</a></li>
            <li class="encabezado__item"><a href="#">Electronics</a></li>
            <li class="encabezado__item"><a href="#">Furniture</a></li>
            <li class="encabezado__item"><a href="#">Toys</a></li>
            <li class="encabezado__item"><a href="#">Others</a></li>
          </ul>
        </div>
        <div class="encabezado__cart col-5 col-md-1">
          <a href="sign_in.html" class="encabezado_sign-in">
            Sign in
          </a>
          <a href="#" class="encabezado__link active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-empty-card.svg" alt="cart">
          </a>
        </div>
      </div>
      <div class="encabezado__menu-responsive">
        <ul>
          <li class="encabezado__item current"><a href="#">All</a></li>
          <li class="encabezado__item"><a href="#">Clothes</a></li>
          <li class="encabezado__item"><a href="#">Electronics</a></li>
          <li class="encabezado__item"><a href="#">Furniture</a></li>
          <li class="encabezado__item"><a href="#">Toys</a></li>
          <li class="encabezado__item"><a href="#">Others</a></li>
        </ul>
      </div>
    </div>
  </header>

  <main class="productos">
    <div class="container-fluid gx-5">