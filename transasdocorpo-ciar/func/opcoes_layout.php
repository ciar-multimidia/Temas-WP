<?php 

add_action('admin_init', 'reg_opcoes_tema_init');
add_action('admin_menu', 'reg_opcoes_tema_add_page'); 


function reg_opcoes_tema_init() {
    register_setting('opcoes_tema', 'reg_opcoes_tema'); 
} 

function reg_opcoes_tema_add_page() {
    add_theme_page( __( 'Página inicial' ), __( 'Página inicial' ), 'edit_theme_options', 'theme_options', 'reg_opcoes_tema_do_page' );
}

function reg_opcoes_tema_do_page() {
    global $select_options;
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 
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
                        <tr class="titulo"><td colspan="2"><h3 class="show-inside-tabber">Topo</h3></td></tr>
                        <tr>
                            <th>Marca ou ilustração</th>
                            <td>
                                <input type="text" name="reg_opcoes_tema[imgTopoBlog]" id="reg_opcoes_tema[imgTopoBlog]" value="<?php if (!empty($options['imgTopoBlog'])) { esc_attr_e( $options['imgTopoBlog'] ); } ?>" /><br>
                                <small>Imagem de topo, ilustração ou marca que aparecerá logo abaixo do menu.
                                <br> Tamanho máximo de 1000px de largura e altura livre.<br>
                                    <small><strong>Ex:</strong> http://meublog.com/meu-topo.jpg</small>
                                </small>
                            </td>
                        </tr>
                </table>
                <table class="form-table">
                        <tr class="titulo"><td colspan="2"><h3 class="show-inside-tabber">Favicon</h3></td></tr>
                        <tr>
                            <th>Favicon</th>
                            <td>
                                <input type="text" name="reg_opcoes_tema[linkFavicon]" id="reg_opcoes_tema[linkFavicon]" value="<?php if (!empty($options['linkFavicon'])) { esc_attr_e( $options['linkFavicon'] ); } ?>" /><br>
                                <small>Ícone favicon do blog (tamanho 32x32px).<br>
                                    <small><strong>Ex:</strong> http://meublog.com/meu-favion.ico</small>
                                </small>
                            </td>
                        </tr>
                        <!-- <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="submit" value="Salvar opções" class="button button-primary button-large" /></td>
                            <td></td>
                        </tr> -->
                </table>

                <input type="submit" value="Salvar opções" class="button button-primary button-large" />


    </div>
 
<?php } 

?>