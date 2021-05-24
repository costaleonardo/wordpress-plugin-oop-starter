<?php

// Create Class
class object_oriented_skeleton {

	// Constructor
	public function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	// Styles and Scripts
	public function enqueue_scripts() {
		// Styles
		wp_enqueue_style('object_oriented_skeleton', plugins_url('css/style.css', __FILE__), null, '');

		// Scripts
		wp_enqueue_script('object_oriented_skeleton', plugins_url('js/script.js', __FILE__), array('jquery'), '', true);
	}
}

// Add a Global variable if you need to use outside of instantiated scope
Global $object_oriented_skeleton;

// Instantiate
$object_oriented_skeleton = new object_oriented_skeleton();

?>