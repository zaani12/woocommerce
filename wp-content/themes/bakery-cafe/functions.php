<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function bakery_cafe_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'google-fonts-great-vibes',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'google-fonts-lora',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
		array(),
		'1.0'
	);
}

add_action( 'wp_enqueue_scripts', 'bakery_cafe_google_fonts' );

if (!function_exists('bakery_cafe_enqueue_scripts')) {

	function bakery_cafe_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('bakery-cafe-style', get_stylesheet_uri(), array() );

		wp_style_add_data('bakery-cafe-style', 'rtl', 'replace');

		wp_enqueue_style(
			'bakery-cafe-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'bakery-cafe-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'bakery-cafe-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'bakery-cafe-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$bakery_cafe_css = '';

		if ( get_header_image() ) :

			$bakery_cafe_css .=  '
				header.header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'bakery-cafe-style', $bakery_cafe_css );

		 // Theme stylesheet.
		wp_enqueue_style( 'bakery-cafe-style', get_stylesheet_uri() );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'bakery-cafe-style',$bakery_cafe_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'bakery_cafe_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('bakery_cafe_after_setup_theme')) {

	function bakery_cafe_after_setup_theme() {

		load_child_theme_textdomain( 'bakery-cafe', get_stylesheet_directory() . '/languages' );

		if ( ! isset( $bakery_cafe_content_width ) ) $bakery_cafe_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'bakery-cafe' ),
		));

		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( "responsive-embeds" );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'ffffff'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
      		'flex-width' => true,
      		'flex-height' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'bakery_cafe_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/**------------------------------------------------------------------------------------------
 * Enqueue theme logo style.
 */
function bakery_cafe_logo_resizer() {

    $bakery_cafe_theme_logo_size_css = '';
    $bakery_cafe_logo_resizer = get_theme_mod('bakery_cafe_logo_resizer');

	$bakery_cafe_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($bakery_cafe_logo_resizer).'px !important;
			width: '.esc_attr($bakery_cafe_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'bakery-cafe-style',$bakery_cafe_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'bakery_cafe_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('bakery_cafe_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function bakery_cafe_comment($comment, $bakery_cafe_args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'bakery-cafe');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'bakery-cafe'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($bakery_cafe_args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $bakery_cafe_args['avatar_size']) echo get_avatar($comment, $bakery_cafe_args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'bakery-cafe'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'bakery-cafe' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'bakery-cafe'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $bakery_cafe_args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $bakery_cafe_args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for bakery_cafe_comment()

if (!function_exists('bakery_cafe_widgets_init')) {

	function bakery_cafe_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','bakery-cafe'),
			'id'   => 'bakery-cafe-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'bakery-cafe'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','bakery-cafe'),
			'id'   => 'bakery-cafe-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'bakery-cafe'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'bakery_cafe_widgets_init' );

}

function bakery_cafe_get_categories_select() {
	$bakery_cafe_teh_cats = get_categories();
	$results;
	$bakery_cafe_count = count($bakery_cafe_teh_cats);
	for ($i=0; $i < $bakery_cafe_count; $i++) {
	if (isset($bakery_cafe_teh_cats[$i]))
  		$results[$bakery_cafe_teh_cats[$i]->slug] = $bakery_cafe_teh_cats[$i]->name;
	else
  		$bakery_cafe_count++;
	}
	return $results;
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'bakery_cafe_woocommerce_header_add_to_cart_fragment' );

function bakery_cafe_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','bakery-cafe' ); ?>"><i class="fas fa-shopping-cart"></i><p class="cart-item-box"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></p></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'bakery_cafe_loop_columns', 999);
if (!function_exists('bakery_cafe_loop_columns')) {
	function bakery_cafe_loop_columns() {
		return 3; // 3 products per row
	}
}

//redirect
Function bakery_cafe_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=bakery-cafe-guide-page") );
   	}
}
add_action('after_setup_theme', 'bakery_cafe_notice');

?>
