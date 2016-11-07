<?php 

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
	    $andrew_query = new  WP_Query( $args );
	    while ( $andrew_query->have_posts() ) : $andrew_query->the_post();
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

    $output .= '</div>';

    return $output;
}
add_shortcode('mostra-equipe','shortcode_mostra_equipe');

?>
