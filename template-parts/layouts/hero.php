
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
      <h1 class=""><?php echo get_sub_field('title')?></h1>
        <?php
        if(strlen(get_sub_field('intro_text')) < 90){
          $text= get_sub_field('intro_text');
        }
        else{
          $string= substr(get_sub_field('intro_text'), 0, 90);
          $words = explode( " ", $string );
          array_splice( $words, -1 );
          $text= implode( " ", $words );
        }
        ?>
      <p class="p-large"><?php echo $text; ?></p>
    </div>
  </div>
</section>