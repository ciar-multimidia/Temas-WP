<?php
/*
Template Name: Página de Acesso ao Curso
*/
?>

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
  

                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <article>
                            <header>
                                <h2><center><?php the_title(''); ?></center></h2>
                            </header>

                            <div class="conteudo-noticia">
                                <p>&nbsp;</p>
                                <div style="width:550px; text-align: justify;"><?php the_content(''); ?></div>
                            </div>
                        </article>

                       <?php endwhile; ?>
                       <?php else : ?>
                       <?php endif; ?>

                    </div>
                    <!-- fim col-maior -->


                </section>
            </div>

</section>
<!-- fim área util do site -->

<?php get_footer(); ?>