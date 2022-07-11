<?php


function plz_assets(){

  wp_register_style('google-font1','https://fonts.googleapis.com/css2?&family=Roboto:wght@500&display=swap', array(),false, 'all');
  wp_register_style('google-font2','https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap', array(),false, 'all');
  wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(),'5.1', 'all');


  wp_enqueue_style( 'styles', get_template_directory_uri().'/assets/css/style.css', array('google-font1','google-font2','bootstrap'));

  wp_enqueue_script('yardsale-js', get_template_directory_uri().'/assets/js/script.js');
}

add_action('wp_enqueue_scripts', 'plz_assets');

function plz_analythics(){

?>
<!-- <h1>Analythics</h1> -->
<?php
}

add_action('wp_body_open', 'plz_analythics');

function plz_theme_supports(){
  add_theme_support( 'title-tag' );//Add page title at wordpress
  add_theme_support( 'post-thumbnail' ); // Add wordpress's pages featured image
  add_theme_support( 'custom-logo' , 
    array(  
      'width' => 170,
      'height' => 35,
      'flex-width' => true,
      'flex-height' => true,
    ) 
  ); // Allow to add at appearance a logo and favicon 
}

add_action('after_setup_theme', 'plz_theme_supports');

function plz_add_menus(){
  register_nav_menus(
    array(
      'menu-principal' => 'Menu Principal',
      'menu-responsive' => 'Menu Responsive', 
    )
  ); // Allow menu section
}

add_action('after_setup_theme', 'plz_add_menus');


function plz_add_sidebar() {

  //added sidebar for widget configuration on wp admin configuration 
  register_sidebar(
    array(
      'name' => 'Pie de página',
      'id' => 'pie-pagina',
      'before_widget' => '', // Prevent generate any default code
      'after_wideget' => '',

    )
  ); 

}
add_action('widgets_init', 'plz_add_sidebar');


// https://wordpress.stackexchange.com/questions/57589/how-do-you-add-thumbnail-support-for-custom-post-types#answer-245141
add_theme_support( 'post-thumbnails' ); //Add thumbnail functionability
function plz_add_custom_post_type() {
  
  // https://developer.wordpress.org/reference/functions/register_post_type/#menu_icon
  // https://developer.wordpress.org/reference/functions/get_post_type_labels/#source
  // https://developer.wordpress.org/reference/functions/post_type_supports/
  // https://developer.wordpress.org/resource/dashicons/#cart
  // https://generatewp.com/post-type/

  $labels = array(
    'name' => 'Producto',
    'singular_name' => 'Producto',
    'all_items' => 'Todos los Productos',
    'add_new' => 'Añadir Producto',
    'menu_name' => 'Producto',
    'set_featured_image' => __('Agregar imagen')
  );
  $args = array(
    'labels' => $labels,
    'description' => 'Productos para listar en catálogo',
    'public' => true,
    'publicly_queryable' => true, // call from code
    'show_in_menu' => true, // shows section menu custom post
    'query_var' => true, // Add reference values
    'rewrite' => array( 'slug' => 'producto' ), // site url
    'capability_type' => 'post', // Display Permissions (Editor)
    'has_archive' => true, // Page to list all 
    'hierarchical' => false, // Gerarquía (Electrodomesticos > Heladeras)
    'meny_position' => 5, // Admin menu
    // Add title, edit, author and thumbnail for custom post
    'supports' => array( 'title', 'editor', 'author', 'thumbnail' ), 
    'taxonomies' => array( 'category', 'post_tag' ), 
    'show_in_rest' => true, //Generate in api rest
    'menu_icon' => 'dashicons-car' // Menu icon on admin dashboard
  );

  register_post_type('producto', $args); //It's a convention to use singular param name

}

add_action("init", "plz_add_custom_post_type");// register hook post type
