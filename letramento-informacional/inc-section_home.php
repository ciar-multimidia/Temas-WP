<div class="sessao-site" id="section-home">
	<section>

		<h2>Apresenta&ccedil;&atilde;o</h2>
		
		<div class="col-maior">
			
            <p>O curso de Especialização em <b>Processos e Produtos Criativos</b> busca estabelecer um pensamento e aplicação empreendedora dinâmica e centrada na inovação de base criativa e cocriativa, área responsável por grandes mudanças na cultura de pesquisa e desenvolvimento de produtos (P&amp;D) no mundo contemporâneo, bem como na economia mundial. </p>
            <p>Nesse cenário, o curso possui como foco trabalhar ferramentas criativas que possam ser aplicadas em diferentes contextos. Seja em didáticas pedagógicas, práticas sustentáveis; negócios; ambientes; entre outras possibilidades onde a criatividade e a inovação serão diferenciais competitivos e de qualidade nas diversificadas áreas do conhecimento.</p>
            <p>O curso de Processos e Produtos Criativos se propõe a instigar o desenvolvimento de novas estratégias de trabalho, pesquisa e desenvolvimento de produtos que tangenciem aspectos da contemporaneidade, como: a cocriação, a sustentabilidade, a transdisciplinaridade, a economia justa, a sociedade em rede, entre outras características ou fenômenos que possam dinamizar e enriquecer o cotidiano de trabalho dos ingressantes desse curso.</p>
            <p>É importante destacar que esse curso surge dentro de um cenário onde a economia criativa vem se estabelecendo como fonte inteligente de geração de renda e inovação nas sociedades em desenvolvimento. Portanto, compreendê-lo como uma estrutura de construção do conhecimento pautada nas habilidades e competências de cada indivíduo capaz de gerar inovações em suas mais diferentes áreas, é estabelecer uma rede de possibilidades instigantes e que podem transformar e ampliar realidades aparentemente já estabelecidas.  </p>
     

			<!-- <div class="imagem-destaque">
				<a href="http://eadmin.ciar.ufg.br/index.jsp?conteudo=curso&curso=145&tipo=2" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/imagem-destaque.jpg"></a>
				<div class="descricao">Trabalhando com fatores de risco integrando a prevenção no currículo escolar a escola em rede buscando relações o que são drogas, autoridade na família e na escola. (<a href="#section-curso">Saiba mais</a>)</div>
			</div> --><!-- fim imagem destaque -->

            
    	</div>
    	<!-- fim col-maior -->


    	<div class="col-menor"><h3>Últimas notícias</h3>
            <?php $lastposts = get_posts('numberposts=5&offset=0');
            foreach($lastposts as $post) : setup_postdata($post);?>
                <div class="noticia-destaque">
                	<?php /* ?><div class="imagem">
                		 <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php if(has_post_thumbnail()) {
                                the_post_thumbnail(array(260,195));
                                } else {echo "";
                        }?></a>
                	</div><?php */ ?>
                    <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
                        <h3><?php the_title(''); ?></h3>
                        <?php /* ?><p><?php echo substr(get_the_excerpt(), 0,130); ?> [...] (Leia mais)</p><?php */ ?>
                    </a>
                </div>
            <?php endforeach; ?>
    	</div>
    	<!-- fim col-menor -->

	</section>
</div>