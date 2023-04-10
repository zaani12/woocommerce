<?php
//about theme info
add_action( 'admin_menu', 'panadero_bakery_gettingstarted' );
function panadero_bakery_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'panadero-bakery'), esc_html__('About Theme', 'panadero-bakery'), 'edit_theme_options', 'panadero_bakery_guide', 'panadero_bakery_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function panadero_bakery_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'panadero_bakery_admin_theme_style');

//guidline for about theme
function panadero_bakery_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'panadero-bakery' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Multicolor Business WordPress Theme', 'panadero-bakery' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'panadero-bakery' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'panadero-bakery' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'panadero-bakery' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'panadero-bakery' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'panadero-bakery' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'panadero-bakery' ); ?> <a href="<?php echo esc_url( PANADERO_BAKERY_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'panadero-bakery' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Panadero Bakery is a sleek, colourful, gorgeous, well-structured and feature-rich bakery WordPress theme. This multipurpose theme is designed for bakeries, cake and pastry shops, sweet shops, juice, smoothies and other beverages parlour, cafés, chocolate rooms, ice cream corner, dairy farm, coffee shop, food court, eatery and small food joints, restaurants and other relevant businesses. It is fully compatible with WooCommerce plugin that offers beautiful product pages and fulfils other online store necessities at one place. This bakery WordPress theme is readily responsive, cross-browser compatible, translation ready and retina ready. It includes many social media icons to reach target audience easily. Panadero Bakery is customizable to its deepest core. It has multiple layout designs with and without sidebars and all the freedom to decide header and footer look. There are various sections predesigned like gallery, testimonial, services, pricing table, count of happy customers, video section etc. It is highly customizable to design the website according to your needs. This bakery theme has easy to understand backend interface which makes it easy to use the theme without requiring any previous coding knowledge.', 'panadero-bakery')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Business Theme', 'panadero-bakery' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'panadero-bakery'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( PANADERO_BAKERY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'panadero-bakery'); ?></a>
			<a href="<?php echo esc_url( PANADERO_BAKERY_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'panadero-bakery'); ?></a>
			<a href="<?php echo esc_url( PANADERO_BAKERY_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'panadero-bakery'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/panadero-bakery.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'panadero-bakery'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'panadero-bakery'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'panadero-bakery'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>