<?php
/**
 * The admin controller brings it all together.
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
class Controller_Admin {
	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->add_tf_js_admin_activate();
	}

	/**
	 * Activate the add remove actions.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_admin_activate() {}

	/**
	 * Add metabox to page type.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_add_metabox_page() {}

	/**
	 * Callback for metabox function.
	 *
	 * @since 1.0.0
	 */
	public function my_meta_box_callback() {}

	/**
	 * Saves metabox value on publish/update.
	 *
	 * @since 1.0.0
	 */
	public function add_tf_js_metabox_save() {}

}

/**
 * Instantiate.
 *
 * @since 1.0.0
 */
$controller_admin = new Controller_Admin();