<?php
add_action( 'init', 'post_type_pesquisas' );
function post_type_pesquisas() {

  $labels = array(
      'name' => _x('Pesquisas', 'post type general name'),
      'singular_name' => _x('Pesquisas', 'post type singular name'),
      'add_new' => _x('Adicionar pesquisa', 'noticias'),
      'add_new_item' => __('Adicionar pesquisa'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova pesquisa'),
      'all_items' => __('Todas as produções'),
      'view_item' => __('Ver pesquisa'),
      'search_items' => __('Buscar pesquisa'),
      'not_found' =>  __('Nenhum item encontrado'),
      'not_found_in_trash' => __('Nenhum item encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Pesquisas'
  );
  
  register_post_type( 'pesquisas', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => false,
      'rewrite' => array(
       'slug' => 'pesquisas',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'register_meta_box_cb' => 'pesquisas_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

?>