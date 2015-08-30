<?php
// Inclure les Assets
	include_once("inc/assets.php");

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'gallery-thumb', 240, 140, true ); //(cropped)
}
function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );
?>
