<?php 
// include filed
include(get_template_directory(). '/inc/frontend/ch-style.php');
include(get_template_directory(). '/inc/ch-init.php');


// call files or action
add_action( 'wp_enqueue_scripts', 'ch_style_script' );
add_action( 'after_setup_theme', 'ch_init' );