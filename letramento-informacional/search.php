<?php
/*
Template Name: Página de Notícias
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
			    <h2 class="clearfix">
					<span><?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e
					(''); echo $count . ' '; _e
					('resultados para '); _e
					('<strong>&#8220;'); echo $key; _e('&#8221;</strong>');
					wp_reset_query(); ?></span>
			        <?php include("inc-busca.php"); ?>
			    </h2>


					<div class="col-maior">

						<?php if (have_posts()) : ?>
						<?php query_posts($query_string.'&posts_per_page=6'); while (have_posts()) : the_post(); ?>
						
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
					   <?php else : ?>
					   <?php endif; ?>
			           <?php pagination();?>


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
