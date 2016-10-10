<?php
/*
Plugin Name: Swapps Wordpress Slider
Plugin URI: http://swapps.io
Description: Easy, simple sliders.
Author: Julián Bonilla
Version: 0.1
Author URI: http://swapps.io/
*/
register_activation_hook( __FILE__, function () {
    slider_post_types_register();
    flush_rewrite_rules();
} );
register_deactivation_hook( __FILE__, function () {
    flush_rewrite_rules();
} );

function slider_post_types_register() {
	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => __( 'Sliders' ),
				'singular_name' => __( 'Slider' ),
				'add_new' => __( 'Add New Slider' ),
				'add_new_item' => __( 'Add New Slider' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Slider' ),
				'new_item' => __( 'New Slider' ),
				'view' => __( 'View Slider' ),
				'view_item' => __( 'View Slider' ),
				'search_items' => __( 'Search Sliders' ),
				'not_found' => __( 'No Sliders' ),
				'not_found_in_trash' => __( 'No Sliders in the Trash' ),
			),
			'hierarchical' => false,
			'public' => true,
			'menu_position' => 25,
			'menu_icon' => 'dashicons-images-alt',
			'has_archive' => 'sliders',
			/*'rewrite' => array('slug' => 'slider'),*/
			'supports' => array( 'title', 'thumbnail'),
			'description' => "Simple slider in which you can add anything you want."
		)
	);
}

add_action( 'init', 'slider_post_types_register' );




if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_57f7f700465bb',
	'title' => 'Slide',
	'fields' => array (
		array (
			'key' => 'field_57f7f705421d2',
			'label' => 'Slide',
			'name' => 'slide',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Slide',
			'sub_fields' => array (
				array (
					'key' => 'field_57f7f790421d3',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_57f7f7f8421d4',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Title of slide',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_57f7f86d421d5',
					'label' => 'Title 2',
					'name' => 'title_2',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Secondary title of slider',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_57f7f883421d6',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Description of slide',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
				array (
					'key' => 'field_57f7f8b6421d7',
					'label' => 'Call to Action Text',
					'name' => 'call_to_action_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_57f7f8d6421d8',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>