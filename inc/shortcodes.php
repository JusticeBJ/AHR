<?php
// [year]
function year_funct() {
    echo date('Y');
}
add_shortcode( 'year', 'year_funct' );   
