<?php

/**************
* Theme setup *
**************/
function lexicona17s_setup() {
	add_editor_style(array('assets/css/editor-style.css', 'style.css'));
}
add_action('after_setup_theme', 'lexicona17s_setup');

/*****************
* Enqueue styles *
*****************/
function lexicona17s_styles() {
	wp_enqueue_style('lexicona17s-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme('lexicona17s')->get('Version'));
}
add_action('wp_enqueue_scripts', 'lexicona17s_styles');

/**************************
* Register block bindings *
**************************/
if (!function_exists('lexicona17s_register_block_bindings')) :
	function lexicona17s_register_block_bindings() {
		/* Copyright year */
		register_block_bindings_source(
			'lexicona17s/copyright-year', 
			array(
				'label'              => __('Copyright year', 'lexicona17s'),
				'get_value_callback' => 'lexicona17s_block_binding_copyright_year'
			)
		);
	}
	add_action('init', 'lexicona17s_register_block_bindings');
endif;

/*****************
* Block binding  *
* Copyright year *
*****************/
if (!function_exists('lexicona17s_block_binding_copyright_year')) :
	function lexicona17s_block_binding_copyright_year() {
		return '©️ ' . date('Y');
	}
endif;

/**********************************
* Disable default block patterns *
**********************************/
add_action('init', function() {
    remove_theme_support('core-block-patterns');
});

add_filter('should_load_remote_block_patterns', '__return_false');

/**********************************
* Register block pattern category *
**********************************/
if (!function_exists('lexicona17s_register_block_pattern_category')) :
	function lexicona17s_register_block_pattern_category() {
		register_block_pattern_category(
			'lexicona17s',
			array(
				'label' => esc_html__('Lexicon', 'lexicona17s'),
			)
		);
	}
	add_action('init', 'lexicona17s_register_block_pattern_category');
endif;