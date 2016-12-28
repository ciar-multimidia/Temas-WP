<?php
add_action( 'init', 'post_type_biblioteca' );
function post_type_biblioteca() {

  $labels = array(
      'name' => _x('Biblioteca'),
      'singular_name' => _x('Biblioteca'),
      'add_new' => _x('Adicionar item', 'biblioteca'),
      'add_new_item' => __('Adicionar item'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo item'),
      'all_items' => __('Outros itens'),
      'view_item' => __('Ver item'),
      'search_items' => __('Buscar items'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Biblioteca'
  );
  
  register_post_type( 'biblioteca', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'biblioteca',
      'menu_icon' => 'dashicons-book',
      'rewrite' => array(
       'slug' => 'biblioteca',
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