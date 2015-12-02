<?php
/**
 * Plugin Name: Variable Logger
 * Description: Replacement for print_r() and var_dump()
 * Version: 0.1-alpha
 * Author: Nikhil Chavan
 */
function vl( $var, $dump = 0 ) {
	?>

	<style type="text/css">
		.el_pre {
			text-align: left;
			margin: 30px 15px;
			padding: 1em;
			border: 0px;
			outline: 0px;
			font-size: 14px;
			font-family: monospace;
			vertical-align: baseline;
			max-width: 100%;
			overflow: auto;
			color: rgb(248,248,242);
			direction: ltr;
			word-spacing: normal;
			line-height: 1.5;
			border-radius: 0.3em;
			word-wrap: normal;
			letter-spacing: 0.266667px;
			background: rgb(61,69,75);
		}
	</style>

	<?php
	
	echo "<pre class='el_pre'><xmp>";
	if ( true == $dump ) {
		var_dump( $var );
	} else {

		if ( is_array( $var ) || is_object( $var ) ) {
			print_r( $var );
		} else {
			echo $var;
		}

	}
	echo "</xmp></pre>";
}