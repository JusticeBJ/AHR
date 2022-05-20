
<?php 
    $bg_image = get_sub_field('image');
    if($bg_image){
        $bg_imageURL = wp_get_attachment_image_url( $image, 'large');
    }
    else{
        $bg_imageURL = get_template_directory_uri().'/assets/images/The-Spine-royal-college-of-physicians 1.PNG';
    }
?>
<section class="home-hero p-3">
  <div class="container-fluid g-0">
    <div class="home-hero__content d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo $bg_imageURL; ?>');">
      <h1 class="m-width: 782px"><?php echo get_sub_field('title'); ?></h1>
      <p class="p-large"><?php echo get_sub_field('text'); ?></p>
      <a href="<?php echo get_sub_field('button_link'); ?>" class="button-big button-big--red" role="button"><?php echo get_sub_field('button_text'); ?><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
  <div class="home-hero__brand d-flex position-absolute bottom-0 start-0 ps-4">
  <?php
    if( have_rows('brands') ):
        while( have_rows('brands') ) : the_row();
        ?>
          <figure class="p-2">
            <?php 
                $image = get_sub_field('image');
                if($image){
                    $imageURL = wp_get_attachment_image_url( $image, 'large');
                }
                else{
                    $imageURL = get_template_directory_uri().'/assets/images/image 3.PNG';
                }
            ?>
            <img src="<?php echo $imageURL; ?>" class="img-fluid"> 
          </figure>
        <?php
        endwhile;
    // No value.
    else :
        // Do something...
    endif;
    ?>
  </div>
</section>

