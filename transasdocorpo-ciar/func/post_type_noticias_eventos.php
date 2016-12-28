<?php
add_action( 'init', 'post_type_eventos' );
function post_type_eventos() {

  $labels = array(
      'name' => _x('Notícias - Eventos'),
      'singular_name' => _x('Eventos'),
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
      'show_in_menu' => false,
      'has_archive' => 'eventos',
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
      'supports' => array('title', 'editor')
      )
  );
}


// ========================================//
// ADICIONA COLUNAS NO PAINEL
// ========================================// 
function adiciona_coluna_painel_eventos($column) {
    unset($column['date']);
    return array_merge($column,
          array('data_e_hora_evento' => 'Data evento'));  
}

add_filter('manage_eventos_posts_columns', 'adiciona_coluna_painel_eventos'); // manage_POST-TYPE

function adiciona_coluna_painel_eventos_valores($column_name) {
    if ($column_name == 'data_e_hora_evento') {

      $timestamp = get_field('data_e_hora_evento');
      echo date_i18n("d/m/Y - H:i", $timestamp);

      // echo get_field('data_e_hora_evento');
    }
}

add_action('manage_posts_custom_column', 'adiciona_coluna_painel_eventos_valores', 10, 2);

?>