<?php

return array(
	'id'          => 'video_embed',
	'types'       => array('post'),
	'title'       => __('Video Embed Code', 'textdomain_euclid'),
	'priority'    => 'low',
	'template'    => array(
				
	array(
		'type' => 'textarea',
		'name' => 'embed_code',
		'label' => __('Insert Code', 'textdomain_euclid'),
		'description' => __('', 'textdomain_euclid'),
		'default' => '',
		),
	),
);

/**
 * EOF
 */