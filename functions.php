<?php

/**************
* Theme setup *
**************/
function lexicon_a17s_setup() {
	add_editor_style(array('assets/css/editor-style.css', 'style.css'));
}
add_action('after_setup_theme', 'lexicon_a17s_setup');

/*****************
* Enqueue styles *
*****************/
function lexicon_a17s_styles() {
	wp_enqueue_style('lexicon-a17s-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme('lexicon-a17s')->get('Version'));
}
add_action('wp_enqueue_scripts', 'lexicon_a17s_styles');

/**************************
* Register block bindings *
**************************/
if (!function_exists('lexicon_a17s_register_block_bindings')) :
	function lexicon_a17s_register_block_bindings() {
		/* Copyright year */
		register_block_bindings_source(
			'lexicon-a17s/copyright-year', 
			array(
				'label'              => __('Copyright year', 'lexicon-a17s'),
				'get_value_callback' => 'lexicon_a17s_block_binding_copyright_year'
			)
		);
	}
	add_action('init', 'lexicon_a17s_register_block_bindings');
endif;

/*****************
* Block binding  *
* Copyright year *
*****************/
if (!function_exists('lexicon_a17s_block_binding_copyright_year')) :
	function lexicon_a17s_block_binding_copyright_year() {
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
if (!function_exists('lexicon_a17s_register_block_pattern_category')) :
	function lexicon_a17s_register_block_pattern_category() {
		register_block_pattern_category(
			'lexicon-a17s',
			array(
				'label' => esc_html__('Lexicon', 'lexicon-a17s'),
			)
		);
	}
	add_action('init', 'lexicon_a17s_register_block_pattern_category');
endif;