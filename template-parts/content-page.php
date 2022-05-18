<?php
if( have_rows('page_builder') ):
    while ( have_rows('page_builder') ) : the_row();
        if( get_row_layout() == 'home_hero' ):
        include(get_template_directory().'/template-parts/layouts/home-hero.php');
        elseif( get_row_layout() == 'media_slider' ):
        include(get_template_directory().'/template-parts/layouts/media-slider.php');
        endif;
    endwhile;
endif;
?>