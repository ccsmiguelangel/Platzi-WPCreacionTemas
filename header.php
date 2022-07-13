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

  <?php get_template_part('template-parts/content-header', 'header'); ?>

  <main class="productos">
    <div class="container-fluid gx-5">