<?php 

add_action('admin_init', 'add_opcoes_layout_init');
add_action('admin_menu', 'add_opcoes_layout_add_page'); 

function add_opcoes_layout_init() {
    register_setting('add_opcoes', 'add_opcoes_layout'); 
} 
function add_opcoes_layout_add_page() {
    // add_theme_page( __( 'Opções do tema' ), __( 'Opções do tema' ), 'edit_theme_options', 'opcoes_layout', 'add_opcoes_layout_do_page' );
    add_submenu_page( 'index.php', 'Informações do site', 'Informações do site',
    'edit_theme_options', 'opcoes_layout', 'add_opcoes_layout_do_page');
}
function add_opcoes_layout_do_page() {
    global $select_options;
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 

    // ========================================//
    // INICIO INTERFACE OPCOES 
    // ========================================//     
    ?>
    

    <div class="wrap painel-opcoes-tema">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/func/css/painel.css" TYPE="text/css" MEDIA="screen">
        <h1 class="wp-heading-inline">Informações do site</h1>
    
    <?php //if ( false !== $_REQUEST['settings-updated'] ) : echo '<p>&nbsp;</p><div id="message" class="updated"><p><strong>Pronto!</strong> Tudo salvo.</p></div>'; endif; ?> 

    <div class="section painel">
    
                <form method="post" class="formulario-opcoes" action="options.php">
                <?php settings_fields('add_opcoes'); ?>  
                <?php $options = get_option('add_opcoes_layout'); ?> 

                        <table class="form-table">
                            <tr class="titulo"><td colspan="2"><h3 class="show-inside-tabber">Opção</h3></td></tr>
                            <tr>
                                <th>Desktop <br> <small>(728x90)</small></th>
                                <td>
                                    <textarea name="add_opcoes_layout[nomeOpcao]" id="add_opcoes_layout[nomeOpcao]" cols="50" rows="8"><?php if (!empty($options['nomeOpcao'])) { echo esc_textarea( $options['nomeOpcao'] ); } ?></textarea><br>
                                    <input type="text" name="add_opcoes_layout[nomeOpcao2]" id="add_opcoes_layout[nomeOpcao2]" value="<?php if (!empty($options['nomeOpcao2'])) { esc_attr_e( $options['nomeOpcao2'] ); } ?>" /> <br>
                                    <small>Adicione aqui o seu texto.</small>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td><input type="submit" value="Salvar anúncio" class="button button-primary button-large" /></td>
                                <td></td>
                            </tr>                    
                        </table>

                </form>  

    </div>
 
<?php } 
    // ========================================//
    // FIM INTERFACE OPCOES 
    // ========================================// 
?>
