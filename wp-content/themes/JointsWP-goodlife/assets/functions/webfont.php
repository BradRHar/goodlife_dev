<?php
// Adds Google Web Fonts 
//http://webdesignfromscratch.com/wordpress/using-google-web-fonts-with-wordpress-the-right-way/
 function load_fonts() {
            wp_register_style('googleFont1', 'https://fonts.googleapis.com/css?family=Open+Sans');
            wp_enqueue_style( 'googleFont1');
        }
    
add_action('wp_print_styles', 'load_fonts');