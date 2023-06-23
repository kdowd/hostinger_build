<?php

function cleverfolk_scripts()
{
	// wp_enqueue_style('cf-style', get_stylesheet_uri());
	wp_enqueue_style('cf-main-style', CODE_BASE . '/css/root.min.css', [], CURRENT_VERSION);
	// wp_enqueue_script('cf-main-js', CODE_BASE . '/js/main.js', [], CURRENT_VERSION);
	// wp_enqueue_script('cf-axios-js', CODE_BASE . '/js/axios.js', [], CURRENT_VERSION);
	// wp_enqueue_script('cf-rest-js', CODE_BASE . '/js/resty.js', [], CURRENT_VERSION);
}

add_action('wp_enqueue_scripts', 'cleverfolk_scripts');
