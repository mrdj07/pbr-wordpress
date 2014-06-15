<?php

function pbr_assets ()
{

	// ENQUEUE STYLES
	wp_enqueue_latest_style('main', get_template_directory_uri() . '/css/main.css', array(), null, 'screen');
			

	// ENQUEUE SCRIPTS	
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core'); 
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', '', '1.0', false );
	wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/js/vendor/jquery.nicescroll.min.js', '', '1.0', false );	
}

add_action('wp_enqueue_scripts', 'pbr_assets', 100);


function wp_enqueue_latest_script($handle, $src, $deps = array(), $ver = false, $in_footer = false ) {

	$src_path = str_replace(get_template_directory_uri(), get_template_directory(), $src);
	$file_time = filemtime($src_path);
	wp_enqueue_script($handle, $src."?t=".$file_time, $deps, $ver, $in_footer);
}

function wp_enqueue_latest_style($handle, $src, $deps = array(), $ver = false, $media = "all") {

	$src_path = str_replace(get_template_directory_uri(), get_template_directory(), $src);
	$file_time = filemtime($src_path);
	wp_enqueue_style($handle, $src."?t=".$file_time, $deps, $ver, $media);
}