<?php
get_header();
?>

<?php 
    if(get_the_post_thumbnail_url()){
      $bg_imageURL = get_the_post_thumbnail_url();
    }
    else{
        $bg_imageURL = get_template_directory_uri().'/assets/images/The-Spine-royal-college-of-physicians 1.PNG';
    }
?>
<section class="hero p-3">
  <div class="container-fluid g-0">
    <div class="hero__content d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo $bg_imageURL; ?>');">
      <h1 class=""><?php echo the_title(); ?></h1>
        <?php
        if(strlen(get_the_excerpt()) < 90){
          $text= get_the_excerpt();
        }
        else{
          $string= substr(get_the_excerpt(), 0, 85);
          $words = explode( " ", $string );
          array_splice( $words, -1 );
          $text= implode( " ", $words );
        }
        ?>
      <p class="p-large"><?php echo $text; ?></p>
    </div>
  </div>
</section>
<section class="modules pt-2 pb-2">
      <?php
        $counter= 0;
        if( have_rows('modules') ):
          while( have_rows('modules') ) : the_row();
            $loop= $counter % 2;
            $module_bg_color= '';
            $row_direction= 'flex-md-row-reverse';
            $col_text_padding= 'pe-5';
            if($loop == 1){
              $module_bg_color= 'bg-lightgrey';
              $row_direction= '';
              $col_text_padding= 'ps-5';
            }?>
            <div class="modules__module pt-5 pb-5 <?php echo $module_bg_color; ?>">
              <div class="container">
                <div class="row <?php echo $row_direction; ?>">
                  <div class="col-md-4">
                    <figure>                
                      <?php 
                        $image = get_sub_field('image');
                        if($image){
                            $imageURL = wp_get_attachment_image_url( $image, 'large');
                        }
                        else{
                          $imageURL = get_template_directory_uri().'/assets/images/Screenshot 2021-09-29 at 15.23 2.PNG';
                        }
                      ?>
                      <img src="<?php echo $imageURL; ?>" alt="Case Study Module Image">
                    </figure>
                  </div>
                  <div class="col-md-8  d-flex flex-column justify-content-center <?php echo $col_text_padding; ?>">
                    <h4><?php echo get_sub_field('module_title'); ?></h4>
                    <div class="modules__description  ps-4 mt-4 mb-4 border-start border-4 border-red">
                      <?php echo get_sub_field('module_description'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          // End loop.
          $counter++;
          endwhile;
        else :
            // Do something...
        endif;
      ?>
</section>
<section class="three-columns bg-red pt-5 pb-5">
  <div class="container">
    <h4>OTHER CASE STUDIES</h4>
    <div class="row mt-4">
        <?php 
        // args
        $args = array(
          'post_type'	=> 'case-studies',
          'posts_per_page'=>  3,
          'post__not_in' => array($post->ID)
        );
        // query
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-4">
                <article class="case-study pt-3 pb-3">
                    <figure class="d-flex justify-content-center align-items-center">
                        <?php
                        if(get_the_post_thumbnail_url()){
                            the_post_thumbnail();
                        }
                        else{
                            echo '<span class="d-flex justify-content-center align-items-center">No Image</span>';
                        }
                        ?>
                    </figure>
                    <h5><?php echo get_the_title(); ?></h5>
                    <div class="case-study__p ps-4 mt-4 mb-4 border-start border-4 border-white">
                        <?php
                        if(strlen(get_the_excerpt()) < 130){
                            $text= get_the_excerpt();
                        }
                        else{
                            $string= substr(get_the_excerpt(), 0, 130);
                            $words = explode( " ", $string );
                            array_splice( $words, -1 );
                            $text= implode( " ", $words );
                        }
                        ?>
                        <p><?php echo $text; ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="button button--white" role="button">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                </article>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>