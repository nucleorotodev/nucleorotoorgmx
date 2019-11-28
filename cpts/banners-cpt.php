<?php
function banners() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Banners', 'Post Type General Name', 'nucleoroto-theme' ),
    'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'nucleoroto-theme' ),
    'menu_name'           => __( 'Roto-Banners', 'nucleoroto-theme' ),
    'parent_item_colon'   => __( 'Banner padre', 'nucleoroto-theme' ),
    'all_items'           => __( 'Todos los RotoBanners', 'nucleoroto-theme' ),
    'view_item'           => __( 'Ver Banner', 'nucleoroto-theme' ),
    'add_new_item'        => __( 'Agrega RotoBanner', 'nucleoroto-theme' ),
    'add_new'             => __( 'Nuevo RotoBanner', 'nucleoroto-theme' ),
    'edit_item'           => __( 'Edita RotoBanner', 'nucleoroto-theme' ),
    'update_item'         => __( 'Actualiza RotoBanner', 'nucleoroto-theme' ),
    'search_items'        => __( 'Busca RotoBanner', 'nucleoroto-theme' ),
    'not_found'           => __( 'No existe', 'nucleoroto-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'nucleoroto-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Banners', 'nucleoroto-theme' ),
    'description'         => __( 'Banners para slider', 'nucleoroto-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-images-alt2',
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
  register_post_type( 'roto-banners', $args );

}

add_action( 'init', 'banners', 0 );
