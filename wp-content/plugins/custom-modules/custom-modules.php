<?php
/**
 * Plugin Name: My Custom Modules
 * Plugin URI: http://www.mywebsite.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );

function my_load_module_examples() {
	if ( class_exists( 'FLBuilder' ) ) {
		require_once 'my-module/my-heading.php';
	}
}
add_action( 'init', 'my_load_module_examples' );

