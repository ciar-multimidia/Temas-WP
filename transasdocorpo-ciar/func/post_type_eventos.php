<?php
add_action( 'init', 'post_type_eventos' );
function post_type_eventos() {

  $labels = array(
      'name' => _x('Eventos', 'post type general name'),
      'singular_name' => _x('Eventos', 'post type singular name'),
      'add_new' => _x('Adicionar evento', 'eventos'),
      'add_new_item' => __('Adicionar evento'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo evento'),
      'all_items' => __('Todos os eventos'),
      'view_item' => __('Ver eventos'),
      'search_items' => __('Buscar eventos'),
      'not_found' =>  __('Nenhum evento encontrado'),
      'not_found_in_trash' => __('Nenhum evento encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Eventos'
  );
  
  register_post_type( 'eventos', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'eventos',
      // 'menu_icon' => get_bloginfo('template_directory') . '/img/post-type_star.png',  // Icon Path
      'menu_icon' => 'dashicons-calendar-alt',
      'rewrite' => array(
       'slug' => 'eventos',
       'with_front' => false,
      ),
      'capability_type' => 'page',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'eventos_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'revisions' )
      )
  );
}

?>