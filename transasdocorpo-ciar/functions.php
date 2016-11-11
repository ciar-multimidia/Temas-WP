<?php 

// ========================================//
// POST TYPES
// ========================================// 

require_once(get_template_directory().'/func/post_type_noticias.php' );
require_once(get_template_directory().'/func/post_type_artigos.php' );
require_once(get_template_directory().'/func/post_type_eventos.php' );

require_once(get_template_directory().'/func/post_type_institucional.php' );
require_once(get_template_directory().'/func/post_type_institucional_equipe.php' );

require_once(get_template_directory().'/func/post_type_videos.php' );
require_once(get_template_directory().'/func/post_type_galeria.php' );
require_once(get_template_directory().'/func/post_type_duvidas.php' );

require_once(get_template_directory().'/func/post_type_oferecemos.php' );
require_once(get_template_directory().'/func/post_type_oferecemos_producoes.php' );
require_once(get_template_directory().'/func/post_type_oferecemos_pesquisas.php' );
require_once(get_template_directory().'/func/post_type_oferecemos_publicacoes.php' );
require_once(get_template_directory().'/func/post_type_oferecemos_informativos.php' );
require_once(get_template_directory().'/func/post_type_oferecemos_filmes.php' );


// ========================================//
// OUTRAS FUNCOES
// ========================================// 
require_once(get_template_directory().'/func/opcoes_layout.php' );
require_once(get_template_directory().'/func/scripts.php' );
require_once(get_template_directory().'/func/paginacao.php' );
require_once(get_template_directory().'/func/shortcodes.php' );

// require_once(get_template_directory().'/func/campos_personalizados.php' );


// ========================================//
// REMOVER E ADICIONAR ITENS MENU LATERAL
// ========================================// 
function manipula_menus(){
  // remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  // remove_menu_page( 'edit.php?post_type=acf' );  // Advance custom fields 
  remove_menu_page( 'wpcf7' );   // Contact Form 7 


  $customize_url = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER['REQUEST_URI'] ) ), 'customize.php' );
  remove_submenu_page('themes.php',$customize_url);
  remove_submenu_page('themes.php','customize.php'); 
  remove_submenu_page('themes.php','nav-menus.php'); 
  remove_submenu_page('themes.php','theme-editor.php'); 


  remove_submenu_page('options-general.php','rs-advanced-search'); 


  // adicionar submenus a: oferecemos
  add_submenu_page( 'edit.php?post_type=oferecemos', 'Produções', 'Produções',
    'manage_options', 'edit.php?post_type=producoes');
  add_submenu_page( 'edit.php?post_type=oferecemos', 'Pesquisas', 'Pesquisas',
    'manage_options', 'edit.php?post_type=pesquisas');
  add_submenu_page( 'edit.php?post_type=oferecemos', 'Publicações', 'Publicações',
    'manage_options', 'edit.php?post_type=publicacoes');
  add_submenu_page( 'edit.php?post_type=oferecemos', 'Informativos', 'Informativos',
    'manage_options', 'edit.php?post_type=informativos');
  add_submenu_page( 'edit.php?post_type=oferecemos', 'Filmes', 'Filmes',
    'manage_options', 'edit.php?post_type=filmes');

  // adicionar submenu a: institucional
  add_submenu_page( 'edit.php?post_type=institucional', 'Equipe', 'Equipe',
    'manage_options', 'edit.php?post_type=equipe');
}
add_action( 'admin_menu', 'manipula_menus', 999 );



// ========================================//
// EDITAR NOMES MENU LATERAL
// ========================================//
// function edit_admin_menus() {
//     global $menu;
//     global $submenu;
    
//     $menu[60][0] = 'Layout'; 
//     $submenu['themes.php'][5][0] = 'Escolher tema';
     
// }
// add_action( 'admin_menu', 'edit_admin_menus', 999 );



// ========================================//
// REMOVER ICONES DE BARRA ADMIN
// ========================================//
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');       
    $wp_admin_bar->remove_menu('about');         
    $wp_admin_bar->remove_menu('wporg');         
    $wp_admin_bar->remove_menu('documentation'); 
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');      
    // $wp_admin_bar->remove_menu('site-name');  
    $wp_admin_bar->remove_menu('view-site');     
    // $wp_admin_bar->remove_menu('updates');       
    $wp_admin_bar->remove_menu('comments');   
    $wp_admin_bar->remove_menu('new-content');   
    $wp_admin_bar->remove_menu('w3tc');          
    $wp_admin_bar->remove_menu('jetpack');       
    // $wp_admin_bar->remove_menu('my-account'); 
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render', 999 );


