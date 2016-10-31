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

                    <div class="col-maior">    

                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
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
                            </div>
                        </article>

                       <?php endwhile; ?>
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