<?php
    function chase_armstrong_files() {
        wp_enqueue_style('roboto_font', '//fonts.googleapis.com/css?family=Roboto:100,300,400');
        wp_enqueue_style('open_sans_font', '//fonts.googleapis.com/css?family=Open+Sans:300,600');
        wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'chase_armstrong_files');
?>
