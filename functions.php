<?php
function sloneczne_chat_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'sloneczne_chat_styles');