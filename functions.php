<?php
function add_styles() {
    wp_enqueue_style('theme', get_stylesheet_uri(), [], 1);
}
add_action( 'wp_enqueue_scripts', 'add_styles');