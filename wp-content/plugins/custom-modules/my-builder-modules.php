/**
 * Plugin Name: Beaver Builder custom modules
 * Plugin URI: http://www.mywebsite.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Kamrul Hasan
 * Author URI: http://www.mywebsite.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );

function my_load_module_examples() {
  if ( class_exists( 'FLBuilder' ) ) {
	require_once 'custom-heading/custom-heading.php';
  }
}
add_action( 'init', 'my_load_module_examples' );