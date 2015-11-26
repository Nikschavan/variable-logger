<?php
/**
 * Plugin Name: Error Logger
 * Description: Replacement for print_r() and var_dump()
 * Version: 0.1-alpha
 * Author: Nikhil Chavan
 */
function el( $var ) {
	get_style(); 
	echo "<pre class='el_pre'><xmp>";
	if ( is_array( $var ) ) {
		print_r( $var );
	} else {
		echo $var;
	}
	echo "</xmp></pre>";
}

function el_dump( $var ) {
	get_style();
	echo "<pre class='el_pre'><xmp>";
	var_dump( $var );
	echo "</xmp></pre>";
}

function get_style() {
	?>
	<style type="text/css">
		.el_pre {
			text-align: left;
		}
	</style>
	<?php
}