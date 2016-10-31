<div class="sessao-site" id="section-curso">
	<section>
    <h2>O Curso <span>&raquo; Saiba mais</span></h2>


			<div class="sobre-o-curso">

				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
				<?php query_posts("post_type=sobre-curso&showposts=10&order=ASC"); ?> 

					  <?php if (have_posts()) : ?>
					  <?php while (have_posts()) : the_post(); ?>
					                                  
								  <div class="slide">
							  		<div class="conteudo-sobre-o-curso clearfix">

							  			<h3><?php the_title(); ?></h3>
							  			<div class="texto-sobre-o-curso">
							  				<?php the_content(); ?>
							  			</div>

							  			<div class="imagem-ou-ilustracao">
							  				<?php the_excerpt(); ?>
							  			</div>
							  			
							  			
							  		</div><!-- fim conteudo sobre o curso -->
							  </div><!-- fim slide -->
					                    
					  <?php endwhile; ?>

				<?php else : ?>
				<?php endif; ?>


			</div><!-- fim sobre-o-curso -->



    </section>
</div>