<?php 

// mostra equipe
function shortcode_mostra_equipe($atts) {
    extract( shortcode_atts( array(
        'type' => 'equipe',
        'perpage' => 100
    ), $atts ) );

    $output = '';

	    $args = array(
	        'post_parent' => $parent,
	        'post_type' => $type,
	        'posts_per_page' => $perpage,
	        'sort_column'   => 'menu_order'
	    );
	    $my_query = new  WP_Query( $args );
	    while ( $my_query->have_posts() ) : $my_query->the_post();
	        $output .= '<div id="membro">';
	        $output .= ''.get_the_title().'';
	        if (get_field('membro_curriculo')) {
		        $output .= '<br>';
		        $output .= '- '.get_field('membro_curriculo').'';
		    }
	        if (get_field('membro_mail')) {
		        $output .= '<br>';
		        $output .= '- '.get_field('membro_mail').'';
		    }
	        if (get_field('membro_lattes')) {
	        	$output .= '<br>';
				$output .= '- <a href="'.get_field('membro_lattes').'">Curriculum Lattes</a>';
	        }
	        $output .= '<hr>';
	        $output .= '</div>';
	    endwhile;
	    wp_reset_query();

    $output .= '';

    return $output;
}
add_shortcode('mostra-equipe','shortcode_mostra_equipe');



// lista de links
function shortcode_mostra_links($atts, $content = null) {
	$links = get_bookmarks( array(
	'orderby' => 'name',
	'order' => 'ASC'
	));

    ob_start();

    echo "<p>";
    foreach ( $links as $link ) {
    	echo '<br><a href="'.$link->link_url.'" target="_blank">';
			echo $link->link_name;
		echo '</a>: ';
			echo $link->link_description;
    }
    echo "</p>";

    $output = ob_get_clean();
    return $output;
}
add_shortcode('mostra-links','shortcode_mostra_links');

?>