// ========================================//
// MUDAR ICONE DE MENU 
// ========================================//
function replace_admin_menu_icons_css() {
    ?>
    <style>
       #adminmenu .dashicons-admin-comments:before {content: "\f125";}
       #adminmenu .dashicons-admin-post:before {content: "\f227";}
       /*#adminmenu .dashicons-admin-appearance:before {content: "\f116";}*/
       /*#adminmenu #toplevel_page_jetpack {display: none !important;}*/

       #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {width: 190px;}
       #wpcontent, #wpfooter {margin-left: 190px;}
       #adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {min-width: 190px;}
       #adminmenu .wp-submenu {left: 190px;}

       /*customizando colunas */
       .manage-column.column-fotogaleria {width: 150px}
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
// LARGURA COLUNA PRINCIPAL
// ========================================//
if ( ! isset( $content_width ) ) {
    $content_width = 940;
}


// ========================================//
// GALERIA WP
// ========================================//
// add_filter( 'gallery_style', 'my_gallery_style', 99 );
// function my_gallery_style() {
//   return "<div class='galeria-foto'></div>";
// }
// add_filter( 'use_default_gallery_style', '__return_false' );

// add_filter('post_gallery','customFormatGallery',10,2);
// function customFormatGallery($string,$attr){
//     $output = "<div class=\"galeria\">";
//     $posts = get_posts(array('include' => $attr['ids'],'post_type' => 'attachment'));

//     foreach($posts as $imagePost){
//         $output .= "<a href='".wp_get_attachment_image_src($imagePost->ID, 'large')[0]."' rel='galeria'><img src='".wp_get_attachment_image_src($imagePost->ID)[0]."'></a>";
//     }

//     $output .= "</div>";
//     return $output;
// }

remove_shortcode( "gallery" );
add_shortcode( "gallery" , "my_own_gallary" );
function my_own_gallary( $attr ) {
global $post;
static $instance = 0;
$instance++;
$output = apply_filters('post_gallery', '', $attr);
if ( $output != '' ) {
    return $output;
}
if ( isset( $attr['orderby'] ) ) {
    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
    if ( !$attr['orderby'] )
        unset( $attr['orderby'] );
}
extract(shortcode_atts(array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post->ID,
    'itemtag'    => 'dl',
    'icontag'    => 'dt',
    'captiontag' => 'dd',
    'columns'    => 3,
    'size'       => 'thumbnail',
    'include'    => '',
    'exclude'    => ''
), $attr));
$id = intval($id);
if ( 'RAND' == $order ) {
    $orderby = 'none';
 }
if ( !empty($include) ) {
$include = preg_replace( '/[^0-9,]+/', '', $include );
$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
        $attachments[$val->ID] = $_attachments[$key];
    }
} elseif ( !empty($exclude) ) {
    $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
} else {
    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
}
if ( empty($attachments) ) {
    return '';
}
if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment )
        $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
    return $output;
}
$itemtag = tag_escape($itemtag);
$captiontag = tag_escape($captiontag);
$columns = intval($columns);
$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
$float = is_rtl() ? 'right' : 'left';
$selector = "gallery-".$instance;
$gallery_style = $gallery_div = '';
if ( apply_filters( 'use_default_gallery_style', true ) )
    // $gallery_style = "
    // <style type='text/css'>
    //     #".$selector." .gallery-item {
    //         width: ".$itemwidth."%;
    //     }
    // </style>";
$size_class = sanitize_html_class( $size );
$gallery_div = "<div id='$selector' class='galeria galleryid-".$id." gallery-columns-".$columns." gallery-size-".$size_class."'>";
$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );
$i = 0;
foreach ( $attachments as $id => $attachment ) {
// $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
// $output .= "<".$itemtag." class='gallery-item'>";
// $output .= "
//         <".$icontag." class='gallery-icon'>
//             $link
//         </".$icontag.">";
$output .= "".wp_get_attachment_link($id, $size, false, $text)."";        
/* added the <dd> here to fix validation error */
    // if ( $captiontag && trim($attachment->post_excerpt) ) {
    //     $output .= "
    //         <".$captiontag." class='wp-caption-text gallery-caption'>
    //         " . wptexturize($attachment->post_excerpt) . "
    //         </".$captiontag.">";
    // } else {
    //     $output .= "
    //         <".$captiontag." class='wp-caption-text gallery-caption' style='display:none;'></".$captiontag.">";
    // }
    // $output .= "</".$itemtag.">";
    if ( $columns > 0 && ++$i % $columns == 0 )
        $output .= '';
}

$output .= "
        <div style='clear:both;'></div>
    </div>\n";

return $output;
}

// ========================================//
// MENSAGEM SUPORTE / REMOVE WIDGETS DA DASHBOARD
// ========================================//
// add_action('wp_dashboard_setup', 'dashboard_custom_painel');
// function dashboard_custom_painel() {
//   global $wp_meta_boxes;
//   wp_add_dashboard_widget('custom_help_widget', 'Contato', 'dashboard_custom_painel_texto');
// }

// function dashboard_custom_painel_texto() {
//   echo '
    
//   ';
// }

// Remove dashboard widgets
function remove_dashboard_meta() {
  // if ( ! current_user_can( 'manage_options' ) ) {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
  // }
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 

?>