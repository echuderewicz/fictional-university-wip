<?php


function university_files(){
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

//wp_enqueue_scripts is a "moment" we tack onto....in the below
//case we are loading the css stylesheet.
    
add_action("wp_enqueue_scripts", "university_files");

?>