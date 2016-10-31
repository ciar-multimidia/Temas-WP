<?php
add_action( 'init', 'post_type_producoes' );
function post_type_producoes() {

  $labels = array(
      'name' => _x('Produções', 'post type general name'),
      'singular_name' => _x('Produções', 'post type singular name'),
      'add_new' => _x('Adicionar produção', 'noticias'),
      'add_new_item' => __('Adicionar produção'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova produção'),
      'all_items' => __('Todas as produções'),
      'view_item' => __('Ver produção'),
      'search_items' => __('Buscar produção'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Produções'
  );
  
  register_post_type( 'producoes', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'producoes',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'register_meta_box_cb' => 'producoes_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

?>