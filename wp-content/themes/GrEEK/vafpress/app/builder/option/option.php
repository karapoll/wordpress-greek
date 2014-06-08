<?php

// Set Image Path
$imgpath = get_template_directory_uri().'/images/';
$vafpresspath = get_template_directory_uri().'/vafpress/public/img/';

// Start Options
return array(
	'title' => __('Theme Options', 'textdomain_euclid'),
	'page' => __('Options Menu', 'textdomain_euclid'),
	'logo' => '',
	'menus' => array(
	
	
	
			/* =============== Menu - General Settings ====================== */
			array(
			'title' => __('General Settings', 'textdomain_euclid'),
			'name' => 'menu_1',
			'icon' => 'font-awesome:icon-gears',
			'controls' => array(
			
				// Start Color Scheme
				array(
					'type' => 'select',
					'name' => 'color_scheme',
					'label' => __('Select Color Scheme', 'textdomain_euclid'),
					'items' => array(
						array(
							'value' => 'red',
							'label' => __('Red', 'textdomain_euclid'),
						),
						array(
							'value' => 'blue',
							'label' => __('Blue', 'textdomain_euclid'),
						),
						array(
							'value' => 'orange',
							'label' => __('Orange', 'textdomain_euclid'),
						),
						array(
							'value' => 'purple',
							'label' => __('Purple', 'textdomain_euclid'),
						),
						array(
							'value' => 'green',
							'label' => __('Green', 'textdomain_euclid'),
						),
						array(
							'value' => 'yellow',
							'label' => __('Yellow', 'textdomain_euclid'),
						),
					),
					'default' => array(
						'blue',
					),
					'validation' => 'required',
				),
				// End Color Scheme
				
				// Start Logo Upload
					array(
						'type' => 'upload',
						'name' => 'logo',
						'label' => __('Upload Theme Logo', 'textdomain_euclid'),
						'description' => __('Upload Your Theme Logo', 'textdomain_euclid'),
						'default' => $imgpath.'logo.png',
					),
				// End Logo Upload
				
				// Start Small Logo Upload
					array(
						'type' => 'upload',
						'name' => 'logo_small',
						'label' => __('Upload Small Logo', 'textdomain_euclid'),
						'description' => __('Upload a small logo that will appear at the bottom', 'textdomain_euclid'),
						'default' => $imgpath.'footer-logo.png',
					),
				// End Small Logo Upload
				
				// Start Footer Copyright
					array(
						'type' => 'textarea',
						'name' => 'copyright',
						'label' => __('Copyright Text', 'textdomain_euclid'),
						'description' => __('Set your copyright notice', 'textdomain_euclid'),
						'default' => 'Copyrigh &copy; 2013 Euclid. All Rights Reserved.',
					),
				// End Footer Copyright
				
				// Enable Pagination
					array(
						'type' => 'toggle',
						'name' => 'pagination',
						'label' => __('Enable pagination', 'textdomain_euclid'),
						'description' => __('Do you want to enable the pagination? or use wordpress default pagination?', 'textdomain_euclid'),
						'default' => '1',
					),
					// Enable Pagination

						)),
			/* =============== Menu - General Settings ====================== */
			
			
			
			
			
			/* =============== Menu - Slider Manager ====================== */
				array(
				'title' => __('Slider Manager', 'textdomain_euclid'),
				'name' => 'menu_3',
				'icon' => 'font-awesome:icon-tasks',
				'controls' => array(
						
					// Enable Slider
					array(
						'type' => 'toggle',
						'name' => 'enableslider',
						'label' => __('Enable Slider', 'textdomain_euclid'),
						'description' => __('Turn do you want to enable the slider?', 'textdomain_euclid'),
						'default' => '0',
					),
					// Enable Slider
				
				
					// Select Slider Category
						array(
						'type' => 'select',
						'name' => 'slider_cat',
						'label' => __('Slider Category', 'textdomain_euclid'),
						'description' => __('Select the category for your slider, all posts from that category will be the slider.', 'textdomain_euclid'),
						'items' => array(
							'data' => array(
										array(
											'source' => 'function',
											'value' => 'vp_get_categories',
											),
										),
									),
						'validation' => 'required',
					),
					// Select Slider Category
					
					)),
			/* =============== Menu - Slider Manager ====================== */		


	)
);

/**
 *EOF
 */