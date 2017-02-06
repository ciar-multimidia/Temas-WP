<?php
add_action( 'init', 'post_type_ongs' );
function post_type_ongs() {

  $labels = array(
      'name' => _x('Ongs', 'post type general name'),
      'singular_name' => _x('Ongs', 'post type singular name'),
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
      'menu_name' => 'Mapeamento de ONGs'
  );
  
  register_post_type( 'ongs', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'ongs',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'register_meta_box_cb' => 'ongs_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail')
      )
  );
}

?>