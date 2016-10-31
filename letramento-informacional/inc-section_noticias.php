<div class="sessao-site" id="section-noticias">
	<section>
    <h2 class="clearfix">
    	Not&iacute;cias 
        <?php include("inc-busca.php"); ?>
    </h2>


		<div class="col-maior">

          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
          <?php query_posts("showposts=1&paged=$paged"); ?> 

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
			
			<article class="apresentacao-noticia">
				<header>
					<a href="<?php the_permalink(''); ?>"><h3><?php the_title(''); ?></h3></a>
					Em <?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>.
				</header>

				<section class="conteudo-noticia">
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

				</section>
			</article><!-- fim apresentacao-noticia -->

           <?php endwhile; ?>
           <?php else : ?>
           <?php endif; ?>

           <!-- <a href="<?php bloginfo('url'); ?>/noticias" class="btn btn-mini">ver todas as not&iacute;cias</a> -->

    	</div>
    	<!-- fim col-maior -->


    	<aside class="col-menor">
            <?php get_sidebar(); ?>
    	</aside>
    	<!-- fim col-menor -->


    </section>
</div>