<?php
add_action( 'init', 'post_type_artigos' );
function post_type_artigos() {

  $labels = array(
      'name' => _x('Artigos', 'post type general name'),
      'singular_name' => _x('Artigos', 'post type singular name'),
      'add_new' => _x('Adicionar artigo', 'artigos'),
      'add_new_item' => __('Adicionar artigo'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo artigo'),
      'all_items' => __('Todos os artigos'),
      'view_item' => __('Ver artigos'),
      'search_items' => __('Buscar artigos'),
      'not_found' =>  __('Nenhum artigo encontrado'),
      'not_found_in_trash' => __('Nenhum artigo encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Artigos'
  );
  
  register_post_type( 'artigos', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'artigos',
      // 'menu_icon' => get_bloginfo('template_directory') . '/img/post-type_star.png',  // Icon Path
      'menu_icon' => 'dashicons-media-text',
      'rewrite' => array(
       'slug' => 'artigos',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'artigos_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

// add_action( 'init', 'criar_taxonomia_artigos', 0 );

// function criar_taxonomia_artigos() {
//   $labels = array(
//       'name'              => _x( 'Categorias dos Artigos', 'taxonomy general name' ),
//       'singular_name'     => _x( 'Categoria', 'taxonomy singular name' ),
//       'search_items'      => __( 'Procurar categorias' ),
//       'all_items'         => __( 'Categorias' ),
//       'parent_item'       => __( 'Categoria pai de artigos' ),
//       'parent_item_colon' => __( 'Categoria pai de artigos:' ),
//       'edit_item'         => __( 'Editar categoria' ),
//       'update_item'       => __( 'Atualizar categoria' ),
//       'add_new_item'      => __( 'Adicionar nova categoria' ),
//       'new_item_name'     => __( 'Novo nome de categoria' ),
//       'menu_name'         => __( 'Categorias' ),
//   );

//   $args = array(
//       'hierarchical'      => true,
//       'labels'            => $labels,
//       'show_ui'           => true,
//       'show_admin_column' => true,
//       'query_var'         => true,
//       'rewrite'           => array( 'slug' => 'categoria' ),
//   );

//   register_taxonomy( 'categoria', array( 'artigos' ), $args );
// }
?>