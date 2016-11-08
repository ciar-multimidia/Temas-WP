<?php get_header(); ?>



			<article>
				<h1>index</h1>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem et voluptate adipisci aspernatur provident consectetur, laboriosam, pariatur necessitatibus quod soluta voluptatum vero ea id culpa ut numquam, fugit ipsa incidunt modi illo earum architecto consequatur nesciunt aliquid! Incidunt voluptatem, corporis molestiae, delectus repudiandae id, laudantium dolor veniam debitis laboriosam omnis obcaecati magni in dolores saepe inventore facilis tempore minima voluptas accusantium quae fuga? Eius pariatur nobis corporis ratione nam laboriosam numquam saepe odit repellendus laborum quidem recusandae aliquam alias deserunt, ab, similique nulla hic, doloremque quaerat magni sapiente. Dolores earum incidunt expedita natus fuga, commodi praesentium minus asperiores consectetur eaque, qui molestiae voluptas sint nihil sequi similique doloremque quas dignissimos iusto laborum. Eum dolores distinctio quas minus in tenetur reprehenderit, repellat recusandae pariatur expedita, voluptatem, quos sed ab necessitatibus voluptate. Veniam possimus doloribus, labore porro reiciendis magnam suscipit autem excepturi aspernatur esse nam ipsa, laudantium voluptate cumque similique doloremque. Tempora ratione distinctio minus fuga velit officiis libero enim odio? Praesentium!

		<?php $options = get_option( 'add_opcoes_layout' ); ?> 
		<?php if ($options['nomeOpcao']) { ?>
				<hr>
						<?php echo $options['nomeOpcao'] ?>     
		<?php } ?>

			</article>


<?php get_footer(); ?>