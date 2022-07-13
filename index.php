<?php get_header(); ?>

<?php if (have_posts()) { ?>
  <?php while (have_posts()) {
    the_post(); ?>
    <?php the_content(); ?>
    <!--Wordpress Content-->
  <?php } ?>
<?php } ?>

<?php get_template_part('template-parts/content-product-list', 'list'); ?>


<?php get_footer(); ?>