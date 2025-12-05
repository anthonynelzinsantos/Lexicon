<?php

/* Theme setup */
function lexicona17s_setup() {
	add_editor_style( array( trailingslashit( get_template_directory_uri() ) . 'assets/css/editor-style.css', 'style.css' ) );
}
add_action( 'after_setup_theme', 'lexicona17s_setup' );

/* Adding styles */
function lexicona17s_styles() {
	wp_enqueue_style( 'lexicona17s-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'lexicona17s' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lexicona17s_styles' );

/* Block bindings */
function lexicona17s_register_block_bindings() {
	/* Copyright year */
	register_block_bindings_source( 
		'lexicona17s/copyright-year', 
		array(
			'label'              => __( 'Copyright year', 'lexicona17s' ),
			'get_value_callback' => 'lexicona17s_block_binding_callback_copyright_year'
		)
	);
}
add_action( 'init', 'lexicona17s_register_block_bindings' );

/* Block bindings callback: copyright year */
if ( ! function_exists( 'lexicona17s_block_binding_callback_copyright_year' ) ) :
	function lexicona17s_block_binding_callback_copyright_year() {
		return '©️ ' . date( 'Y' );
	}
endif;