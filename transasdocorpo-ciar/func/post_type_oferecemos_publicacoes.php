<?php
add_action( 'init', 'post_type_publicacoes' );
function post_type_publicacoes() {

  $labels = array(
      'name' => _x('Publicações', 'post type general name'),
      'singular_name' => _x('Publicações', 'post type singular name'),
      'add_new' => _x('Adicionar publicação', 'noticias'),
      'add_new_item' => __('Adicionar publicação'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova publicação'),
      'all_items' => __('Todas as produções'),
      'view_item' => __('Ver publicação'),
      'search_items' => __('Buscar publicação'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Publicações'
  );
  
  register_post_type( 'publicacoes', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'publicacoes',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'register_meta_box_cb' => 'publicacoes_meta_box',  
      'supports' => array('title', 'editor')
      )
  );
}

?>