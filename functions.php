<?php


add_action("init", function () {
    remove_action('wp_head', 'wp_generator');
    echo "lorem ipsum";
});


function enqueue_styles()
{


    // wp_register_style('screen-style', get_template_directory_uri() . '/css_path/screen.css', array(), '1', 'all');
    // wp_enqueue_style('screen-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');



function enqueue_scripts()
{

    // wp_register_script('custom-script', get_template_directory_uri() . '/js_path/customscript.js', array('jquery'), '1', false);
    // wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
