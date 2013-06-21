<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/
*/

require_once('lib/clean.php');  
require_once('lib/enqueue-sass.php'); 
require_once('lib/foundation.php'); 

function reverie_theme_support() {
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie'),
		'utility' => __('Utility Navigation', 'reverie')
	));
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',  // background image default
	    'default-color' => '', // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
}
add_action('after_setup_theme', 'reverie_theme_support');

require_once('includes/lkbg_head.php');
require_once('includes/lkbg_widget.php');
require_once('includes/lkbg_page_bottom.php');
require_once('includes/lkbg_as_post.php');
require_once('includes/lkbg_as_plugin.php');
require_once('includes/lkbg_brand_logo.php');
require_once('includes/lkbg_options_page.php');

?>