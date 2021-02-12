<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
register_taxonomy( 'bevande-cat', [ 'altre-bevande' ], [
	'label'             => '',
	// определяется параметром $labels->name
	'labels'            => [
		'name'              => 'Bevande category',
		'singular_name'     => 'Bevande category',
		'search_items'      => 'Search Bevande category',
		'all_items'         => 'All Bevande category',
		'view_item '        => 'View Bevande category',
		'parent_item'       => 'Parent Bevande category',
		'parent_item_colon' => 'Parent Bevande category:',
		'edit_item'         => 'Edit Bevande category',
		'update_item'       => 'Update Bevande category',
		'add_new_item'      => 'Add New Bevande category',
		'new_item_name'     => 'New Bevande category Name',
		'menu_name'         => 'Bevande category',
	],
	'description'       => '',
	// описание таксономии
	'public'            => true,
	// 'publicly_queryable'    => null, // равен аргументу public
	// 'show_in_nav_menus'     => true, // равен аргументу public
	// 'show_ui'               => true, // равен аргументу public
	// 'show_in_menu'          => true, // равен аргументу show_ui
	// 'show_tagcloud'         => true, // равен аргументу show_ui
	// 'show_in_quick_edit'    => null, // равен аргументу show_ui
	'hierarchical'      => true,
	'rewrite'           => true,
	//'query_var'             => $taxonomy, // название параметра запроса
	'capabilities'      => array(),
	'meta_box_cb'       => null,
	// html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
	'show_admin_column' => false,
	// авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
	'show_in_rest'      => true,
	// добавить в REST API
	'rest_base'         => null,
	// $taxonomy
	// '_builtin'              => false,
	//'update_count_callback' => '_update_post_term_count',
] );
