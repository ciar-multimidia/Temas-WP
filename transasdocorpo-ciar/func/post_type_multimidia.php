<?php
add_action( 'init', 'post_type_galeria' );
function post_type_galeria() {

  $labels = array(
      'name' => _x('Multimidia', 'post type general name'),
      'singular_name' => _x('Multimidia', 'post type singular name'),
      'add_new' => _x('Adicionar item', 'multimidia'),
      'add_new_item' => __('Adicionar item'),
      'edit_item' => __('Editar'),
      'new_item' => __('Novo item'),
      'all_items' => __('Todos os itens'),
      'view_item' => __('Ver item'),
      'search_items' => __('Buscar item'),
      'not_found' =>  __('Nenhum item encontrada'),
      'not_found_in_trash' => __('Nenhum item encontrada'),
      'parent_item_colon' => '',
      'menu_name' => 'Multimidia'
  );
  
  register_post_type( 'multimidia', array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'has_archive' => 'multimidia',
      'menu_icon' => 'dashicons-format-gallery',
      'rewrite' => array(
       'slug' => 'multimidia',
       'with_front' => false,
      ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'register_meta_box_cb' => 'multimidia_meta_box',  
      'supports' => array('title', 'editor', 'thumbnail')
      )
  );
}

// ========================================//
// ADICIONA COLUNAS NO PAINEL
// ========================================// 
function adiciona_coluna_painel_multimidia($column) {
    // unset($column['date']);
    return array_merge($column,
          array('fotogaleria' => 'Imagem ilustrativa'));  
}

add_filter('manage_multimidia_posts_columns', 'adiciona_coluna_painel_multimidia'); // manage_POST-TYPE

function adiciona_coluna_painel_multimidia_valores($column_name) {
    if ($column_name == 'fotogaleria') {
      $post_thumbnail_id = get_post_thumbnail_id( $post_id );
      if ( $post_thumbnail_id ) {
        $post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
        echo '<img src="' . $post_thumbnail_img[0] . '" />';
      }
    }
}

add_action('manage_posts_custom_column', 'adiciona_coluna_painel_multimidia_valores', 10, 2);

?>