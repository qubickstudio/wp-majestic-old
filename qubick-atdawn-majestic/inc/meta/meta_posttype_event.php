<?php

class Event_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Events', 'text-domain' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Events', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Event', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Event', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Event', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Event', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Event', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Event', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Event', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Events', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Events', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Event', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Events found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Events found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Events', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Event', 'qubick-id' ),
			],
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_rest'        => true,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite_no_front'    => false,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-list-view',
			'supports' => [
				'title',
				'thumbnail',
			],
			'taxonomies' => [
				'category',
			],
			'rewrite' => true,
		];

		register_post_type( 'event', $args );

	}


	public static function register_meta_boxes() {
		$prefix = 'event_';
		$meta_boxes[] = array(
			'id'		=> 'detail',
			'title'		=> 'Detail',
			'post_types'=> 'event',
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields' => [
				[
	                'type' => 'single_image',
	                'name' => esc_html__( 'Thumbnail Potrait', 'qubick' ),
	                'id'   => $prefix . 'thubmnail',
	            ],
	            [
	                'type' => 'single_image',
	                'name' => esc_html__( 'Thumbnail Landscape', 'qubick' ),
	                'id'   => $prefix . 'thubmnail_landscape',
	            ],
				[
	                'type' => 'text',
	                'name' => esc_html__( 'Event Title', 'qubick' ),
	                'id'   => $prefix . 'event_title',
	            ],
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Event Type', 'qubick' ),
	                'id'   => $prefix . 'event_type',
	            ],
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Year', 'qubick' ),
	                'id'   => $prefix . 'event_year',
	            ],
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Location', 'qubick' ),
	                'id'   => $prefix . 'event_location',
	            ],
	            [
	                'type' => 'textarea',
	                'name' => esc_html__( 'Description', 'qubick' ),
	                'id'   => $prefix . 'description',
	            ],
	            [
	            	'type'	=> 'image_advanced',
	            	'name'	=> esc_html__( 'Gallery', 'qubick' ),
	            	'id'	=> 'event_gallery',
	            	'max_status' => 'false',
	            	'image_size' => 'thumbnail',
					'multiple' => false,
	            	'clone' => false,
	            ],
	            
			],
		);


		return $meta_boxes;
	}
}

Event_Post_Type::init();