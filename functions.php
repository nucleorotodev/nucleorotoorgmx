<?php
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support('post-thumbnails');

// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );

function dependencias() {
  wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
  wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/css/app.css');
  wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'cdn-fonts', 'https://fonts.googleapis.com/css?family=Allerta+Stencil|Audiowide|Bungee+Hairline|Gafata|Heebo|Iceberg|Megrim|Montserrat+Alternates|Nova+Cut|Nova+Square|Orbitron|PT+Mono|Plaster|Quantico|Share+Tech+Mono|Source+Code+Pro|Space+Mono|Stalinist+One|VT323');
  //
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js' );
  wp_enqueue_script( 'what-input', get_template_directory_uri() . '/bower_components/what-input/dist/what-input.js' );
  wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js' );
  wp_enqueue_script( 'slick-carousel', get_template_directory_uri() .'/bower_components/slick-carousel/slick/slick.js', array('jquery') );
  wp_enqueue_script( 'masonry-js', get_template_directory_uri() .'/bower_components/masonry/dist/masonry.pkgd.js', array('jquery') );
  wp_enqueue_script( 'imgLiquid', get_template_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/bower_components/parallax.js/parallax.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery') );

  // wp_localize_script('app-master','ajax',array('ajax_url'=> admin_url( 'admin-ajax.php' )));

}

function registro_menu() {
  register_nav_menu('menu-header',__( 'Menú header' ));
  register_nav_menu('menu-movil',__( 'Menú movil' ));
}
add_action( 'init', 'registro_menu' );
//
// custom post types
include_once "cpts/artistas-cpt.php";
include_once "cpts/banners-cpt.php";
include_once "cpts/releases-cpt.php";
include_once "cpts/mixtapes-cpt.php";
//
// registro de 3 sidebars
// add_action('get_sidebar','rotosidebars');
// function rotosidebars() {
//   register_sidebars( 3, array( 'name' => 'RotoSidebar %d' ) );
// }
//
// analytics
add_action('wp_head', 'add_analytics');
//pegar aqui codigo google analytics
function add_analytics() { ?>
  <script>


  </script>
  <?php
}
//
//paginas
function page_id($id) {

  return array( 'page_id' => $id );

}
//cpts
function cpt($cpt_slug,$paginado,$post_num=8,$orderby='ID') {
// esto  en la pag del wp query pasarlo por parametro $paginado
// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//
  return array(
    'post_type' => $cpt_slug,
    'posts_per_page' => $post_num,
    'paged' => $paginado,
    'orderby' => $orderby,
    'order'   => 'DESC',
  );

}
//menus para paginas
function menu_paginas($lugar = '', $ul_ID = '', $ul_class = 'menu-page' ) {

  wp_nav_menu( array( 'theme_location' => $lugar, 'menu_id' => $ul_ID, 'container' => '', 'menu_class' => $ul_class .' columns text-center p-1' ));

}
//delimita extracto
function excerpt($limit, $string = " ... mas") {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'.';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);


  return $excerpt . " " . $string;
}

// wp-admin login
function login_logo() { ?>
  <style type="text/css">
  body {background-color: black !important;}
  #login h1 a, .login h1 a {
    background-image: url(<?php echo get_template_directory_uri(); ?>/img/nr-logo-header-medium.jpg);
    height:120px;
    width:120px;
    color: #B2C652 !important;
    background-size: 120px 120px;
    background-repeat: no-repeat;
    padding-bottom: 5px;
    padding-top: 0px;
  }
  #loginform {
    background-color: black !important;
    color: #B2C652 !important;
}
  #loginform p label {
    font-weight: bold;
    color: #B2C652 !important;
}
  #loginform p label input,
  #wp-submit, #login p.message {
    background-color: #B2C652 !important;
    color:black;
    border: none !important;
}
#wp-submit:hover {
  background-color: black !important;
  color:#B2C652;
}
  </style>
  <?php
}
function login_logo_url() {
  return home_url();
}

function login_logo_url_title() {
  return 'Ilab Backend';
}
add_action( 'login_enqueue_scripts', 'login_logo' );
add_filter( 'login_headerurl', 'login_logo_url' );
add_filter( 'login_headertitle', 'login_logo_url_title' );
//fin wp-admin login

// Agrega tags despues del contenidos
function tags($content) {
  $posttags = get_the_tags();
  if ($posttags) {
    $array = [];
    foreach($posttags as $tag) {
      $array[] = '<a href="/tag/' . $tag->slug . '/">' . $tag->name . '</a>';
    }
    $content .= 'Etiquetas: ' . implode(', ', $array) . '<br>';
  }

  return $content;
}
add_filter( 'the_content', 'tags' );

// fix contact form 7 date field
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
//
// backend topbar logo
function backend_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_template_directory_uri() . '/img/nr-logo-header-small.jpg) !important;
background-position: center center;
background-size: 20px 20px;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
add_action('wp_before_admin_bar_render', 'backend_custom_logo');
//
//
// Post Count
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//
//
