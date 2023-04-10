<?php
/**
 * panadero-bakery: Customizer
 *
 * @subpackage panadero-bakery
 * @since 1.0
 */

function panadero_bakery_customize_register( $wp_customize ) {

	$wp_customize->add_setting('panadero_bakery_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('panadero_bakery_logo_padding',array(
		'label' => __('Logo Padding','panadero-bakery'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('panadero_bakery_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('panadero_bakery_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('panadero_bakery_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('panadero_bakery_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('panadero_bakery_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'panadero_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('panadero_bakery_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','panadero-bakery'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('panadero_bakery_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('panadero_bakery_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'panadero_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('panadero_bakery_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','panadero-bakery'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('panadero_bakery_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','panadero-bakery'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'panadero_bakery_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'panadero-bakery' ),
	) );

	$wp_customize->add_section( 'panadero_bakery_theme_options_section', array(
    	'title'      => __( 'General Settings', 'panadero-bakery' ),
		'priority'   => 30,
		'panel' => 'panadero_bakery_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('panadero_bakery_theme_options',array(
     	'default' => 'Right Sidebar',
     	'sanitize_callback' => 'panadero_bakery_sanitize_choices'   
	));

	$wp_customize->add_control('panadero_bakery_theme_options',array(
     	'type' => 'radio',
     	'label' => __('Do you want this section','panadero-bakery'),
     	'section' => 'panadero_bakery_theme_options_section',
     	'choices' => array(
         'Left Sidebar' => __('Left Sidebar','panadero-bakery'),
         'Right Sidebar' => __('Right Sidebar','panadero-bakery'),
         'One Column' => __('One Column','panadero-bakery'),
         'Three Columns' => __('Three Columns','panadero-bakery'),
         'Four Columns' => __('Four Columns','panadero-bakery'),
         'Grid Layout' => __('Grid Layout','panadero-bakery')
     	),
	));
	
	//home page slider
	$wp_customize->add_section( 'panadero_bakery_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'panadero-bakery' ),
		'priority'   => null,
		'panel' => 'panadero_bakery_panel_id'
	) );

	$wp_customize->add_setting('panadero_bakery_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'panadero_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('panadero_bakery_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','panadero-bakery'),
   	'description' => __('Image Size ( 1600px x 582px )','panadero-bakery'),
   	'section' => 'panadero_bakery_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'panadero_bakery_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'panadero_bakery_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'panadero_bakery_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'panadero-bakery' ),
			'section'  => 'panadero_bakery_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('panadero_bakery_slider_excerpt_length',array(
		'default' => '20',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
	));
	$wp_customize->add_control('panadero_bakery_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','panadero-bakery'),
		'section' => 'panadero_bakery_slider_section',
	));

	//Featured products
	$wp_customize->add_section('panadero_bakery_product_section',array(
		'title'	=> __('Featured products','panadero-bakery'),
		'panel' => 'panadero_bakery_panel_id',
	));

	$wp_customize->add_setting( 'panadero_bakery_featured-product', array(
		'default'           => '',
		'sanitize_callback' => 'panadero_bakery_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'panadero_bakery_featured-product', array(
		'label'    => __( 'Select Product Page', 'panadero-bakery' ),
		'section'  => 'panadero_bakery_product_section',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('panadero_bakery_product_section_padding',array(
      'default' => '',
      'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
   ));
   $wp_customize->add_control('panadero_bakery_product_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','panadero-bakery'),
      'section' => 'panadero_bakery_product_section',
   ));

	//Footer
 	$wp_customize->add_section( 'panadero_bakery_footer', array(
    	'title'      => __( 'Footer Text', 'panadero-bakery' ),
		'priority'   => null,
		'panel' => 'panadero_bakery_panel_id'
	) );

	$wp_customize->add_setting('panadero_bakery_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'panadero_bakery_sanitize_checkbox'
	));
	$wp_customize->add_control('panadero_bakery_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','panadero-bakery'),
   	'section' => 'panadero_bakery_footer'
	));

 	$wp_customize->add_setting('panadero_bakery_footer_link',array(
		'default'	=> 'https://www.luzuk.com/themes/free-bakery-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('panadero_bakery_footer_link',array(
		'label'	=> __('Footer Link','panadero-bakery'),
		'section'	=> 'panadero_bakery_footer',
		'setting'	=> 'panadero_bakery_footer_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('panadero_bakery_footer_copy',array(
		'default'	=> 'Bakery WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('panadero_bakery_footer_copy',array(
		'label'	=> __('Footer Text','panadero-bakery'),
		'section'	=> 'panadero_bakery_footer',
		'setting'	=> 'panadero_bakery_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('panadero_bakery_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'panadero_bakery_sanitize_float'
 	));
 	$wp_customize->add_control('panadero_bakery_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','panadero-bakery'),
		'section' => 'panadero_bakery_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'panadero_bakery_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'panadero_bakery_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'panadero_bakery_customize_register' );

function panadero_bakery_customize_partial_blogname() {
	bloginfo( 'name' );
}

function panadero_bakery_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function panadero_bakery_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function panadero_bakery_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Panadero_Bakery_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Panadero_Bakery_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Panadero_Bakery_Customize_Section_Pro(
				$manager,
				'panadero_bakery_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Panadero Bakery Pro', 'panadero-bakery' ),
					'pro_text' => esc_html__( 'Go Pro','panadero-bakery' ),
					'pro_url'  => esc_url('https://www.luzuk.com/product/bakery-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'panadero-bakery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'panadero-bakery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Panadero_Bakery_Customize::get_instance();