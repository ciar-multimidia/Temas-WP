<?php
add_action( 'init', 'post_type_noticias' );
function post_type_noticias() {

  $labels = array(
      'name' => _x('Notícias'),
      'singular_name' => _x('Notícias'),
      'add_new' => _x('Adicionar notícia', 'noticias'),
      'add_new_item' => __('Adicionar notícia'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova notícia'),
      'all_items' => __('Todas as notícias'),
      'view_item' => __('Ver notícia'),
      'search_items' => __('Buscar notícias'),
      'not_found' =>  __('Nenhuma notícia encontrado'),
      'not_found_in_trash' => __('Nenhuma notícia encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Notícias e Eventos'
  );
  
  register_post_type( 'noticias', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'noticias',
      'menu_icon' => 'dashicons-calendar-alt',
      'rewrite' => array(
       'slug' => 'noticias',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'noticias_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail' )
      )
  );
}

?>