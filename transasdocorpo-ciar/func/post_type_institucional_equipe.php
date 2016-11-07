<?php
add_action( 'init', 'post_type_equipe' );
function post_type_equipe() {

  $labels = array(
      'name' => _x('equipe', 'post type general name'),
      'singular_name' => _x('equipe', 'post type singular name'),
      'add_new' => _x('Adicionar item', 'equipe'),
      'add_new_item' => __('Adicionar item'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo item'),
      'all_items' => __('Todos os itens'),
      'view_item' => __('Ver item'),
      'search_items' => __('Buscar item'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'equipe'
  );
  
  register_post_type( 'equipe', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'equipe',
       'with_front' => false,
      ),
      'capability_type' => 'page',
      'has_archive' => true,
      'hierarchical' => true,
      'register_meta_box_cb' => 'equipe_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

?>