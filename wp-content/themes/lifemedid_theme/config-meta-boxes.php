<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'lmid_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function lmid_register_meta_boxes( $meta_boxes )
{
	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'lmid_';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'related-links',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Related Links', 'rwmb' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'page' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			// URL
			array(
				'name'  => __( 'URL', 'rwmb' ),
				'id'    => "{$prefix}url",
				'desc'  => __( '', 'rwmb' ),
				'type'  => 'url',
				'std'   => '',
				'clone'   => true
			)
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);//end 1st meta box

	// 2nd meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'custom-sidebar-module',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Custom Side Bar Module', 'rwmb' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'page' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			// Headert
			array(
				'name'  => __( 'Header', 'rwmb' ),
				'id'    => "{$prefix}custom_sidebar_module_header",
				'desc'  => __( '', 'rwmb' ),
				'type'  => 'text',
				'std'   => '',
				'clone'   => false
			),
			// Body
			array(
				'name' => __( 'Textarea', 'rwmb' ),
				'desc' => __( 'Textarea description', 'rwmb' ),
				'id'   => "{$prefix}custom_sidebar_module_body",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
				'clone' => true
			)
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => __( 'Password is required', 'rwmb' ),
					'minlength' => __( 'Password must be at least 7 characters', 'rwmb' ),
				),
			)
		)
	);//end 2nd meta box

	return $meta_boxes;
}


