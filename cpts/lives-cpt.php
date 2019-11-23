<?php
function lives() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Lives', 'Post Type General Name', 'nucleoroto-theme' ),
    'singular_name'       => _x( 'Live', 'Post Type Singular Name', 'nucleoroto-theme' ),
    'menu_name'           => __( 'Roto-Lives', 'nucleoroto-theme' ),
    'parent_item_colon'   => __( 'Live padre', 'nucleoroto-theme' ),
    'all_items'           => __( 'Todos los RotoLives', 'nucleoroto-theme' ),
    'view_item'           => __( 'Ver Live', 'nucleoroto-theme' ),
    'add_new_item'        => __( 'Agrega RotoLive', 'nucleoroto-theme' ),
    'add_new'             => __( 'Nuevo RotoLive', 'nucleoroto-theme' ),
    'edit_item'           => __( 'Edita RotoLive', 'nucleoroto-theme' ),
    'update_item'         => __( 'Actualiza RotoLive', 'nucleoroto-theme' ),
    'search_items'        => __( 'Busca RotoLive', 'nucleoroto-theme' ),
    'not_found'           => __( 'No existe', 'nucleoroto-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'nucleoroto-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Lives', 'nucleoroto-theme' ),
    'description'         => __( 'Nucleoroto Live gigs', 'nucleoroto-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'thumbnail' ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-universal-access',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 8,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'roto-lives', $args );

}

add_action( 'init', 'lives', 0 );
