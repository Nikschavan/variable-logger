<?php
/**
 * Plugin Name: Variable Logger
 * Description: Replacement for print_r() and var_dump()
 * Version: 0.1-alpha
 * Author: Nikhil Chavan
 */

require_once 'vendor/autoload.php';

/**
 * Replacement for print_r & var_dump.
 *
 * @param mixed $var
 * @param bool $dump. (default: false)
 */
function vl( $var, $dump = 0 ) {
	dump( $var );
}