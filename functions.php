<?php



function newtool_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('newtool-bootstrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('newtool-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('newtool-aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('newtool-style', get_template_directory_uri() . "/style.css", array("newtool-bootstrap-style"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'newtool_register_styles');


function newtool_register_scripts()
{
    wp_enqueue_script('newtool-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
    wp_enqueue_script('newtool-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('newtool-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('newtool-bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('newtool-aos-script', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '1.0', true);
    wp_enqueue_script('newtool-main-script', get_template_directory_uri() . "/newtool.js", array(), '1.0', true);
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('newtool-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'newtool_register_scripts');
