<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('le-nostre-birre', array(
		'labels'             => array(
			'name'              => 'Le nostre birre', // Основное название типа записи
			'singular_name'     => 'Le nostre birre', // отдельное название записи типа Book
			'add_new'           => __('Add new'),
			'add_new_item'      => __('Add new'),
			'edit_item'         => __('Edit new'),
			'new_item'          => __('New item'),
			'view_item'         => __('View'),
			'search_items'      => __('Search'),
			'parent_item_colon' => '',
			'menu_name'         => 'Le nostre birre'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'show_in_rest' => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-beer',
		'supports'           => array('title', 'editor', 'thumbnail')
	));
	register_post_type('altre-bevande', array(
		'labels'             => array(
			'name'              => 'Altre bevande', // Основное название типа записи
			'singular_name'     => 'Altre bevande', // отдельное название записи типа Book
			'add_new'           => __('Add new'),
			'add_new_item'      => __('Add new'),
			'edit_item'         => __('Edit new'),
			'new_item'          => __('New item'),
			'view_item'         => __('View'),
			'search_items'      => __('Search'),
			'parent_item_colon' => '',
			'menu_name'         => 'Altre bevande'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'show_in_rest'       => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-coffee',
		'supports'           => array('title', 'thumbnail')
	));

	register_post_type('servizi', array(
		'labels'             => array(
			'name'              => 'Servizi', // Основное название типа записи
			'singular_name'     => 'Servizi', // отдельное название записи типа Book
			'add_new'           => __('Add new'),
			'add_new_item'      => __('Add new'),
			'edit_item'         => __('Edit new'),
			'new_item'          => __('New item'),
			'view_item'         => __('View'),
			'search_items'      => __('Search'),
			'parent_item_colon' => '',
			'menu_name'         => 'Servizi'
		),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'show_in_rest'       => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-bank',
		'supports'           => array('title', 'editor', 'thumbnail')
	));
}
