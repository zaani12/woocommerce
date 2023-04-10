<?php 

	$panadero_bakery_custom_style = '';

	// Logo Size
	$panadero_bakery_logo_top_padding = get_theme_mod('panadero_bakery_logo_top_padding');
	$panadero_bakery_logo_bottom_padding = get_theme_mod('panadero_bakery_logo_bottom_padding');
	$panadero_bakery_logo_left_padding = get_theme_mod('panadero_bakery_logo_left_padding');
	$panadero_bakery_logo_right_padding = get_theme_mod('panadero_bakery_logo_right_padding');

	if( $panadero_bakery_logo_top_padding != '' || $panadero_bakery_logo_bottom_padding != '' || $panadero_bakery_logo_left_padding != '' || $panadero_bakery_logo_right_padding != ''){
		$panadero_bakery_custom_style .=' .logo {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_logo_top_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_logo_bottom_padding).'px; padding-left: '.esc_attr($panadero_bakery_logo_left_padding).'px; padding-right: '.esc_attr($panadero_bakery_logo_right_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Product section padding
	$panadero_bakery_product_section_padding = get_theme_mod('panadero_bakery_product_section_padding');

	if( $panadero_bakery_product_section_padding != ''){
		$panadero_bakery_custom_style .=' #product-section {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_product_section_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_product_section_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Site Title Font Size
	$panadero_bakery_site_title_font_size = get_theme_mod('panadero_bakery_site_title_font_size');
	if( $panadero_bakery_site_title_font_size != ''){
		$panadero_bakery_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$panadero_bakery_custom_style .=' font-size: '.esc_attr($panadero_bakery_site_title_font_size).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Site Tagline Font Size
	$panadero_bakery_site_tagline_font_size = get_theme_mod('panadero_bakery_site_tagline_font_size');
	if( $panadero_bakery_site_tagline_font_size != ''){
		$panadero_bakery_custom_style .=' .logo p.site-description {';
			$panadero_bakery_custom_style .=' font-size: '.esc_attr($panadero_bakery_site_tagline_font_size).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	// Copyright padding
	$panadero_bakery_copyright_padding = get_theme_mod('panadero_bakery_copyright_padding');

	if( $panadero_bakery_copyright_padding != ''){
		$panadero_bakery_custom_style .=' .site-info {';
			$panadero_bakery_custom_style .=' padding-top: '.esc_attr($panadero_bakery_copyright_padding).'px; padding-bottom: '.esc_attr($panadero_bakery_copyright_padding).'px;';
		$panadero_bakery_custom_style .=' }';
	}

	$panadero_bakery_slider_hide_show = get_theme_mod('panadero_bakery_slider_hide_show',false);
	if( $panadero_bakery_slider_hide_show == true){
		$panadero_bakery_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$panadero_bakery_custom_style .=' display:none;';
		$panadero_bakery_custom_style .=' }';
	} else {
		$panadero_bakery_custom_style .=' .page-template-custom-home-page #header {';
			$panadero_bakery_custom_style .=' position:static; background: #ff6796; padding: 15px 0;';
		$panadero_bakery_custom_style .=' }';
	}