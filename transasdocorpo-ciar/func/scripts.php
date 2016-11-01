<?php 

// scripts que vao no topo
function load_scripts_top() { ?>
	
<?php }
add_action( 'wp_head', 'load_scripts_top' );


// scripts em geral (vao no rodape)
function load_scripts(){  

		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-core');

		wp_register_script( 'moment', get_template_directory_uri() . '/js/moment.js');
		wp_enqueue_script( 'moment' ); 

} 
add_action( 'wp_footer', 'load_scripts', 1 );


// scripts no rodape
function load_scripts_bottom() { ?>


<?php }
add_action( 'wp_footer', 'load_scripts_bottom' );

?>