<?php
function artistas() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Artistas', 'Post Type General Name', 'nucleoroto-theme' ),
    'singular_name'       => _x( 'Artista', 'Post Type Singular Name', 'nucleoroto-theme' ),
    'menu_name'           => __( 'Roto-Artistas', 'nucleoroto-theme' ),
    'parent_item_colon'   => __( 'Artista padre', 'nucleoroto-theme' ),
    'all_items'           => __( 'Todos los Artistas', 'nucleoroto-theme' ),
    'view_item'           => __( 'Ver Artista', 'nucleoroto-theme' ),
    'add_new_item'        => __( 'Agrega Artista', 'nucleoroto-theme' ),
    'add_new'             => __( 'Nuevo Artista', 'nucleoroto-theme' ),
    'edit_item'           => __( 'Edita Artista', 'nucleoroto-theme' ),
    'update_item'         => __( 'Actualiza Artista', 'nucleoroto-theme' ),
    'search_items'        => __( 'Busca Artista', 'nucleoroto-theme' ),
    'not_found'           => __( 'No existe', 'nucleoroto-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'nucleoroto-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Artistas', 'nucleoroto-theme' ),
    'description'         => __( 'Artistas nucleoroto', 'nucleoroto-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-groups',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'roto-artistas', $args );

}

add_action( 'init', 'artistas', 0 );
