<?php
add_action( 'init', 'post_type_biblioteca_artigos' );
function post_type_biblioteca_artigos() {

  $labels = array(
      'name' => _x('Biblioteca - Artigos'),
      'singular_name' => _x('Artigos'),
      'add_new' => _x('Adicionar artigo', 'artigos'),
      'add_new_item' => __('Adicionar artigo'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo artigo'),
      'all_items' => __('Todos os artigos'),
      'view_item' => __('Ver artigo'),
      'search_items' => __('Buscar artigo'),
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
      'show_in_menu' => false,
      'has_archive' => 'artigos',
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
      'supports' => array('title', 'editor')
      )
  );
}
?>