<?php
/*
Plugin Name: Add T.F JS
Plugin URI: https://github.com/Bradley-D/add-tf-js/
Description: Adds the required Trailforks JavaScript to the footer on any page.
Version: 1.0.0
Author: Bradley Davis
Author URI: https://bradley-davis.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Text Domain: addtfjs
WC requires at least: 3.4.0
WC tested up to: 3.4.5
@author		Bradley Davis
@package	Add_TF_JS
@since		1.0
Add T.F JavaScript allows you to Adds the required Trailforks JavaScript to the footer on any page.
Copyright (C) 2014
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

/**
 * Activate the require function.
 *
 * @since 1.0.0
 */
add_tf_js_controller();

/**
 * Add controller class.
 *
 * @since 1.0.0
 */
function add_tf_js_controller() {
	require_once plugin_dir_path( __FILE__ ) . 'controller/class-add-tf-js.php';
}
