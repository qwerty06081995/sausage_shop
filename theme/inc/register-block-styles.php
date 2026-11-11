<?php
/**
 * Block styles.
 *
 * @package sausage-shop
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function sausage_shop_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'sausage-shop-flat-button',
			'label' => __( 'Flat button', 'sausage-shop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'sausage-shop-list-underline',
			'label' => __( 'Underlined list items', 'sausage-shop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'sausage-shop-box-shadow',
			'label' => __( 'Box shadow', 'sausage-shop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'sausage-shop-box-shadow',
			'label' => __( 'Box shadow', 'sausage-shop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'sausage-shop-box-shadow',
			'label' => __( 'Box shadow', 'sausage-shop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'sausage-shop-plus',
			'label' => __( 'Plus & minus', 'sausage-shop' ),
		)
	);
}
add_action( 'init', 'sausage_shop_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function sausage_shop_unregister_block_style() {
	wp_enqueue_script(
		'sausage-shop-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		SAUSAGE_SHOP_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'sausage_shop_unregister_block_style' );
