<?php
if( have_rows('page_builder') ):
    while ( have_rows('page_builder') ) : the_row();
        if( get_row_layout() == 'home_hero' ):
        include(get_template_directory().'/template-parts/layouts/home-hero.php');
        elseif( get_row_layout() == 'media_slider' ):
        include(get_template_directory().'/template-parts/layouts/media-slider.php');
        elseif( get_row_layout() == 'hero' ):
        include(get_template_directory().'/template-parts/layouts/hero.php');
        elseif( get_row_layout() == 'sample_case_studies' ):
        include(get_template_directory().'/template-parts/layouts/sample-case-studies.php');
        elseif( get_row_layout() == 'text_video' ):
        include(get_template_directory().'/template-parts/layouts/text-video.php');
        elseif( get_row_layout() == 'cta' ):
        include(get_template_directory().'/template-parts/layouts/cta.php');
        elseif( get_row_layout() == 'custom_section' ):
        include(get_template_directory().'/template-parts/layouts/custom-section.php');
        endif;
    endwhile;
endif;
?>