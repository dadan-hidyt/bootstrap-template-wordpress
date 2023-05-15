<?php
include get_template_directory()."/classess/Post.php";
function load_partial( string $filename ) : void {
    $file = get_template_directory()."/template_part//".$filename.'.php';
    if ( file_exists($file) ) {
        require_once $file;
    }
}
function load_page( string $filename ) : void {
    $file = get_template_directory()."/pages//".$filename.'.php';
    if ( file_exists($file) ) {
        require_once $file;
    }
}