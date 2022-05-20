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
        elseif( get_row_layout() == 'our_people' )://---------------------------------------------------
        include(get_template_directory().'/template-parts/layouts/our-people.php');
        elseif( get_row_layout() == 'campaigns' ):
        include(get_template_directory().'/template-parts/layouts/campaigns.php');
        elseif( get_row_layout() == 'pcko' ):
        include(get_template_directory().'/template-parts/layouts/pcko.php');
        elseif( get_row_layout() == 'architecture' ):
        include(get_template_directory().'/template-parts/layouts/architecture.php');
        elseif( get_row_layout() == 'sustainable_design' ):
        include(get_template_directory().'/template-parts/layouts/sustainable-design.php');
        elseif( get_row_layout() == 'interior_design' ):
        include(get_template_directory().'/template-parts/layouts/interior-design.php');
        elseif( get_row_layout() == 'masterplanning' ):
        include(get_template_directory().'/template-parts/layouts/masterplanning.php');
        elseif( get_row_layout() == 'landscape_design' ):
        include(get_template_directory().'/template-parts/layouts/landscape-design.php');
        elseif( get_row_layout() == 'bim' ):
        include(get_template_directory().'/template-parts/layouts/bim.php');
        elseif( get_row_layout() == 'scan_to_bim' ):
        include(get_template_directory().'/template-parts/layouts/scan-to-bim.php');
        elseif( get_row_layout() == 'civic_&_community' ):
        include(get_template_directory().'/template-parts/layouts/civic-&-community.php');
        elseif( get_row_layout() == 'education' ):
        include(get_template_directory().'/template-parts/layouts/education.php');
        elseif( get_row_layout() == 'health' ):
        include(get_template_directory().'/template-parts/layouts/health.php');
        elseif( get_row_layout() == 'office_&_workplace' ):
        include(get_template_directory().'/template-parts/layouts/office-&-workplace.php');
        elseif( get_row_layout() == 'residential' ):
        include(get_template_directory().'/template-parts/layouts/residential.php');
        elseif( get_row_layout() == 'retail' ):
        include(get_template_directory().'/template-parts/layouts/retail.php');
        elseif( get_row_layout() == 'sports' ):
        include(get_template_directory().'/template-parts/layouts/sports.php');
        elseif( get_row_layout() == 'technology' ):
        include(get_template_directory().'/template-parts/layouts/technology.php');
        elseif( get_row_layout() == 'transportation' ):
        include(get_template_directory().'/template-parts/layouts/transportation.php');
        endif;
    endwhile;
endif;
?>