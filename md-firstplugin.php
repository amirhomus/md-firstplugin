<?php 
/*
Plugin Name: Ringo
Plugin URI: http://maydizain.ir
Description: My First Plugin
Author: MayDizain
Version: 1.0
Author URI: http://maydizain.ir
Text-Domain: md-firstplugin
*/

function md_ringo_setup_post_type() {
	
	$args = array(
		'label'              => 'books',
		'public'             => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}
add_action('init','md_ringo_setup_post_type');


function md_ringo_install(){
	
	md_ringo_setup_post_type();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__,'md_ringo_install');