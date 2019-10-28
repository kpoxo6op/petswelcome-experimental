<?php

add_action( 'init', function() {
  register_extended_post_type( 'petplace', [

  ]);

  register_extended_taxonomy( 'petplace-type', 'petplace', [
		'meta_box' => 'radio', [
		  'singular' => 'Category',
		  'plural'   => 'Categories',
		  'slug'     => 'categories',
	  ]
		
	] );

	register_extended_taxonomy( 'tag', 'petplace', [
		'hierarchical' => false,
	] );



} );


/*
* example
*/
/*
add_action( 'init', function() {
	register_extended_post_type( 'story', [

		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		# Show all posts on the post type archive:
		'archive' => [
			'nopaging' => true,
		],

		# Add the post type to the 'Recently Published' section of the dashboard:
		'dashboard_activity' => true,

		# Add some custom columns to the admin screen:
		'admin_cols' => [
			'story_featured_image' => [
				'title'          => 'Illustration',
				'featured_image' => 'thumbnail'
			],
			'story_published' => [
				'title_icon'  => 'dashicons-calendar-alt',
				'meta_key'    => 'published_date',
				'date_format' => 'd/m/Y'
			],
			'story_genre' => [
				'taxonomy' => 'genre'
			],
		],

		# Add some dropdown filters to the admin screen:
		'admin_filters' => [
			'story_genre' => [
				'taxonomy' => 'genre'
			],
			'story_rating' => [
				'meta_key' => 'star_rating',
			],
		],

	], [

		# Override the base names used for labels:
		'singular' => 'Story',
		'plural'   => 'Stories',
		'slug'     => 'stories',

	] );

	register_extended_taxonomy( 'genre', 'story', [

		# Use radio buttons in the meta box for this taxonomy on the post editing screen:
		'meta_box' => 'radio',

		# Add a custom column to the admin screen:
		'admin_cols' => [
			'updated' => [
				'title_cb'    => function() {
					return '<em>Last</em> Updated';
				},
				'meta_key'    => 'updated_date',
				'date_format' => 'd/m/Y'
			],
		],

	] );
} );*

*/