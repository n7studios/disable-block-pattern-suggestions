<?php
/**
 * Disable Block and Pattern suggestions.
 *
 * @package Disable_Block_Pattern_Suggestions
 * @author Tim Carr
 *
 * @wordpress-plugin
 * Plugin Name: Disable Block and Pattern Suggestions
 * Plugin URI: https://www.n7studios.co.uk
 * Description: Disable both "Available to Install" block suggestions and core block patterns in Gutenberg's block selector / sidebar.
 * Version: 0.1
 * Author: Tim Carr
 * Author URI: https://www.n7studios.co.uk
 */

add_action( 'admin_init', function() {

    // Disable "Available to Install" block suggestions.
    remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
    remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );

} );

add_action( 'init', function() {

    // Disable core block patterns.
    remove_theme_support( 'core-block-patterns' );

} );
