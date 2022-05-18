<?php
if( have_rows('page_builder') ):
    while ( have_rows('page_builder') ) : the_row();
        if( get_row_layout() == 'home_hero' ):
        include(get_template_directory().'/template-parts/layouts/home-hero.php');
        elseif( get_row_layout() == 'intro' ):
        include(get_template_directory().'/template-parts/layouts/intro.php');
        endif;
    endwhile;
endif;
?>