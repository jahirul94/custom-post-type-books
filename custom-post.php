<?php
/**
 * Plugin Name:       Custom Post
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       This is a sample description for custom post plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shaped Plugin
 * Author URI:        https://www.shapedplugin.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       custom-post
 * Domain Path:       custom-post
 */

add_action( 'init', 'create_book_post_type' );

/**
 * Method create_book_post_type for creating custom post called books
 *
 * @return void
 */
function create_book_post_type() {

	register_post_type(
		'book',
		array(
			'labels'             => array(
				'name'               => 'Books',
				'singular_name'      => 'Book',
				'menu_name'          => 'Books',
				'name_admin_bar'     => 'Book',
				'add_new'            => 'Add New Book',
				'add_new_item'       => 'Add New Book',
				'new_item'           => 'New Book',
				'edit_item'          => 'Edit Book',
				'view_item'          => 'View Book',
				'all_items'          => 'All Books',
				'search_items'       => 'Search Books',
				'parent_item_colon'  => 'Parent Books:',
				'not_found'          => 'No books found.',
				'not_found_in_trash' => 'No books found in Trash.',
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'taxonomies'         => array( 'category', 'post_tag' ),
		)
	);
}
