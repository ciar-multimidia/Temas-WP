<?php 

// ========================================//
// POST TYPES
// ========================================// 

require_once(get_template_directory().'/func/post_type_institucional.php' );
require_once(get_template_directory().'/func/post_type_institucional_equipe.php' );

require_once(get_template_directory().'/func/post_type_biblioteca.php' );
require_once(get_template_directory().'/func/post_type_biblioteca_artigos.php' );
require_once(get_template_directory().'/func/post_type_biblioteca_informativos.php' );
require_once(get_template_directory().'/func/post_type_biblioteca_publicacoes.php' );

require_once(get_template_directory().'/func/post_type_noticias.php' );
require_once(get_template_directory().'/func/post_type_noticias_eventos.php' );

require_once(get_template_directory().'/func/post_type_acoes.php' );
require_once(get_template_directory().'/func/post_type_acoes_producoes.php' );
require_once(get_template_directory().'/func/post_type_acoes_pesquisas.php' );

require_once(get_template_directory().'/func/post_type_multimidia.php' );
require_once(get_template_directory().'/func/post_type_ocupamadalena.php' );
require_once(get_template_directory().'/func/post_type_duvidas.php' );


// ========================================//
// OUTRAS FUNCOES
// ========================================// 
require_once(get_template_directory().'/func/opcoes_layout.php' );
require_once(get_template_directory().'/func/scripts.php' );
require_once(get_template_directory().'/func/paginacao.php' );
require_once(get_template_directory().'/func/shortcodes.php' );
require_once(get_template_directory().'/func/widgets_dashboard.php' );

// require_once(get_template_directory().'/func/campos_personalizados.php' );


// ========================================//
// REMOVER E ADICIONAR ITENS MENU LATERAL
// ========================================// 
function manipula_menus(){

  $user_id = get_current_user_id();
  if ($user_id !== 1) {
    // remove_menu_page( 'index.php' );
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'upload.php' );
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'plugins.php' );
    // remove_menu_page( 'users.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'link-manager.php' );
    remove_menu_page( 'options-general.php' );
    remove_menu_page( 'edit.php?post_type=acf' );
    remove_menu_page( 'wpcf7' );

    $customize_url = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), 'customize.php' );
    remove_submenu_page('themes.php',$customize_url);
    remove_submenu_page('themes.php','customize.php'); 
    remove_submenu_page('themes.php','nav-menus.php'); 
    remove_submenu_page('themes.php','theme-editor.php'); 
    remove_submenu_page('options-general.php','rs-advanced-search'); 
  }


  // adicionar/remover submenus a: acoes
  remove_submenu_page('edit.php?post_type=acoes','post-new.php?post_type=acoes');
  add_submenu_page( 'edit.php?post_type=acoes', 'Produções', 'Produções',
    'manage_options', 'edit.php?post_type=producoes');
  add_submenu_page( 'edit.php?post_type=acoes', 'Pesquisas', 'Pesquisas',
    'manage_options', 'edit.php?post_type=pesquisas');
  add_submenu_page( 'edit.php?post_type=acoes', 'Responder dúvida', 'Responder dúvida',
    'manage_options', 'edit.php?post_type=askme');

  // adicionar/remover submenus a: biblioteca  
  remove_submenu_page('edit.php?post_type=biblioteca','post-new.php?post_type=biblioteca'); 
  add_submenu_page( 'edit.php?post_type=biblioteca', 'Artigos', 'Artigos',
    'manage_options', 'edit.php?post_type=artigos');
  add_submenu_page( 'edit.php?post_type=biblioteca', 'Publicações', 'Publicações',
    'manage_options', 'edit.php?post_type=publicacoes');
  add_submenu_page( 'edit.php?post_type=biblioteca', 'Informativos', 'Informativos',
    'manage_options', 'edit.php?post_type=informativos');


  // adicionar/remover submenu a: institucional
  remove_submenu_page('edit.php?post_type=institucional','post-new.php?post_type=institucional');
  add_submenu_page( 'edit.php?post_type=institucional', 'Equipe', 'Equipe',
    'manage_options', 'edit.php?post_type=equipe');
  add_submenu_page( 'edit.php?post_type=institucional', 'Links', 'Links',
    'manage_options', 'link-manager.php');


  // adicionar/remover submenu a: noticias
  add_submenu_page( 'edit.php?post_type=noticias', 'Eventos', 'Eventos',
    'manage_options', 'edit.php?post_type=eventos');
  add_submenu_page( 'edit.php?post_type=noticias', 'Adicionar evento', 'Adicionar evento',
    'manage_options', 'post-new.php?post_type=eventos');

}
add_action( 'admin_menu', 'manipula_menus', 999 );



// ========================================//
// EDITAR NOMES MENU LATERAL
// ========================================//
function edit_admin_menus() {
    global $menu;
    global $submenu;
    
    $menu[2][0] = 'Administração'; 
    $submenu['index.php'][0][0] = 'Painel inicial';
    $submenu['index.php'][10][0] = 'Atualizações do sistema';
     
}
add_action( 'admin_menu', 'edit_admin_menus', 999 );


