<?php
$file = dirname(dirname(dirname(__FILE__))) . '/index.php.php';
$plugin_url = plugin_dir_url($file);
// Output something like: http://example.com/wp-content/plugins/your-plugin/
$plugin_path = plugin_dir_path($file);
// Output something like: /home/mysite/www/wp-content/plugins/your-plugin/

return array(
	'title' => __('Agent Branding Option Panel', 'vp_textdomain'),
	'logo' => $plugin_url . 'img/wp_branding.png',
	'menus' => array(
		array(
			'title' => __('Login', 'vp_textdomain'),
			'name' => 'submenu_1',
			'icon' => 'font-awesome:fa-unlock',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('Login Section', 'vp_textdomain'),
					'name' => 'section_1',
					'description' => __('Tweak the look and feel of the login screen', 'vp_textdomain'),
					'fields' => array(
						array(
							'type' => 'upload',
							'name' => 'logo_upload_new',
							'label' => __('Login Logo', 'vp_textdomain'),
							'description' => __('Upload a logo to use in the login screen, size should be 320px/115px', 'vp_textdomain'),
							'default' => $plugin_url . 'img/wp_branding.png',
							),
						array(
							'type' => 'textbox',
							'name' => 'logo_url',
							'label' => __('Logo URL', 'vp_textdomain'),
							'description' => __('Link of the logo in login screen', 'vp_textdomain'),
							'default' => 'http://NiviJah.com',
							),
						array(
							'type' => 'textbox',
							'name' => 'logo_url_alt',
							'label' => __('Logo Alt', 'vp_textdomain'),
							'description' => __('Alt text of the logo image', 'vp_textdomain'),
							'default' => 'Awesome Site Made By Awesome People',
							),
						array(
							'type' => 'upload',
							'name' => 'bg_login_new',
							'label' => __('Login Background', 'vp_textdomain'),
							'description' => __('Upload a background to use in the login screen, best would be to use repeated one', 'vp_textdomain'),
							'default' => $plugin_url . 'img/skulls.png',
							),
						array(
						        'type' => 'radiobutton',
						        'name' => 'login_form_position',
						        'label' => __('Login Form Position', 'vp_textdomain'),
						        'items' => array(
						            array(
						                'value' => 'login_form_position_left',
						                'label' => __('Align Left', 'vp_textdomain'),
						            ),
						            array(
						                'value' => 'login_form_position_center',
						                'label' => __('Align Center', 'vp_textdomain'),
						            ),
						            array(
						                'value' => 'login_form_position_right',
						                'label' => __('Align Right', 'vp_textdomain'),
						            ),
						        ),

						    ),



						),
),

),
),
array(
	'title' => __('Admin Tweaks', 'vp_textdomain'),
	'name' => 'submenu_2',
	'icon' => 'font-awesome:fa-bar-chart-o',
	'controls' => array(
		array(
			'type' => 'section',
			'title' => __('Admin Section', 'vp_textdomain'),
			'name' => 'section_2',
			'description' => __('Admin tweaks', 'vp_textdomain'),
			'fields' => array(
				array(
					'type' => 'wpeditor',
					'name' => 'admin_footer_text',
					'label' => __('Admin Footer Text', 'vp_textdomain'),
					'description' => __('Replace the default wordpress text', 'vp_textdomain'),
					'use_external_plugins' => '0',
					'default' => 'Footer Text <a href="http://www.google.com"> And HTML </a>',
					),
				array(
					'type' => 'textbox',
					'name' => 'meta_box_title',
					'label' => __('Title for custom Meta Box', 'vp_textdomain'),
					'description' => __('Add a title for the custom metabox', 'vp_textdomain'),
					'default' => 'Welcome',
					),
				array(
					'type' => 'wpeditor',
					'name' => 'custom_meta_box',
					'label' => __('Custom Meta Box', 'vp_textdomain'),
					'description' => __('Add a custom metabox to the dashboard', 'vp_textdomain'),
					'use_external_plugins' => '1',
					'default' => '',
					),
				array(
					'type' => 'checkbox',
					'name' => 'remove_meta',
					'label' => __('Remove Admin Metaboxes', 'vp_textdomain'),
					'description' => __('Do you want to remove the dashboard metaboxes ?'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),
				array(
					'type' => 'checkbox',
					'name' => 'add_meta_page_creation',
					'label' => __('Add a page creation metabox', 'vp_textdomain'),
					'description' => __('This metabox allows easy creation of new pages in all custom post types'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),
					array(
					'type' => 'checkbox',
					'name' => 'remove_wp_logo',
					'label' => __('Remove WordPress logo from admin bar', 'vp_textdomain'),
					'description' => __('This will remove the WordPress logo from the admin top bar'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),
					array(
					'type' => 'checkbox',
					'name' => 'add_svg_support',
					'label' => __('Add SVG support to media upload', 'vp_textdomain'),
					'description' => __('This will enable you to upload and use SVG\'s using the native media uploader'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),
					array(
					'type' => 'checkbox',
					'name' => 'remove_admin_bar',
					'label' => __('Remove Admin Bar', 'vp_textdomain'),
					'description' => __('Removes the WordPress admin bar from front end'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),
					array(
					'type' => 'checkbox',
					'name' => 'enable_perfect_body_class',
					'label' => __('Add the "Perfect Body Class"', 'vp_textdomain'),
					'description' => __('This will add a body class to your website based on different browsers. supports: Opera, firefox, Gecko, Safari, Chrome, NS4, IE with versions. '),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),

					array(
					'type' => 'checkbox',
					'name' => 'remove_nagging',
					'label' => __('Remove Update Notifications', 'vp_textdomain'),
					'description' => __('This will remove the nagging updae notifications for everyone except Admin '),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),


				),
),
),
),

array(
	'title' => __('Color Tweaks', 'vp_textdomain'),
	'name' => 'submenu_3',
	'icon' => 'font-awesome:fa-star-half-o',
	'controls' => array(
		array(
			'type' => 'section',
			'title' => __('Color Tweaks', 'vp_textdomain'),
			'name' => 'section_3',
			'description' => __('Colors all around', 'vp_textdomain'),
			'fields' => array(

				array(
					'type' => 'color',
					'name' => 'menu_bg',
					'label' => __('Menu Background', 'vp_textdomain'),
					'description' => __('Main background color for the admin menu items', 'vp_textdomain'),
					'default' => '#3FB14D',
					'format' => 'hex',
					),
				array(
					'type' => 'color',
					'name' => 'text_color',
					'label' => __('Hover Text Color', 'vp_textdomain'),
					'description' => __('Main color for the text in menu items', 'vp_textdomain'),
					'default' => '#3FB14D',
					'format' => 'hex',
					),

									array(
					'type' => 'checkbox',
					'name' => 'use_slate',
					'label' => __('Use the "Slate" theme', 'vp_textdomain'),
					'description' => __('change the admin theme completely, this will overwrite the previous selected colors'),
					'items' => array(
						array(
							'value' => 'remove',
							'label' => __('Yes', 'vp_textdomain'),
							),
						),
					),


				),
			),
		),
	),

),

);

/**
 *EOF
 */