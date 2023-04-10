<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'bakery_cafe_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'bakery-cafe' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'bakery_cafe_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'bakery-cafe' ),
	) );

	Kirki::add_section( 'bakery_cafe_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'bakery-cafe' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_all_headings_typography',
		'section'     => 'bakery_cafe_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'bakery_cafe_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'bakery-cafe' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'bakery-cafe' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'bakery-cafe' ),
		'section'     => 'bakery_cafe_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_body_content_typography',
		'section'     => 'bakery_cafe_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'bakery_cafe_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'bakery-cafe' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'bakery-cafe' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'bakery-cafe' ),
		'section'     => 'bakery_cafe_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'bakery_cafe_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'bakery-cafe' ),
	) );

	// Additional Settings

	Kirki::add_section( 'bakery_cafe_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'bakery-cafe' ),
	    'description'    => esc_html__( 'Scroll To Top', 'bakery-cafe' ),
	    'panel'          => 'bakery_cafe_panel_id',
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'bakery_cafe_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_bakery_cafe',
		'label'       => esc_html__( 'Menus Text Transform', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'bakery-cafe' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'bakery-cafe' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'bakery-cafe' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'bakery-cafe' ),

		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'bakery_cafe_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'bakery_cafe_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'bakery_cafe_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'bakery-cafe' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'bakery-cafe' ),
	    'panel'          => 'bakery_cafe_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_post_heading',
		'section'     => 'bakery_cafe_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'bakery_cafe_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'bakery-cafe' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'bakery-cafe' ),
	    'panel'          => 'bakery_cafe_panel_id',
	    'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_button1_text',
		'section'     => 'bakery_cafe_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 1 Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'bakery-cafe' ),
		'settings' => 'bakery_cafe_register_text',
		'section'  => 'bakery_cafe_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'bakery-cafe' ),
		'settings' => 'bakery_cafe_register_link',
		'section'  => 'bakery_cafe_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_button2_text',
		'section'     => 'bakery_cafe_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 2 Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'bakery-cafe' ),
		'settings' => 'bakery_cafe_login_text',
		'section'  => 'bakery_cafe_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'bakery-cafe' ),
		'settings' => 'bakery_cafe_login_link',
		'section'  => 'bakery_cafe_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_search',
		'section'     => 'bakery_cafe_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_cart',
		'section'     => 'bakery_cafe_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_cart_box_enable',
		'label'       => esc_html__( 'Cart Enable / Disable Button', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_socail_link',
		'section'     => 'bakery_cafe_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'bakery_cafe_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'bakery-cafe' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'bakery-cafe' ),
		'settings'     => 'bakery_cafe_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'bakery-cafe' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'bakery-cafe' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'bakery-cafe' ),
				'description' => esc_html__( 'Add the social icon url here.', 'bakery-cafe' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'bakery_cafe_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'bakery-cafe' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'bakery-cafe' ),
        'panel'          => 'bakery_cafe_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_enable_heading',
		'section'     => 'bakery_cafe_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_slide_title_enable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_slide_text_enable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_slider_heading',
		'section'     => 'bakery_cafe_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'bakery_cafe_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 6,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'bakery_cafe_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'bakery-cafe' ),
		'priority'    => 10,
		'choices'     => bakery_cafe_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_excerpt_number',
		'section'     => 'bakery_cafe_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'bakery_cafe_slide_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_slider_button_heading',
		'section'     => 'bakery_cafe_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'bakery_cafe_slider_button_text',
		'section'  => 'bakery_cafe_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'bakery_cafe_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_blog_slide_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'bakery-cafe' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'bakery-cafe' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'bakery-cafe' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'bakery-cafe' ),

		],
	] );


	// OUR STORY SECTION

	Kirki::add_section( 'bakery_cafe_our_story_section', array(
        'title'          => esc_html__( 'Our Story Settings', 'bakery-cafe' ),
        'description'    => esc_html__( 'You have to select page to show our story section.', 'bakery-cafe' ),
        'panel'          => 'bakery_cafe_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_services_enable_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Story Section', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_our_story_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_our_story_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_section_title_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'bakery_cafe_our_story_section_title',
		'section'  => 'bakery_cafe_our_story_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_image1_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 1', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'bakery_cafe_our_story_image1',
		'section'     => 'bakery_cafe_our_story_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_image2_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 2', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'bakery_cafe_our_story_image2',
		'section'     => 'bakery_cafe_our_story_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_text_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'bakery_cafe_our_story_heading_text',
		'section'  => 'bakery_cafe_our_story_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_page_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'bakery_cafe_our_story',
		'section'     => 'bakery_cafe_our_story_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_our_story_xcerpt_heading',
		'section'     => 'bakery_cafe_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'bakery_cafe_story_excerpt_number',
		'label'       => esc_html__( 'About Us Content Range', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_our_story_section',
		'default'     => 50,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'bakery_cafe_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'bakery-cafe' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'bakery-cafe' ),
        'panel'          => 'bakery_cafe_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_footer_text_heading',
		'section'     => 'bakery_cafe_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'bakery_cafe_footer_text',
		'section'  => 'bakery_cafe_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'bakery_cafe_footer_enable_heading',
		'section'     => 'bakery_cafe_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'bakery-cafe' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'bakery_cafe_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'bakery-cafe' ),
		'section'     => 'bakery_cafe_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'bakery-cafe' ),
			'off' => esc_html__( 'Disable', 'bakery-cafe' ),
		],
	] );
}
