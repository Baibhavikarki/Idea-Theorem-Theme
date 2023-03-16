<?php
/**
 * Idea Theorem Theme Customizer
 *
 * @package Idea_Theorem
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function idea_theorem_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'idea_theorem_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'idea_theorem_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'idea_theorem_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function idea_theorem_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function idea_theorem_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function idea_theorem_customize_preview_js() {
	wp_enqueue_script( 'idea-theorem-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'idea_theorem_customize_preview_js' );

/**
 * Customizer register functionality starts here.
 * 
 * @param WP_Customize_Manager $wp_customize Additional Customizer options for the theme.
 */
function ith_customizer_register( $wp_customize ) {

	$wp_customize->add_panel(
		'theme_homepage_panel',
		array(
			'title'       => __( 'Theme Homepage', 'wplp' ),
			'description' => __( 'Your description here', 'wplp' ),
			'priority'    => 2, // Mixed with top-level-section hierarchy.
		)
	);

	$wp_customize->add_section(
		'banner_section',
		array(
			'title' => 'Banner Section',
			'panel' => 'theme_homepage_panel',
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_cta_title',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'banner_testimonial_cta_title',
		array(
			'type'     => 'text',
			'priority' => 10, // Within the section.
			'section'  => 'banner_section', // Required, core or custom.
			'label'    => __( 'CTA Title', 'idea-theorem' ),
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_cta_link',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'banner_testimonial_cta_link',
		array(
			'type'     => 'text',
			'priority' => 10, // Within the section.
			'section'  => 'banner_section', // Required, core or custom.
			'label'    => __( 'CTA Link', 'idea-theorem' ),
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_setting(
		'banner_background_image',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'banner_background_image',
			array(
				'label'      => __( 'Background Image', 'idea-theorem' ),
				'section'    => 'banner_section',
				'settings'   => 'banner_background_image',
				)
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_logo',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);
	

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'banner_testimonial_logo',
			array(
				'label'      => __( 'Testimonial Logo', 'idea-theorem' ),
				'section'    => 'banner_section',
				'settings'   => 'banner_testimonial_logo',
				)
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_title',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'banner_testimonial_title',
		array(
			'type'     => 'text',
			'priority' => 10, // Within the section.
			'section'  => 'banner_section', // Required, core or custom.
			'label'    => __( 'Testimonial Title' ),
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_description',
		array(	
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'banner_testimonial_description',
		array(
			'type'     => 'textarea',
			'priority' => 10, // Within the section.
			'section'  => 'banner_section', // Required, core or custom.
			'label'    => __( 'Testimonial Description', 'idea-theorem' ),
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_client_image',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'banner_testimonial_client_image',
			array(
				'label'      => __( 'Client Image', 'idea-theorem' ),
				'section'    => 'banner_section',
				'settings'   => 'banner_testimonial_client_image',
				)
		)
	);

	$wp_customize->add_setting(
		'banner_testimonial_client_info',
		array(	
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'banner_testimonial_client_info',
		array(
			'type'     => 'textarea',
			'priority' => 10, // Within the section.
			'section'  => 'banner_section', // Required, core or custom.
			'label'    => __( 'Testimonial Client Info', 'idea-theorem' ),
		)
	);

	

	$wp_customize->add_section(
		'about_us_section',
		array(
			'title' => 'Second Section',
			'panel' => 'theme_homepage_panel',
		)
	);

	$wp_customize->add_setting(
		'about_us_title',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'about_us_title',
		array(
			'type'     => 'text',
			'priority' => 10, // Within the section.
			'section'  => 'about_us_section', // Required, core or custom.
			'label'    => __( 'Title' ),
		)
	);

	$wp_customize->add_setting(
		'about_us_description',
		array(	
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		'about_us_description',
		array(
			'type'     => 'textarea',
			'priority' => 10, // Within the section.
			'section'  => 'about_us_section', // Required, core or custom.
			'label'    => __( 'Description', 'idea-theorem' ),
		)
	);

	$wp_customize->add_setting(
		'about_us_image',
		array(
			'type'       => 'option',
			'capability' => 'edit_theme_options',
			'default'    => '',
			'transport'  => 'refresh', // or postMessage
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'about_us_image',
			array(
				'label'      => __( 'Image', 'idea-theorem' ),
				'section'    => 'about_us_section',
				'settings'   => 'about_us_image',
				)
		)
	);

}
add_action( 'customize_register', 'ith_customizer_register' );
