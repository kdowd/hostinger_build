<?php

function create_custom_image_sizes()
{
    // based upon image 280 x470
    add_image_size('product-packshot-large', 280, 470);
    add_image_size('product-packshot-small', 140, 235);
}

#add_action('after_setup_theme', 'create_custom_image_sizes');