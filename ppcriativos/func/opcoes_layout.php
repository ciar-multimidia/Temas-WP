<?php 

add_action('admin_init', 'reg_opcoes_tema_init');
add_action('admin_menu', 'reg_opcoes_tema_add_page'); 


function reg_opcoes_tema_init() {
    register_setting('opcoes_tema', 'reg_opcoes_tema'); 
} 

function reg_opcoes_tema_add_page() {
    add_theme_page( __( 'Página inicial' ), __( 'Página inicial' ), 'edit_theme_options', 'opcoes_layout', 'reg_opcoes_tema_do_page' );
}

function reg_opcoes_tema_do_page() {
    global $select_options;
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 

    // ========================================//
    // INICIO INTERFACE OPCOES 
    // ========================================// 
    ?>
    
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/func/css/painel.css" TYPE="text/css" MEDIA="screen">

        <div class="wrap painel-opcoes-tema">

        <h1>Pagina inicial</h1>
        
        <?php if ( false !== $_REQUEST['settings-updated'] ) : echo '<p>&nbsp;</p><div id="message" class="updated"><p><strong>Pronto!</strong> Tudo salvo.</p></div>'; endif; ?> 

        <div class="section painel">
        
        <form method="post" class="formulario-opcoes" action="options.php">
        <?php settings_fields('opcoes_tema'); ?>  
        <?php $options = get_option('reg_opcoes_tema'); ?> 


                    <table class="form-table">
                            <tr class="titulo"><td colspan="2"><h3 class="show-inside-tabber">Opção</h3></td></tr>
                            <tr>
                                <th>Inserir opção</th>
                                <td>
                                    <input type="text" name="reg_opcoes_tema[nomeOpcao]" id="reg_opcoes_tema[nomeOpcao]" value="<?php if (!empty($options['nomeOpcao'])) { esc_attr_e( $options['nomeOpcao'] ); } ?>" /><br>
                                    <?php /* ?><textarea name="afc_opcoes_ads_tema[nomeOpcao]" id="afc_opcoes_ads_tema[nomeOpcao]" cols="50" rows="8"><?php if (!empty($options['nomeOpcao'])) { echo esc_textarea( $options['nomeOpcao'] ); } ?></textarea><?php */ ?>
                                    <small>Descrição</small>
                                </td>
                            </tr>
                    </table>

                    <input type="submit" value="Salvar opções" class="button button-primary button-large" />


        </div>
 
    <?php } 
    // ========================================//
    // FIM INTERFACE OPCOES 
    // ========================================// 

?>





