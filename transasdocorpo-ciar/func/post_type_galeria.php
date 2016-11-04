<?php
add_action( 'init', 'post_type_galeria' );
function post_type_galeria() {

  $labels = array(
      'name' => _x('Galeria de Fotos', 'post type general name'),
      'singular_name' => _x('Galeria de Fotos', 'post type singular name'),
      'add_new' => _x('Adicionar galeria', 'galeria'),
      'add_new_item' => __('Adicionar galeria'),
      'edit_item' => __('Editar'),
      'new_item' => __('Nova galeria'),
      'all_items' => __('Todas as galerias'),
      'view_item' => __('Ver galeria'),
      'search_items' => __('Buscar galeria'),
      'not_found' =>  __('Nenhuma galeria encontrada'),
      'not_found_in_trash' => __('Nenhuma galeria encontrada'),
      'parent_item_colon' => '',
      'menu_name' => 'Galeria de Fotos'
  );
  
  register_post_type( 'galeria', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'galeria',
      // 'menu_icon' => get_bloginfo('template_directory') . '/img/post-type_star.png',  // Icon Path
      'menu_icon' => 'dashicons-format-gallery',
      'rewrite' => array(
       'slug' => 'galeria',
       'with_front' => false,
      ),
      'capability_type' => 'page',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'galeria_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions' )
      )
  );
}

// ========================================//
// ADICIONA COLUNAS NO PAINEL
// ========================================// 
function adiciona_coluna_painel_galeria($column) {
    unset($column['date']);
    return array_merge($column,
          array('fotogaleria' => 'Imagem ilustrativa'));  
}

add_filter('manage_galeria_posts_columns', 'adiciona_coluna_painel_galeria'); // manage_POST-TYPE

function adiciona_coluna_painel_galeria_valores($column_name) {
    if ($column_name == 'fotogaleria') {
      $post_thumbnail_id = get_post_thumbnail_id( $post_id );
      if ( $post_thumbnail_id ) {
        $post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
        echo '<img src="' . $post_thumbnail_img[0] . '" />';
      }
    }
}

add_action('manage_posts_custom_column', 'adiciona_coluna_painel_galeria_valores', 10, 2);

?>