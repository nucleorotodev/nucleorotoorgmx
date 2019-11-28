<?php
function mixtapes() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Mixtapes', 'Post Type General Name', 'nucleoroto-theme' ),
    'singular_name'       => _x( 'Mixtape', 'Post Type Singular Name', 'nucleoroto-theme' ),
    'menu_name'           => __( 'Roto-Mixtapes', 'nucleoroto-theme' ),
    'parent_item_colon'   => __( 'Mixtape padre', 'nucleoroto-theme' ),
    'all_items'           => __( 'Todos los RotoMixtapes', 'nucleoroto-theme' ),
    'view_item'           => __( 'Ver Mixtape', 'nucleoroto-theme' ),
    'add_new_item'        => __( 'Agrega RotoMixtape', 'nucleoroto-theme' ),
    'add_new'             => __( 'Nuevo RotoMixtape', 'nucleoroto-theme' ),
    'edit_item'           => __( 'Edita RotoMixtape', 'nucleoroto-theme' ),
    'update_item'         => __( 'Actualiza RotoMixtape', 'nucleoroto-theme' ),
    'search_items'        => __( 'Busca RotoMixtape', 'nucleoroto-theme' ),
    'not_found'           => __( 'No existe', 'nucleoroto-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'nucleoroto-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Mixtapes', 'nucleoroto-theme' ),
    'description'         => __( 'Nucleoroto Mixtape release', 'nucleoroto-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-image-rotate',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 7,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'roto-mixtapes', $args );

}

add_action( 'init', 'mixtapes', 0 );
