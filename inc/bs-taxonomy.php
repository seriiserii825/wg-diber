<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
register_taxonomy( 'birre-cat', [ 'le-nostre-birre' ], [
	'label'             => '',
	// определяется параметром $labels->name
	'labels'            => [
		'name'              => 'Birre category',
		'singular_name'     => 'Birre category',
		'search_items'      => 'Search Birre category',
		'all_items'         => 'All Birre category',
		'view_item '        => 'View Birre category',
		'parent_item'       => 'Parent Birre category',
		'parent_item_colon' => 'Parent Birre category:',
		'edit_item'         => 'Edit Birre category',
		'update_item'       => 'Update Birre category',
		'add_new_item'      => 'Add New Birre category',
		'new_item_name'     => 'New Birre category Name',
		'menu_name'         => 'Birre category',
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
