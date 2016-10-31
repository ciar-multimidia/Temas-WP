<?php include("inc-topo-geral.php"); ?>

    <header class="topo">
        <?php include("inc-barra-brasil.php"); ?>
        <section>
            <a href="<?php bloginfo('url'); ?>" class="logo word-hidden">Curso</a>
            <?php include("inc-menu-interno.php"); ?>
        </section>
    </header>


<!-- inicio area util do site -->
<section class="area-util-site">    


            <div class="sessao-site">
                <section>
                    <h2 class="clearfix">
                        <span>Arquivos</span>
                        <?php include("inc-busca.php"); ?>
                    </h2>

                    <div class="col-maior">    

                        <?php if (have_posts()) : ?>
                        
                        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                        <?php /* If this is a category archive */ if (is_category()) { ?>               
                        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                        <?php /* If this is a search */ } elseif (is_search()) { ?>
                        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        <?php } ?>


                        <?php query_posts($query_string.'&posts_per_page=3'); while (have_posts()) : the_post(); ?>
                        
                        <article class="apresentacao-noticia">
                            <header>
                                <a href="<?php the_permalink(''); ?>"><h3><?php the_title(''); ?></h3></a>
                                Em <?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>. <?php the_tags('Palavras-chave: ',', '); ?>
                            </header>

                            <div class="conteudo-noticia">
                                <div class="imagem-destacada">
                                    <?php if(has_post_thumbnail()) {
                                            the_post_thumbnail(array(700,200));
                                            } else {echo "";
                                    }?>
                                </div>

                                <?php the_content(''); ?>

                                <p>&nbsp;</p>
                                <?php the_tags('Palavras-chave: ',', '); ?>
                                <hr />
                            </div>
                        </article>

                       <?php endwhile; ?>
                       <?php pagination();?>
                       <?php else : ?>
                       <?php endif; ?>

                    </div>
                    <!-- fim col-maior -->

                    <aside class="col-menor">
                        <?php get_sidebar(); ?>
                    </aside>
                    <!-- fim col-menor -->


                </section>
            </div>

</section>
<!-- fim área util do site -->

<?php get_footer(); ?>