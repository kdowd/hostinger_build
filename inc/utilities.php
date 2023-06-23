<?php

function redirect_to_home()
{
    if (is_search() || is_404()) {
        wp_redirect(home_url());
        exit();
    }
}
#add_action('template_redirect', 'redirect_to_home');



function add_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (is_singular()) {
        $classes[] = 'cf-singlular';
    }

    return $classes;
}

add_filter('body_class', 'add_body_classes');