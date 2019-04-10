<?php
/**
 * @package Ultimate Ecommerce Shop
 * Setup the WordPress core custom header feature.
 *
 * @uses ultimate_ecommerce_shop_header_style()
*/
function ultimate_ecommerce_shop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ultimate_ecommerce_shop_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'ultimate_ecommerce_shop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'ultimate_ecommerce_shop_custom_header_setup' );

if ( ! function_exists( 'ultimate_ecommerce_shop_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ultimate_ecommerce_shop_custom_header_setup().
 */
function ultimate_ecommerce_shop_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		.headerbox{
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // ultimate_ecommerce_shop_header_style