<?php

/* Theme setup */
function lexicon_a17s_setup() {
	add_editor_style( array( trailingslashit( get_template_directory_uri() ) . 'assets/css/editor-style.css', 'style.css' ) );
}
add_action( 'after_setup_theme', 'lexicon_a17s_setup' );

/* Adding styles */
function lexicon_a17s_styles() {
	wp_enqueue_style( 'lexicon-a17s-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'lexicon-a17s' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lexicon_a17s_styles' );

/* Block bindings */
function lexicon_a17s_register_block_bindings() {
	/* Copyright year */
	register_block_bindings_source( 
		'lexicon_a17s/copyright-year', 
		array(
			'label'              => __( 'Copyright year', 'lexicon-a17s' ),
			'get_value_callback' => 'lexicon_a17s_block_binding_callback_copyright_year'
		)
	);
}
add_action( 'init', 'lexicon_a17s_register_block_bindings' );

/* Block bindings callback: copyright year */
if ( ! function_exists( 'lexicon_a17s_block_binding_callback_copyright_year' ) ) :
	function lexicon_a17s_block_binding_callback_copyright_year() {
		return '©️ ' . date( 'Y' );
	}
endif;