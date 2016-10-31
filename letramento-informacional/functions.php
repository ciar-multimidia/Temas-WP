<?php
include("inc-functions-scripts.php");

// remover logo wordpress admin panel
  add_action('admin_bar_menu', 'remove_wp_logo', 999);

  function remove_wp_logo( $wp_admin_bar ) {
  $wp_admin_bar->remove_node('wp-logo');
  }




//retirar versão do wordpress no rodape
function change_footer_version() {
  return 'Portal desenvolvido por CIAR UFG | Plataforma Wordpress';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );


// mensagem footer
function remove_footer_admin () {
    echo "Curso de Especializa&ccedil;&atilde;o em Letramento Informacional";
} 
add_filter('admin_footer_text', 'remove_footer_admin');



// ocultando labels do painel de controle
function remove_menus () {
  global $menu;
  $restricted = array(
      // __('Dashboard'), 
      // __('Posts'), 
      __('Links'), 
      // __('Appearance'), 
      // __('Tools'), 
      // __('Settings'), 
      __('Comments'), 
      // __('Plugins'), 
      // __('Users'), 
      // __('Media'),
      __('Pages')
    );
  end ($menu);
  while (prev($menu)){
  $value = explode(' ',$menu[key($menu)][0]);
  if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
  }
}

add_action('admin_menu', 'remove_menus');

// removendo formulario de contato (aparece apenas para administrador)
if (!(current_user_can('administrator'))) {
  function remove_wpcf7() {
    remove_menu_page( 'wpcf7' ); 
  }
  add_action('admin_menu', 'remove_wpcf7');
}






// Transformando os posts padrao em notícias
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Nova Notícia';
    $submenu['edit.php'][15][0] = 'Categorias';
    $submenu['edit.php'][16][0] = 'Palavras-chave';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notícias';
    $labels->singular_name = 'Notícia';
    $labels->add_new = 'Nova Notícia';
    $labels->add_new_item = 'Nova Notícia';
    $labels->edit_item = 'Editar notícia';
    $labels->new_item = 'Notícia';
    $labels->view_item = 'Ver Notícia';
    $labels->search_items = 'Procurar Notícia';
    $labels->not_found = 'Nenhuma notícia encontrada';
    $labels->not_found_in_trash = 'Nenhuma notícia encontrada na lixeira';
    $labels->all_items = 'Todas as Notícias';
    $labels->menu_name = 'Notícias';
    $labels->name_admin_bar = 'Notícias';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );






//area relacionada sobre o curso - slider 
add_action( 'init', 'create_post_type_banner' );
function create_post_type_banner() {

    $labels = array(
        'name' => _x('Sobre o Curso', 'post type general name'),
        'singular_name' => _x('Sobre o Curso', 'post type singular name'),
        'add_new' => _x('Adicionar', 'sobre-curso'),
        'add_new_item' => __('Adicionar descri&ccedil;&otilde;es'),
        'edit_item' => __('Editar descri&ccedil;&otilde;es'),
        'new_item' => __('Nova descri&ccedil;&atilde;o'),
        'all_items' => __('Todas as descri&ccedil;&otilde;es'),
        'view_item' => __('Ver descri&ccedil;&otilde;es'),
        'search_items' => __('Buscar descri&ccedil;&otilde;es'),
        'not_found' =>  __('Nenhuma descri&ccedil;&atilde;o encontrada'),
        'not_found_in_trash' => __('Nenhuma descri&ccedil;&atilde;o encontrada'),
        'parent_item_colon' => '',
        'menu_name' => 'Sobre o Curso'
    );
    
    register_post_type( 'sobre-curso', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => 'sobre-curso',
        'menu_icon' => get_bloginfo('template_directory') . '/images/ico-sobre-curso.png',  // Icon Path
        'rewrite' => array(
         'slug' => 'sobre-curso',
         'with_front' => false,
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt' )
        )
    );
    
    
}






// definição qde de palavras no excerpt
function new_excerpt_length($length) {
return 200; //numero de palavras
}
add_filter('excerpt_length', 'new_excerpt_length');




// definindo reticencias no final do excerpt
function new_excerpt_more( $excerpt ) {
  return str_replace( '[...]', '...', $excerpt );
}
add_filter( 'wp_trim_excerpt', 'new_excerpt_more' );




// habilitando thumbnails nas páginas e artigos
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails', array('post', 'page'));
}




// paginação
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
     global $paged;
     if(empty($paged)) $paged = 1;
   
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'><ul><li class='disabled'><a>P&aacute;ginas</a></li>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&laquo;</a></li>";
         if($paged > 6 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>1</a></li> <li class='active'><a>...</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='active'><a href='#'>...</a></li> <li><a href='".get_pagenum_link($pages)."'>$pages</a></li>";
         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>Pr&oacute;xima &rsaquo;&rsaquo;</a></li>"; 
         echo "</div>\n";
     }
}



// permitir shortcode no wp
add_filter('widget_text', 'do_shortcode');




// remover barra padrão
show_admin_bar(false);
add_filter('show_admin_bar', '__return_false');

function ciar_widgets_init() {
    register_sidebar( array(
    'id' => 'acesso-ao-curso',
    'name' => __('Acesso ao curso', 'dld_theme'),
    'description' => __('Texto referente ao conte&uacute;do de boas vidas de acesso ao curso.', 'dld_theme'),
    'before_widget' => '',
    'after_widget'  => "",
    'before_title'  => "<div style='display:none'>",
    'after_title'   => "</div>",
    ) );
}
add_action( 'widgets_init', 'ciar_widgets_init' );


?>