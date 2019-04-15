<?php
/**
 * The public controller brings it all together.
 *
 * @package Add_TF_JS/controller
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * .
 *
 * @since 1.0.0
 */
class Controller_Public {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->add_tf_js_admin_activate();
	}

	/**
	 * 
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_admin_activate() {
		add_action( 'wp_footer', array( $this, 'add_tf_js_enqueue_js' ) );
	}

	/**
	 * Enqueue TF JS the WordPress way.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_enqueue_js() {
		?>
		<script type="text/javascript">
			var script = document.createElement("script"); script.setAttribute("src", "https://es.pinkbike.org/ttl-86400/sprt/j/trailforks/widget.js"); document.getElementsByTagName("head")[0].appendChild(script); var widgetCheck = false;
		</script>
		<?php
	}
}

/**
 * Instantiate.
 *
 * @since 1.0.0
 */
$controller_public = new Controller_Public();
