		<div class="clearfix"></div>
    <h3>Últimas notícias</h3>
		<?php /* ?><div class="palavras-chave clearfix">
                <h4>Palavras-chave</h4>
                <ul id="tags-list">
                    <?php
                        $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC', 'number'=>20) );
                        foreach ( (array) $tags as $tag ) {
                        echo '<li><a href="' . get_tag_link ($tag->term_id) . '">' . $tag->name . '</a></li>';
                        }
                    ?>
                </ul>
     </div><!-- fim palavras-chave --><?php */ ?>

            <?php $lastposts = get_posts('numberposts=6&offset=0');
            foreach($lastposts as $post) : setup_postdata($post);?>
                <div class="ultima-noticia">
                    <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">
                        <h3><?php the_title(''); ?></h3>
                        <?php /* ?><p><?php echo substr(get_the_excerpt(), 0,130); ?> [...] (Leia mais)</p><?php */ ?>
                    </a>
                </div>
            <?php endforeach; ?>

            <!-- <p>&nbsp;</p>

            <a href="<?php bloginfo('url'); ?>/noticias" class="btn btn-small btn-primary">Todas as not&iacute;cias</a> -->
