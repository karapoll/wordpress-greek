<?php

return array(
	'id'          => 'post_format',
	'types'       => array('post'),
	'title'       => __('Post Format', 'textdomain_euclid'),
	'priority'    => 'high',
	'context'	  => 'side',
	'template'    => array(
				
	array(
		'type' => 'radiobutton',
		'name' => 'format',
		'label' => __('Choose Format', 'textdomain_euclid'),
		'description' => __('', 'textdomain_euclid'),
		'items' => array(
			array(
				'value' => 'standard',
				'label' => __('Standard', 'vp_textdomain'),
			),
			array(
				'value' => 'gallery',
				'label' => __('Image Gallery', 'vp_textdomain'),
			),
			array(
				'value' => 'video',
				'label' => __('Video', 'vp_textdomain'),
			),
				),
			'default' => array( 'standard'),
		),
	),
);

/**
 * EOF
 */