// ========================================//
// REMOVER ICONES DE BARRA ADMIN
// ========================================//
function my_admin_bar_render() {
    global $wp_admin_bar;

    $user_id = get_current_user_id();
    if ($user_id !== 1) {
      $wp_admin_bar->remove_menu('wp-logo');       
      $wp_admin_bar->remove_menu('about');         
      $wp_admin_bar->remove_menu('wporg');         
      $wp_admin_bar->remove_menu('documentation'); 
      $wp_admin_bar->remove_menu('support-forums');
      $wp_admin_bar->remove_menu('feedback');      
      // $wp_admin_bar->remove_menu('site-name');  
      // $wp_admin_bar->remove_menu('view-site');     
      // $wp_admin_bar->remove_menu('updates');       
      $wp_admin_bar->remove_menu('comments');   
      $wp_admin_bar->remove_menu('customize');   
      $wp_admin_bar->remove_menu('new-content');   
      $wp_admin_bar->remove_menu('w3tc');          
      // $wp_admin_bar->remove_menu('jetpack');       
      // $wp_admin_bar->remove_menu('my-account'); 
    }
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render', 999 );


// ========================================//
// MUDAR ICONE DE MENU 
// ========================================//
function replace_admin_menu_icons_css() {
    ?>
    <style>
       #adminmenu .dashicons-dashboard:before {content: "\f107";}
       #adminmenu .dashicons-admin-comments:before {content: "\f125";}
       #adminmenu .dashicons-admin-post:before {content: "\f227";}
       #adminmenu .dashicons-admin-users:before {content: "\f307";}

       .wp-admin #wpadminbar #wp-admin-bar-site-name > .ab-item:before {content: "\f472";}

       #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {width: 210px;}
       #wpcontent, #wpfooter {margin-left: 210px;}
       #adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {min-width: 210px;}
       #adminmenu .wp-submenu {left: 210px;}

       /*customizando colunas */
       .manage-column.column-fotogaleria {width: 150px}

       /*remover painel welcome*/
       #welcome-panel.welcome-panel, label[for=wp_welcome_panel-hide] {display: none;}
    </style>
    <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );



// ========================================//
// THUMB
// ========================================//
add_theme_support( 'post-thumbnails' ); 



// ========================================//
// HABILITAR LINKS
// ========================================//
add_filter( 'pre_option_link_manager_enabled', '__return_true' );



// ========================================//
// SEGURANCA
// ========================================//
function remove_wp_versao () {
    return '';
}
add_filter ( 'the_generator', 'remove_wp_versao' );


function scripts_remove_versao( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'scripts_remove_versao', 9999 );
add_filter( 'script_loader_src', 'scripts_remove_versao', 9999 );


// ========================================//
// MELHORIA NA NAVEGACAO - TITLE DA PAGINA NO PAINEL
// ========================================//
add_filter('admin_title', 'my_admin_title', 10, 2);
function my_admin_title($admin_title, $title) {
    return $title.' &bull; '.get_bloginfo('name');
}



// ========================================//
// GALERIA WP // referencia: http://wordpress.stackexchange.com/questions/115368/overide-gallery-default-link-to-settings/169491#169491
// ========================================//
add_filter( 'post_gallery', 'galeria_custom', 10, 2 );
function galeria_custom( $output, $attr ) {
    $post = get_post();

    static $instance = 0;
    $instance++;

    // override default link settings
    if ( empty(  $attr['link'] ) ) {
        $attr['link'] = 'none'; // set your default value here
    }

    if ( !empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post ? $post->ID : 0,
        'itemtag'    => 'dl',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'post_type' => 'attachment',
        'exclude'    => ''
    ), $attr, 'gallery'));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $columns = intval($columns);
    $selector = "postgaleria-{$instance}";

    $gallery_style = $gallery_div = '';
    if ( apply_filters( 'use_default_gallery_style', true ) )
        $gallery_style = "";
    $size_class = sanitize_html_class( $size );

    $gallery_div = "<div id='$selector' class='galeria galeria-{$id} grid-{$columns}' data-colunas='{$columns}'>\n\n<div class='linha'>";
    $output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

    $i = 0;
    foreach ( $attachments as $id => $attachment ) {
        $imagemfull = wp_get_attachment_image_src($id, 'full', false, false);
        $imagemtmedium = wp_get_attachment_image_src($id, 'medium', false, false);

        

        $output .= "<div class='galeria-item'>\n";
            $output .= "<div class='galeria-imagem'>\n<a href='".$imagemfull[0]."' class='fancyitem' rel='postgaleria-".$instance."' title='".wptexturize($attachment->post_excerpt)."'><img src='".$imagemtmedium[0]."' alt='".wptexturize($attachment->post_excerpt)."'></a>\n</div>";
        $output .= "\n</div>\n\n\n";


       if ( $columns > 0 && ++$i % $columns == 0) {$output .= "</div>\n<div class='linha'>";}
            
    }

    $output .= "</div>\n</div>\n";

    return $output;
}


// ========================================//
// DASHBOARD
// ========================================//
// add_action('wp_dashboard_setup', 'dashboard_custom_painel2');
// function dashboard_custom_painel2() {
//   global $wp_meta_boxes;
//   $user_id = get_current_user_id();
//   if ($user_id == 1) { wp_add_dashboard_widget('custom_help_widget2', 'Área admin', 'dashboard_custom_painel_texto2'); }
// }

// function dashboard_custom_painel_texto2() {
//   $user_id = get_current_user_id();
//   if ($user_id == 1) { echo '
//     <p>Qualquer dúvida entre em contato conosco pelo e-mail <a href="mailto:multimidia@ciar.ufg.br">multimidia@ciar.ufg.br</a>. Tratar com Ana Cador ou Victor Godoi.</p>
//   '; }
// }



// Remove dashboard widgets
function remove_dashboard_meta() {
  $user_id = get_current_user_id();
  if ($user_id !== 1) {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
  }
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 

// remover welcome painel
add_action( 'load-index.php', 'hide_welcome_panel' );
function hide_welcome_panel() {
    $user_id = get_current_user_id();
    if ( 0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) )
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
}


// mensagem rodape admin
function remove_footer_admin () {
  echo 'Projetado por <a href="http://ciar.ufg.br">Ciar UFG</a> através da plataforma <a href="http://www.wordpress.org" target="_blank">WordPress</a>.';
}
add_filter('admin_footer_text', 'remove_footer_admin');


?>