<?php
require_once get_template_directory().'/inc/meta/meta_posttype_event.php';

add_filter( 'rwmb_meta_boxes', 'home_meta_boxes' );
function home_meta_boxes( $meta_boxes ) {
	// if(isset($_GET['post'])){
	// 	$post_id = $_GET['post'];
	// 	$slug = basename(get_permalink($post_id));

	// 	if ($_GET['post'] == get_option('page_on_front')) {
			$prefix = '';

			$meta_boxes[] = [
				'title'      => esc_html__( 'Untitled Field Group', 'online-generator' ),
				'id'         => 'home_admin',
				'post_types' => ['page'],
				'context'    => 'after_title',
				'autosave'   => true,
				'fields'     => [
					[
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'Header Image', 'english' ),
						'id'               => 'header_image',
					],
					[
						'type' 			   => 'wysiwyg',
						'name'             => esc_html__( 'Header Description', 'english' ),
						'id'               => 'header_text_description',
					],
					[
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'Social Events  Image', 'english' ),
						'id'               => 'social_events_image',
					],
					[
						'type' 			   => 'textarea',
						'name'             => esc_html__( 'Social Events Description', 'english' ),
						'id'               => 'social_events_text_description',
					],
					[
						'type' 			   => 'post',
						'name'             => esc_html__( 'Social Event Button Link to', 'english' ),
						'id'               => 'social_events_href',
						'post_type'        => 'page',
						'field_type'        => 'select',
					],
					[
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'Corporate & Goverment Event Image', 'english' ),
						'id'               => 'corporate_goverment_image',
					],
					[
						'type' 			   => 'textarea',
						'name'             => esc_html__( 'Corporate & Goverment Event Description', 'english' ),
						'id'               => 'corporate_goverment_text_description',
					],
					[
						'type' 			   => 'post',
						'name'             => esc_html__( 'Corporate & Goverment Event Button Link to', 'english' ),
						'id'               => 'corporate_goverment_href',
						'post_type'        => 'page',
						'field_type'        => 'select',
					],
					[
                        'type' => 'image_advanced',
                        'name' => esc_html__( 'Client Logo', 'english' ),
                        'id'   => 'client_logo',
                    ],
				],
			];
		// }
		return $meta_boxes;
	// }
}

add_filter( 'rwmb_meta_boxes', 'contact_meta_boxes' );
function contact_meta_boxes( $meta_boxes ) {
	// if(isset($_GET['post'])){
	// 	$post_id = $_GET['post'];
	// 	$slug = basename(get_permalink($post_id));

	// 	if ($_GET['post'] == get_option('page_on_front')) {
			$prefix = '';

			$meta_boxes[] = [
				'title'      => esc_html__( 'Page - Contact', 'online-generator' ),
				'id'         => 'contact_us_admin',
				'post_types' => ['page'],
				'context'    => 'after_title',
				'autosave'   => true,
				'fields'     => [
					[
						'type' => 'text',
						'name' => esc_html__( 'E-mail', 'english' ),
						'id'   => $prefix . 'email_text',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Instagram Username', 'english' ),
						'id'   => $prefix . 'instagram_username_text',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Instagram Link', 'english' ),
						'id'   => $prefix . 'instagram_link_text',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Nomor Whatsapp', 'english' ),
						'id'   => $prefix . 'whatsapp_text',
						'desc' => esc_html__( 'ex : 830234234 (tanpa +62 atau tanpa 0 diawal )', 'online-generatoasdr' ),
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Linkedin Name', 'english' ),
						'id'   => $prefix . 'linkedin_name_text',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Linkedin Link', 'english' ),
						'id'   => $prefix . 'linkedin_link_text',
					],
					[
						'type' => 'textarea',
						'name' => esc_html__( 'Address', 'english' ),
						'id'   => 'address_text_description',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Address City', 'english' ),
						'id'   => $prefix . 'city_text_description',
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Address Country', 'english' ),
						'id'   => $prefix . 'country_text_description',
					],
					[
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'See Our Events Image', 'english' ),
						'id'               => 'see_event',
					],
				],
			];
		// }
		return $meta_boxes;
	// }
}

add_filter( 'rwmb_meta_boxes', 'about_meta_boxes' );
function about_meta_boxes( $meta_boxes ) {
	// if(isset($_GET['post'])){
	// 	$post_id = $_GET['post'];
	// 	$slug = basename(get_permalink($post_id));

	// 	if ($_GET['post'] == get_option('page_on_front')) {
			$prefix = '';

			$meta_boxes[] = [
				'title'      => esc_html__( 'Page - About Us', 'online-generator' ),
				'id'         => 'about_us_admin',
				'post_types' => ['page'],
				'context'    => 'after_title',
				'autosave'   => true,
				'fields'     => [
					[
						'type' => 'textarea',
						'name' => esc_html__( 'Short Description', 'english' ),
						'id'   => 'short_desc_text',
					],
					[
						'type' => 'textarea',
						'name' => esc_html__( 'More Description', 'english' ),
						'id'   => 'more_desc_text',
					],
					[
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'Header Image', 'english' ),
						'id'               => 'header_about_image',
					],
					[
                        'type' => 'image_advanced',
                        'name' => esc_html__( 'Gallery', 'english' ),
                        'id'   => 'gallery',
                    ],
                    [
						'type' 			   => 'single_image',
						'name'             => esc_html__( 'footer_image', 'english' ),
						'id'               => 'footer_image',
					],
				],
			];
		// }
		return $meta_boxes;
	// }
}


add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	foreach ( $meta_boxes as $k => $meta_box ) {
		if ( $meta_box['id'] === 'home_admin' ) {
			if(isset($_GET['post'])){
				if ($_GET['post'] != get_option('page_on_front')) {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		if ( $meta_box['id'] === 'contact_us_admin' ) {
			if(isset($_GET['post'])){
				if ($slug = basename(get_permalink($_GET['post'])) != 'contact-us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		if ( $meta_box['id'] === 'about_us_admin' ) {
			if(isset($_GET['post'])){
				if ($slug = basename(get_permalink($_GET['post'])) != 'about-us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
	}

    return $meta_boxes;
} );
?>