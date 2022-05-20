
<?php 
  $bg_image = get_sub_field('image');
  if($bg_image){
      $bg_imageURL = wp_get_attachment_image_url( $image, 'large');
  }
  else{
    $bg_imageURL = get_template_directory_uri().'/assets/images/The-Spine-royal-college-of-physicians 1.PNG';
  }
?>
<section class="cta p-3">
  <div class="container-fluid g-0">
    <div class="cta__content d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo $bg_imageURL; ?>');">
      <h2 class="mb-5"><?php echo get_sub_field('title')?></h2>
      <p class="p-large mb-5"><?php echo get_sub_field('text'); ?></p>
      <a href="<?php echo get_sub_field('button_link'); ?>" class="button-big button-big--red" role="button"><?php echo get_sub_field('button_text'); ?><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>