<?php
if( function_exists('acf_add_local_field_group') ):


acf_add_local_field_group(array(
	'key' => 'group_5c53092a24acf',
	'title' => 'Carousel-Slider',
	'fields' => array(
		array(
			'key' => 'field_5c3efe4b07874',
			'label' => 'Slider-Bilder',
			'name' => 'slider-images',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => 1165,
			'min_height' => 415,
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, png',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
 ?>
