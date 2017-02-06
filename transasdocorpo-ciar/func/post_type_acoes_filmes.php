<?php
add_action( 'init', 'post_type_filmes' );
function post_type_filmes() {

  $labels = array(
      'name' => _x('Filmes', 'post type general name'),
      'singular_name' => _x('Filmes', 'post type singular name'),
      'add_new' => _x('Adicionar item', 'filme'),
      'add_new_item' => __('Adicionar item'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova item'),
      'all_items' => __('Todos os itens'),
      'view_item' => __('Ver item'),
      'search_items' => __('Buscar item'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Filmes'
  );
  
  register_post_type( 'filmes', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'filmes',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'register_meta_box_cb' => 'filmes_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail')
      )
  );
}

?>