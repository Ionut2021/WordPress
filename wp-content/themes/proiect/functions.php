<<<<<<< HEAD
<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css' );

    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap', false ); 
}
=======
<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css' );

    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap', false ); 
}
>>>>>>> e25bb4b18ec8a00d5463c01a15b11a0122a3ce0c
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );