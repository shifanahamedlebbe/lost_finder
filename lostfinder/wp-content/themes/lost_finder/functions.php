<?php 


	// WordPress Titles
	add_theme_support( 'title-tag' );

	// Add scripts and stylesheets
	if (!function_exists('mh_magazine_lite_image_sizes')) {
		function startwordpress_scripts() {
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
			wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
			//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
		}
	}

	add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

	// Custom Post Type
	function create_my_custom_post() {
		register_post_type('my-custom-post',
				array(
				'labels' => array(
						'name' => __('My Custom Post'),
						'singular_name' => __('My Custom Post'),
				),
				'public' => true,
				'has_archive' => true,
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
					  'custom-fields'
				)
		));
	}
	add_action('init', 'create_my_custom_post');

	add_theme_support( 'post-thumbnails' );
?>