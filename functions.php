<?php

	include_once 'inc/custom-post.php';
	include_once 'inc/widget.php';

	//add_filter('show_admin_bar','__return_false');

	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('team-image',280,260,true);

	register_nav_menus(array(
		'header_menu' => 'This is our header menu',
		'footer_menu' => 'This is footer menu',
	));

	function add_css_js(){


		//load css

		wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0','all');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'3.3.1','all');
		wp_enqueue_style('smartmenus', get_template_directory_uri().'/assets/css/jquery.smartmenus.bootstrap.css',array(),'1.0','all');
		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
		wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');


		// load js

		wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '3.3.1',true);
		wp_enqueue_script('functions', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '1.2.1',true);

	}


	add_action('wp_enqueue_scripts', 'add_css_js');
	
	// wp settings API

	function wp_options_fields(){
		//add_settings_field( $id, $title, $callback, $page, $section, $args );
		
		add_settings_field( 'service_title', 'Service Title', 'service_title', 'general');
		add_settings_field( 'service_desc', 'Service Description', 'service_desc', 'general');

		register_setting('general', 'service_title');
		register_setting('general', 'service_desc');


	}
	add_action('admin_init', 'wp_options_fields');

	
	function service_title(){
		echo "<input  type='text' name='service_title' value='".get_option('service_title')."' />";
	}
	function service_desc(){
		echo "<input  type='text' name='service_desc' value='".get_option('service_desc')."' />";
	}












 ?>