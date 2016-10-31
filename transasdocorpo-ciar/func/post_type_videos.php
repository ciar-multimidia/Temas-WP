<?php
add_action( 'init', 'post_type_videos' );
function post_type_videos() {

  $labels = array(
      'name' => _x('Vídeos', 'post type general name'),
      'singular_name' => _x('Vídeos', 'post type singular name'),
      'add_new' => _x('Adicionar video', 'videos'),
      'add_new_item' => __('Adicionar video'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo video'),
      'all_items' => __('Todos os videos'),
      'view_item' => __('Ver video'),
      'search_items' => __('Buscar video'),
      'not_found' =>  __('Nenhum video encontrado'),
      'not_found_in_trash' => __('Nenhum video encontrado'),
      'parent_item_colon' => '',
      'menu_name' => 'Vídeos'
  );
  
  register_post_type( 'videos', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'videos',
      // 'menu_icon' => get_bloginfo('template_directory') . '/img/post-type_star.png',  // Icon Path
      'menu_icon' => 'dashicons-video-alt3',
      'rewrite' => array(
       'slug' => 'videos',
       'with_front' => false,
      ),
      'capability_type' => 'page',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'videos_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

?>