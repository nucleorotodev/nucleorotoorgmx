<?php
function releases() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Releases', 'Post Type General Name', 'nucleoroto-theme' ),
    'singular_name'       => _x( 'Release', 'Post Type Singular Name', 'nucleoroto-theme' ),
    'menu_name'           => __( 'Roto-Releases', 'nucleoroto-theme' ),
    'parent_item_colon'   => __( 'Release padre', 'nucleoroto-theme' ),
    'all_items'           => __( 'Todos los RotoReleases', 'nucleoroto-theme' ),
    'view_item'           => __( 'Ver Release', 'nucleoroto-theme' ),
    'add_new_item'        => __( 'Agrega RotoRelease', 'nucleoroto-theme' ),
    'add_new'             => __( 'Nuevo RotoRelease', 'nucleoroto-theme' ),
    'edit_item'           => __( 'Edita RotoRelease', 'nucleoroto-theme' ),
    'update_item'         => __( 'Actualiza RotoRelease', 'nucleoroto-theme' ),
    'search_items'        => __( 'Busca RotoRelease', 'nucleoroto-theme' ),
    'not_found'           => __( 'No existe', 'nucleoroto-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'nucleoroto-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Releases', 'nucleoroto-theme' ),
    'description'         => __( 'Nucleoroto Releases música', 'nucleoroto-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-controls-play',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'roto-releases', $args );

}

add_action( 'init', 'releases', 0 );
