<?php
//include header
get_header();
//header
if ( !is_single() ) {
    load_page('home');
}
get_footer();
?>
