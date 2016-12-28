<?php 

// ========================================//
// WIDGETS DE DASHBOARD
// ========================================//
// add_action('wp_dashboard_setup', 'painel_de_duvidas');
// function painel_de_duvidas() {
//   global $wp_meta_boxes;
//   wp_add_dashboard_widget('painel_de_duvidas', 'Painel de dúvidas', 'mostra_painel_de_duvidas');
// }

// function mostra_painel_de_duvidas() {
/*?>
    <div id="dashboard_right_now">
    <ul>
        <li class="post-count">
            <?php
            $type = 'askme';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            
            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=askme&post_status=publish'>";
                echo count($my_query);
                echo " dúvida respondida</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=askme&post_status=publish'>";
                echo count($my_query);
                echo " dúvidas respondidas</a>";
            } ?>
        </li>
        <li class="comment-count">
            <?php
            $args = array(
                'post_type' => $type,
                'post_status' => 'draft',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=askme&post_status=draft'>";
                echo count($my_query);
                echo " dúvida aguardando</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=askme&post_status=draft'>";
                echo count($my_query);
                echo " dúvidas aguardando</a>";
            } ?>
        </li>
    </ul>
    <!-- <a href="edit.php?post_type=askme&post_status=publish" class="button">Ver todas</a> -->
    <a href="edit.php?post_type=askme&post_status=draft" class="button">Responder dúvidas pendentes</a>
    </div>
<?php wp_reset_query();*/
// }


/////////////////////////////////


add_action('wp_dashboard_setup', 'dashwidget_institucional');
function dashwidget_institucional() {
  global $wp_meta_boxes;
  wp_add_dashboard_widget('dashwidget_institucional', 'Institucional', 'dashwidget_institucional_texto');
}

function dashwidget_institucional_texto() {
?>
    <div id="dashboard_right_now">
    <ul>
        <li class="post-count">
            <?php
            $type = 'institucional';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            
            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=institucional&post_status=publish'>";
                echo count($my_query);
                echo " página</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=institucional&post_status=publish'>";
                echo count($my_query);
                echo " páginas</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'equipe';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=equipe&post_status=draft'>";
                echo count($my_query);
                echo " membro de equipe</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=equipe&post_status=draft'>";
                echo count($my_query);
                echo " membros de equipe</a>";
            } ?>
        </li>
        <li class="post-count">
			<a href="link-manager.php">Links cadastrados</a>
        </li>
    </ul>
    </div>
<?php wp_reset_query();
}


/////////////////////////////////


add_action('wp_dashboard_setup', 'dashwidget_biblioteca');
function dashwidget_biblioteca() {
  global $wp_meta_boxes;
  wp_add_dashboard_widget('dashwidget_biblioteca', 'Biblioteca', 'dashwidget_biblioteca_texto');
}

function dashwidget_biblioteca_texto() {
?>
    <div id="dashboard_right_now">
    <ul>
        <li class="post-count">
            <?php
            $type = 'biblioteca';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            
            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=biblioteca&post_status=publish'>";
                echo count($my_query);
                echo " página</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=biblioteca&post_status=publish'>";
                echo count($my_query);
                echo " páginas</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'artigos';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=artigos&post_status=draft'>";
                echo count($my_query);
                echo " artigo</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=artigos&post_status=draft'>";
                echo count($my_query);
                echo " artigos</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'publicacoes';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=publicacoes&post_status=draft'>";
                echo count($my_query);
                echo " publicação</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=publicacoes&post_status=draft'>";
                echo count($my_query);
                echo " publicações</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'informativos';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=informativos&post_status=draft'>";
                echo count($my_query);
                echo " informativo</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=informativos&post_status=draft'>";
                echo count($my_query);
                echo " informativos</a>";
            } ?>
        </li>
    </ul>
    </div>
<?php wp_reset_query();
}


/////////////////////////////////


add_action('wp_dashboard_setup', 'dashwidget_noticiaseventos');
function dashwidget_noticiaseventos() {
  global $wp_meta_boxes;
  wp_add_dashboard_widget('dashwidget_noticiaseventos', 'Notícias & Eventos', 'dashwidget_noticiaseventos_texto');
}

function dashwidget_noticiaseventos_texto() {
?>
    <div id="dashboard_right_now">
    <ul>
        <li class="post-count">
            <?php
            $type = 'noticias';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            
            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=noticias&post_status=publish'>";
                echo count($my_query);
                echo " notícia</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=noticias&post_status=publish'>";
                echo count($my_query);
                echo " notícias</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'eventos';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=eventos&post_status=draft'>";
                echo count($my_query);
                echo " evento</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=eventos&post_status=draft'>";
                echo count($my_query);
                echo " eventos</a>";
            } ?>
        </li>
    </ul>
    </div>
<?php wp_reset_query();
}


/////////////////////////////////


add_action('wp_dashboard_setup', 'dashwidget_acoes');
function dashwidget_acoes() {
  global $wp_meta_boxes;
  wp_add_dashboard_widget('dashwidget_acoes', 'Ações', 'dashwidget_acoes_texto');
}

function dashwidget_acoes_texto() {
?>
    <div id="dashboard_right_now">
    <ul>
        <li class="post-count">
            <?php
            $type = 'acoes';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            
            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=acoes&post_status=publish'>";
                echo count($my_query);
                echo " página</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=acoes&post_status=publish'>";
                echo count($my_query);
                echo " páginas</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'producoes';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=producoes&post_status=draft'>";
                echo count($my_query);
                echo " produção</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=producoes&post_status=draft'>";
                echo count($my_query);
                echo " produções</a>";
            } ?>
        </li>
        <li class="post-count">
            <?php
            $type = 'pesquisas';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo "<a href='edit.php?post_type=pesquisas&post_status=draft'>";
                echo count($my_query);
                echo " pesquisa</a>";
            } ?>

            <?php if(count($my_query) > 1) {
                echo "<a href='edit.php?post_type=pesquisas&post_status=draft'>";
                echo count($my_query);
                echo " pesquisas</a>";
            } ?>
        </li>


        <li class="post-count">
            <?php
            $type = 'askme';
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>
            <a href='edit.php?post_type=askme&post_status=publish'>
            <?php if(count($my_query) == 1) {
                echo count($my_query);
                echo " dúvida";
            } ?>
            <?php if(count($my_query) > 1) {
                echo count($my_query);
                echo " dúvidas";
            } ?>
            <?php

            $args = array(
                'post_type' => $type,
                'post_status' => 'draft',
                'posts_per_page' => -1);

            $my_query = query_posts( $args );
            ?>

            <?php if(count($my_query) == 1) {
                echo " (";
                echo count($my_query);
                echo " aguardando)";
            } ?>

            <?php if(count($my_query) > 1) {
                echo " (";
                echo count($my_query);
                echo " aguardando)";
            } ?>
			
	        </a>
        </li>

	    </ul>

    </div>
<?php wp_reset_query();
}

?>