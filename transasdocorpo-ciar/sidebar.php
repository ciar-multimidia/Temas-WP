<?php if ( is_singular('artigos') ) : ?>
	<div class="box">
		<?php if ( get_field('artigo_imagem') ) : ?>
			<img src="<?php echo esc_url(get_field('artigo_imagem')); ?>">
		<?php endif; ?>
		<?php if ( get_field('artigo_autor') ) : ?>
			<label><strong>Autoria:</strong> <?php the_field('artigo_autor'); ?></label>
		<?php endif; ?>
		<?php if ( get_field('artigo_publicacao') ) : ?>
			<label><strong>Data do artigo:</strong> <?php the_field('artigo_publicacao'); ?></label>
		<?php endif; ?>
	</div>
	<?php if ( get_field('artigo_anexo') ) : ?>
		<p align="center"><a href="<?php the_field('artigo_anexo'); ?>" class="btn small"><i class="fa fa-download" aria-hidden="true"></i> Baixar artigo</a></p>
	<?php endif; ?>

<?php elseif ( is_singular('publicacoes') ) : ?>
	<div class="box">
		<?php if ( get_field('publicacao_capa') ) : ?>
			<img src="<?php echo esc_url(get_field('publicacao_capa')); ?>">
		<?php endif; ?>
		<?php if ( get_field('publicacao_editora') ) : ?>
			<label><strong>Editora:</strong> <?php the_field('publicacao_editora'); ?></label>
		<?php endif; ?>
		<?php if ( get_field('publicacao_publico') ) : ?>
			<label><strong>Público:</strong> <?php the_field('publicacao_publico'); ?></label>
		<?php endif; ?>
		<?php if ( get_field('publicacao_valor') ) : ?>
			<label><strong>Valor:</strong> <?php the_field('publicacao_valor'); ?></label>
		<?php endif; ?>
	</div>
	<?php if ( get_field('publicacao_anexo') ) : ?>
		<p align="center"><a href="<?php the_field('publicacao_anexo'); ?>" class="btn small"><i class="fa fa-download" aria-hidden="true"></i> Baixar publicação</a></p>
	<?php endif; ?>
<?php endif; ?>