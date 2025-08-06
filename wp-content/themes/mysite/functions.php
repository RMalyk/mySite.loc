<?php
require_once( get_stylesheet_directory().'/controllers/main.php' );

// Debugging
function debug_data ($val,$exit=false) {
    echo '<pre>';
    print_r ($val);
    echo '</pre>';

    if($exit) exit();
}

