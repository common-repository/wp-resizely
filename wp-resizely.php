<?php
/**
 * Plugin Name: WP-Resizely
 * Plugin URI: https://resize.ly
 * Description: Dynamic image resizing.
 * Author: Usability Dynamics, Inc.
 * Version: 0.1.2
 * Author URI: http://usabilitydynamics.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 */

/** If we have our local debugging file */
if( file_exists( __DIR__ . '/localDebug.php' ) ){
  require_once( __DIR__ . '/localDebug.php' );
}

/** Require our autoloader */
require_once( __DIR__ . '/vendor/autoload.php' );

/** Init */
new UsabilityDynamics\WP_Bootstrap( 'UsabilityDynamics\WP_Resizely\Core' );