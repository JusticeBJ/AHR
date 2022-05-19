<?php
get_header();
?>

<?php 

    $bg_image = get_sub_field('image');
    if($bg_image){
        $bg_imageURL = wp_get_attachment_image_url( $image, 'large');
    }
    else{
        $bg_imageURL = get_template_directory_uri().'/assets/images/The-Spine-royal-college-of-physicians 1.PNG';
    }
?>
<section class="hero p-3">
  <div class="container-fluid g-0">
    <div class="hero__content d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo $bg_imageURL; ?>');">
      <h1 class="">CASE STUDIES Archive</h1>
      <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitasse mattis congue.</p>
    </div>
  </div>
</section>

<?php
get_footer();
?>