<?php
/**
 * Ultimate Ecommerce Shop Theme Customizer
 *
 * @package Ultimate Ecommerce Shop
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ultimate_ecommerce_shop_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'ultimate_ecommerce_shop_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ultimate-ecommerce-shop' ),
	    'description' => __( 'Description of what this panel does.', 'ultimate-ecommerce-shop' ),
	) );

	$wp_customize->add_section( 'ultimate_ecommerce_shop_left_right' , array(
    	'title'      => __( 'General Settings', 'ultimate-ecommerce-shop' ),
		'priority'   => 30,
		'panel' => 'ultimate_ecommerce_shop_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('ultimate_ecommerce_shop_theme_options',array(
        'default' => __( 'Right Sidebar', 'ultimate-ecommerce-shop' ),
        'sanitize_callback' => 'ultimate_ecommerce_shop_sanitize_choices'	        
	));

	$wp_customize->add_control('ultimate_ecommerce_shop_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'ultimate-ecommerce-shop' ),
	        'section' => 'ultimate_ecommerce_shop_left_right',
	        'choices' => array(
	            'One Column' => __('One Column ','ultimate-ecommerce-shop'),
	            'Three Columns' => __('Three Columns','ultimate-ecommerce-shop'),
	            'Four Columns' => __('Four Columns','ultimate-ecommerce-shop'),
	            'Right Sidebar' => __('Right Sidebar','ultimate-ecommerce-shop'),
	            'Left Sidebar' => __('Left Sidebar','ultimate-ecommerce-shop'),
	            'Grid Layout' => __('Grid Layout','ultimate-ecommerce-shop')
	        ),
	));

	//Topbar section
	$wp_customize->add_section('ultimate_ecommerce_shop_topbar',array(
		'title'	=> __('Topbar','ultimate-ecommerce-shop'),
		'description'	=> __('Add Topbar Content here','ultimate-ecommerce-shop'),
		'priority'	=> null,
		'panel' => 'ultimate_ecommerce_shop_panel_id',
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_discount_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_discount_text',array(
		'label'	=> __('Add Discount Text','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_discount_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_discount_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_discount_link',array(
		'label'	=> __('Add shop now link','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_discount_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_call_text',array(
		'label'	=> __('Add Call Text','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_call',array(
		'label'	=> __('Add Phone Number','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_mail_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_mail_text',array(
		'label'	=> __('Add Email Text','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_mail_text',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('ultimate_ecommerce_shop_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_mail',array(
		'label'	=> __('Add Email','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_mail',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('ultimate_ecommerce_shop_cart_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_cart_link',array(
		'label'	=> __('Add Cart Link','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_cart_link',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('ultimate_ecommerce_shop_myaccount_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_myaccount_link',array(
		'label'	=> __('Add My Account Link','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_topbar',
		'setting'	=> 'ultimate_ecommerce_shop_myaccount_link',
		'type'		=> 'url'
	));
	
	//home page slider
	$wp_customize->add_section( 'ultimate_ecommerce_shop_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'ultimate-ecommerce-shop' ),
		'priority'   => null,
		'panel' => 'ultimate_ecommerce_shop_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ultimate_ecommerce_shop_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'ultimate_ecommerce_shop_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ultimate-ecommerce-shop' ),
			'section'  => 'ultimate_ecommerce_shop_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Top Products
	$wp_customize->add_section('ultimate_ecommerce_shop_top_product_sec',array(
		'title'	=> __('Top Products Section ','ultimate-ecommerce-shop'),
		'description'=> __('This section will appear below the slider.','ultimate-ecommerce-shop'),
		'panel' => 'ultimate_ecommerce_shop_panel_id',
	));

	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'ultimate_ecommerce_shop_product_title' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'ultimate_ecommerce_shop_product_title' . $count, array(
			'label'    => __( 'Select Top Product Title Page', 'ultimate-ecommerce-shop' ),
			'section'  => 'ultimate_ecommerce_shop_top_product_sec',
			'type'     => 'dropdown-pages'
		));
	}
	
	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'ultimate_ecommerce_shop_top_products' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'ultimate_ecommerce_shop_top_products' . $count, array(
			'label'    => __( 'Select Page', 'ultimate-ecommerce-shop' ),
			'section'  => 'ultimate_ecommerce_shop_top_product_sec',
			'type'     => 'dropdown-pages'
		));
	}
		
	//footer
	$wp_customize->add_section('ultimate_ecommerce_shop_footer_section',array(
		'title'	=> __('Footer Text','ultimate-ecommerce-shop'),
		'description'	=> __('Add some text for footer like copyright etc.','ultimate-ecommerce-shop'),
		'panel' => 'ultimate_ecommerce_shop_panel_id'
	));
	
	$wp_customize->add_setting('ultimate_ecommerce_shop_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('ultimate_ecommerce_shop_footer_copy',array(
		'label'	=> __('Copyright Text','ultimate-ecommerce-shop'),
		'section'	=> 'ultimate_ecommerce_shop_footer_section',
		'type'		=> 'text'
	));
	
}
add_action( 'customize_register', 'ultimate_ecommerce_shop_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Ultimate_Ecommerce_Shop_Customize {

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
		$manager->register_section_type( 'Ultimate_Ecommerce_Shop_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
		 	new Ultimate_Ecommerce_Shop_Customize_Section_Pro(
		 		$manager,
		 		'example_1',
		 		array(
					'priority' => 9,
	 				'title'    => esc_html__( 'Ultimate Ecommerce Pro', 'ultimate-ecommerce-shop' ),
					'pro_text' => esc_html__( 'Go Pro',         'ultimate-ecommerce-shop' ),
					'pro_url'  => esc_url('https://www.logicalthemes.com/themes/premium-ecommerce-wordpress-theme/')
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

		wp_enqueue_script( 'ultimate-ecommerce-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ultimate-ecommerce-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Ultimate_Ecommerce_Shop_Customize::get_instance();