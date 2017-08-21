<?php
function nucleoroto_styles (){
	wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', '1.0.0');
	wp_enqueue_style('icon', get_template_directory_uri() . '/css/foundation-icons.css', '1.0.0');

	wp_enqueue_script('jquery');

	wp_enqueue_script('what-input', get_template_directory_uri() . '/bower_components/what-input/dist/what-input.js', array('jquery'), '6.3.0', true);

	wp_enqueue_script('foundationjs', get_template_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js', array('jquery'), '6.3.0', true);

	wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array('foundationjs'), '6.3.0', true);
}
add_action('wp_enqueue_scripts', 'nucleoroto_styles');

add_theme_support('post-thumbnails');

?>
<?php

<?php

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support('post-thumbnails');

// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );

function dependencias() {
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
  wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
  wp_enqueue_style( 'fullpage-css', get_stylesheet_directory_uri() . '/bower_components/fullpage.js/dist/jquery.fullpage.css');
  wp_enqueue_style( 'js_utils-css', get_stylesheet_directory_uri() . '/submodulos/js_utils/dist/stylesheet/js_utils.css');
  wp_enqueue_style( 'wp-styles', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style( 'app-styles', get_stylesheet_directory_uri() . '/css/app.css');
  //
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js' );
  wp_enqueue_script( 'what-input', get_stylesheet_directory_uri() . '/bower_components/what-input/dist/what-input.js' );
  wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js' );
  wp_enqueue_script( 'fullpage', get_stylesheet_directory_uri() . '/bower_components/fullpage.js/dist/jquery.fullpage.js', array('jquery'));
  wp_enqueue_script( 'sticky-kit', get_stylesheet_directory_uri() . '/bower_components/sticky-kit/jquery.sticky-kit.min.js', array('jquery'));
  wp_enqueue_script( 'slick-carousel', get_stylesheet_directory_uri() .'/bower_components/slick-carousel/slick/slick.js', array('jquery') );
  wp_enqueue_script( 'imgLiquid', get_stylesheet_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  wp_enqueue_script( 'vivus-js', get_stylesheet_directory_uri() . '/bower_components/vivus/dist/vivus.js' );
  wp_enqueue_script( 'js_utils', get_stylesheet_directory_uri() . '/submodulos/js_utils/dist/js/js_utils.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js', array('jquery') );

  // wp_localize_script('app-master','ajax',array('ajax_url'=> admin_url( 'admin-ajax.php' )));

}

function registro_menu() {
  register_nav_menu('menu-header',__( 'Menú header' ));
  register_nav_menu('menu-sidebar',__( 'Menú sidebar' ));
  register_nav_menu('menu-footer',__( 'Menú footer' ));
}
add_action( 'init', 'registro_menu' );

// analytics
add_action('wp_head', 'add_analytics');
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
function cpt($cpt_slug,$paginado) {


  return array( 'post_type' => $cpt_slug, 'paged' => $paginado );

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
function my_login_logo() { ?>
  <style type="text/css">
  #login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-grande-negro.png);
    height:80px;
    width:100px;
    background-size: 100px 80px;
    background-repeat: no-repeat;
    padding-bottom: 10px;
  }
  </style>
  <?php
}
function my_login_logo_url() {
  return home_url();
}

function my_login_logo_url_title() {
  return 'Ilab Backend';
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
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

 ?>
