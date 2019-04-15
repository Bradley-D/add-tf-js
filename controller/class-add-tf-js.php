<?php
/**
 * The controller brings it all together.
 *
 * @package Add_TF_JS/controller
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * Add_TF_JS class pulls all the things together.
 *
 * @since 1.0.0
 */
class Add_TF_JS {

	/**
	 * The constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->add_tf_js_controller_public();
		// $this->add_tf_js_controller_admin();
	}

	/**
	 * Require public facade.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_controller_public() {
		require_once 'public/class-controller-public.php';
	}

	/**
	 * Require admin facade.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_controller_admin() {
		require_once 'public/class-controller-admin.php';
	}

}

/**
 * Instantiate the class.
 *
 * @since 1.0.0
 */
$add_tf_js = new Add_TF_JS();
