<?php
// Inclure les Assets
	include_once("inc/assets.php");

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'gallery-thumb', 240, 140, true ); //(cropped)
}
?>
