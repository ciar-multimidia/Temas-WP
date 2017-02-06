<?php get_header(); ?>

<article>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
				<a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
				<table>
					<?php if ( get_field('ong_coordenacao') ) { ?>
						<tr>
							<td>Coordenação atual</td>
							<td><?php the_field('ong_coordenacao'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_publico') ) { ?>
						<tr>
							<td>Público aproximado que atinge por ano</td>
							<td><?php the_field('ong_publico'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_endereco') ) { ?>
						<tr>
							<td>Endereço</td>
							<td><?php the_field('ong_endereco'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_cep') ) { ?>
						<tr>
							<td>CEP</td>
							<td><?php the_field('ong_cep'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_cidade') ) { ?>
						<tr>
							<td>Cidade</td>
							<td><?php the_field('ong_cidade'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_telefone') ) { ?>
						<tr>
							<td>Telefone</td>
							<td><?php the_field('ong_telefone'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_email') ) { ?>
						<tr>
							<td>E-mail</td>
							<td><?php the_field('ong_email'); ?></td>
						</tr>
					<?php } ?>
					<?php if ( get_field('ong_site') ) { ?>
						<tr>
							<td>Site</td>
							<td><a href="http://<?php the_field('ong_site'); ?>" target="blank"><?php the_field('ong_site'); ?></a></td>
						</tr>
					<?php } ?>
				</table>

				<br><br><br>
			

<?php endwhile; ?>

<?php paginacao(); ?>
<?php else : ?>
<?php endif; ?>	
</article>

<?php get_footer(); ?>