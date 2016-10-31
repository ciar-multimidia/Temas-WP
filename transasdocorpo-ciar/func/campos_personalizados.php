<?php if(function_exists("register_field_group")) {


// ========================================//
// EVENTOS
// ========================================// 
	register_field_group(array (
		'id' => 'evento_data_inicio',
		'title' => __('Data de início'),
		'fields' => array (
			array (
				'key' => 'group_1',
				// 'label' => __('Label'),
				// 'instructions' => __('Descrição'),
				// 'prepend' => '',
				'name' => 'evento_data_inicio',
				'type' => 'text',
				// 'save_format' => 'url',
				// 'preview_size' => 'medium',
				// 'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'eventos', //post type
					'order_no' => 0,
					'group_no' => 0,				
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	// register_field_group(array (
	// 	'id' => 'afc_desc_SEO',
	// 	'title' => __('Descrição para SEO'),
	// 	'fields' => array (
	// 		array (
	// 			'key' => 'group_1',
	// 			'name' => 'post_descseo',
	// 			'type' => 'text',
	// 			'default_value' => '',
	// 			'placeholder' => 'Digite a descrição aqui',
	// 			'instructions' => __('Máximo 150 caracteres'),
	// 			'prepend' => '',
	// 			'append' => '',
	// 			'formatting' => 'html',
	// 			'maxlength' => '',
	// 		),
	// 	),
	// 	'location' => array (
	// 		array (
	// 			array (
	// 				'param' => 'post_type',
	// 				'operator' => '==',
	// 				'value' => 'post',
	// 				'order_no' => 0,
	// 				'group_no' => 0,
	// 			),
	// 		),
	// 	),
	// 	'options' => array (
	// 		'position' => 'normal',
	// 		'layout' => 'default',
	// 		'hide_on_screen' => array (
	// 		),
	// 	),
	// 	'menu_order' => 0,
	// ));

}
?>