<?php
$plz_args = array(
  // 'post_type' => 'producto', 
  // Get only one product
  // and this is getting with the name register on 
  // "register_post_type" 
  'post_type' => array('producto'), // Get multiple producto custom post type 
  'posts_per_page' => -1, // get all post and display on page


  // Important note: Restart permalinks
  // configuration, when
  // creating custom post type
  // to refresh the .htaccess file configuration
);

// Instantiate custom post type "producto"
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