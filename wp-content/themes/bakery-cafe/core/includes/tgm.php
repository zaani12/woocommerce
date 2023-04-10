<?php
	
load_template( get_template_directory() . '/core/includes/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function bakery_cafe_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'bakery-cafe' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	bakery_cafe_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'bakery_cafe_register_recommended_plugins' );