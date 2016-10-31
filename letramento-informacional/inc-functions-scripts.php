<?php
define("THEME_DIR", get_template_directory_uri());  
/*--- REMOVE GENERATOR META TAG ---*/  
remove_action('wp_head', 'wp_generator'); 

// habilitando jQuery próprio
function afc_load_jquery_last(){  
   // desabilitar jquery padrão wp  
 	  wp_deregister_script( 'jquery' );  
   // registrando jquery proprio do tema
	   wp_register_script( 'jquery-last', get_template_directory_uri() . '/js/jquery.js' );
   // For either a plugin or a theme, you can then enqueue the script: 
	   wp_enqueue_script( 'jquery-last' ); 
} 
add_action( 'wp_enqueue_scripts', 'afc_load_jquery_last', 1 );


function afc_load_scripts(){  
   // habilitando bubble tip
	   wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', '1' );
	   wp_enqueue_script( 'bootstrap' ); 

   // habilitando bubble tip
	   wp_register_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', '2' );
	   wp_enqueue_script( 'bxslider' );

   // habilitando bubble tip
	   wp_register_script( 'scripts-top', get_template_directory_uri() . '/js/scripts-top.js', '3' );
	   wp_enqueue_script( 'scripts-top' ); 	   
   
   //habilitando scripts definidos
	   wp_register_script( 'jquery.easing.1.3', get_template_directory_uri() . '/js/jquery.easing.1.3.js', '4' );
	   wp_enqueue_script( 'jquery.easing.1.3' ); 
} 
add_action( 'wp_enqueue_scripts', 'afc_load_scripts', 2 );

?>