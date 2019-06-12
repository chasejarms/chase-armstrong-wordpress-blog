<?php
    function chase_armstrong_files() {
        wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'chase_armstrong_files');
?>