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

function bb_custom_module() {
  if ( class_exists( 'FLBuilder' ) ) {
      // Include your custom modules here.
	  require_once("includes/bb-custom-module.php")
  }
}
add_action( 'init', 'bb_custom_module' );