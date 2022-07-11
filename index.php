<?php get_header(); ?>

<?php if (have_posts()) { ?>
  <?php while (have_posts()) {
    the_post(); ?>
    <?php the_content(); ?>
    <!--Wordpress Content-->
  <?php } ?>
<?php } ?>

<?php
$plz_args = array(
  // 'post_type' => 'producto', // Trae solo un producto, nombre de producto registrardo
  'post_type' => array('producto'),
  'posts_per_page' => -1, // numeros infinitos


  // NOTA IMPORTANTE Reiniciar configuración de enlaces permanentes al crear custom post types para refrescar para generar configuración en archivo . htaccess
);

// Instanciar
$productos = new WP_Query($plz_args);
?>
<div class="productos__container">

  <?php if ($productos->have_posts()) { ?>
    <?php while ($productos->have_posts()) { $productos->the_post(); ?>
      <div class="productos__card">
        <figure>
          <?php 
          the_post_thumbnail("post-thumbnail");
          // Posibles values 
          // the_post_thumbnail("medium"); 
          // the_post_thumbnail("large"); 
          // the_post_thumbnail("ful"); 
          ?>
        </figure>
        <div class="producto__caption">
          <div class="productos__desc">
            <a class="producto__link" href="<?php the_permalink(); // Cuando tiene el prefijo "the" imprime directamente y "get" solo lo va a traer?>">
              <h4 class="productos__titulo"><?php the_title(); ?></h4>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>

</div>


<?php get_footer(); ?>