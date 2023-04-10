<?php

add_action( 'admin_menu', 'bakery_cafe_getting_started' );
function bakery_cafe_getting_started() {
	add_theme_page( esc_html__('Get Started', 'bakery-cafe'), esc_html__('Get Started', 'bakery-cafe'), 'edit_theme_options', 'bakery-cafe-guide-page', 'bakery_cafe_test_guide');
}

function bakery_cafe_admin_enqueue_scripts() {
	wp_enqueue_style( 'bakery-cafe-admin-style',get_template_directory_uri().'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'bakery_cafe_admin_enqueue_scripts' );

if ( ! defined( 'BAKERY_CAFE_DOCS_FREE' ) ) {
define('BAKERY_CAFE_DOCS_FREE',__('https://www.misbahwp.com/docs/bakery-cafe-free-docs/','bakery-cafe'));
}
if ( ! defined( 'BAKERY_CAFE_DOCS_PRO' ) ) {
define('BAKERY_CAFE_DOCS_PRO',__('https://www.misbahwp.com/docs/bakery-cafe-pro-docs','bakery-cafe'));
}
if ( ! defined( 'BAKERY_CAFE_BUY_NOW' ) ) {
define('BAKERY_CAFE_BUY_NOW',__('https://www.misbahwp.com/themes/coffee-shop-wordpress-theme/','bakery-cafe'));
}
if ( ! defined( 'BAKERY_CAFE_SUPPORT_FREE' ) ) {
define('BAKERY_CAFE_SUPPORT_FREE',__('https://wordpress.org/support/theme/bakery-cafe','bakery-cafe'));
}
if ( ! defined( 'BAKERY_CAFE_REVIEW_FREE' ) ) {
define('BAKERY_CAFE_REVIEW_FREE',__('https://wordpress.org/support/theme/bakery-cafe/reviews/#new-post','bakery-cafe'));
}
if ( ! defined( 'BAKERY_CAFE_DEMO_PRO' ) ) {
define('BAKERY_CAFE_DEMO_PRO',__('https://www.misbahwp.com/demo/bakery-cafe/','bakery-cafe'));
}

function bakery_cafe_test_guide() { ?>
	<?php $bakery_cafe_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( BAKERY_CAFE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'bakery-cafe' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'bakery-cafe' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( BAKERY_CAFE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'bakery-cafe' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( BAKERY_CAFE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'bakery-cafe' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','bakery-cafe'); ?><?php echo esc_html( $bakery_cafe_theme ); ?>  <span><?php esc_html_e('Version: ', 'bakery-cafe'); ?><?php echo esc_html($bakery_cafe_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$bakery_cafe_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $bakery_cafe_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','bakery-cafe'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','bakery-cafe'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','bakery-cafe'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','bakery-cafe'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'bakery-cafe' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','bakery-cafe'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( BAKERY_CAFE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'bakery-cafe' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( BAKERY_CAFE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'bakery-cafe' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( BAKERY_CAFE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'bakery-cafe' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
