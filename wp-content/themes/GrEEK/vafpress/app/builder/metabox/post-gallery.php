<?php

return array(
	'id'          => 'gallery',
	'types'       => array('post'),
	'title'       => __('Image Gallery', 'textdomain_euclid'),
	'priority'    => 'low',
	'template'    => array(
		array(
			'type'      => 'group',
			'repeating' => true,
			'name'      => 'image_group',
			'title'     => __('Gallery', 'textdomain_euclid'),
			'fields'    => array(
				array(
					'type' => 'upload',
					'name' => 'image',
					'label' => __('Upload Image', 'textdomain_euclid'),
					'description' => __('', 'textdomain_euclid'),
				),
			),
		),
	),
);

/**
 * EOF
 */