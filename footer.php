<footer class="footer">
    <div class="container">
      <div class="footer__top pt-5 pb-5 border-bottom border-1 border-red">
          <div class="row">
            <div class="col-md-3">
              <div class="footer__col text-center text-md-start">
                <figure>
                  <?php 
                    $image = get_sub_field('image');
                    if($image){
                        $imageURL = wp_get_attachment_image_url( $image, 'large');
                    }
                    else{
                        $imageURL = get_template_directory_uri().'/assets/images/logo-black-2.PNG';
                    }
                  ?>
                  <img src="<?php echo $imageURL; ?>" class="footer-logo"> 
                </figure>
                <div class="media-slider__icons text-center text-md-start mb-5">
                  <a href="<?php echo get_field('instagram_link','option'); ?>" target="_blank" class="me-2">
                      <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a href="<?php echo get_field('linkedin_link','option'); ?>" target="_blank" class="me-2">
                      <i class="fa-brands fa-linkedin"></i>
                  </a>
                  <a href="<?php echo get_field('twitter_link','option'); ?>" target="_blank" class="me-2">
                      <i class="fa-brands fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                  <div class="footer__col mb-5">
                    <?php 
                      wp_nav_menu(
                        array(
                          'menu' => 'Footer Column2',
                          'theme_location' => 'footer2',
                          'container' => false,
                          'menu_class' => 'footer-col-list text-center text-md-start ps-0'
                        )
                      );
                    ?>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                  <div class="footer__col">
                    <?php 
                      wp_nav_menu(
                        array(
                          'menu' => 'Footer Column3',
                          'theme_location' => 'footer3',
                          'container' => false,
                          'menu_class' => 'footer-col-list ps-0'
                        )
                      );
                    ?>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-none d-md-block">
                  <div class="footer__col">
                      <?php 
                        wp_nav_menu(
                          array(
                            'menu' => 'Footer Column4',
                            'theme_location' => 'footer4',
                            'container' => false,
                            'menu_class' => 'footer-col-list ps-0'
                          )
                        );
                      ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-none d-md-block">
                  <div class="footer__col">
                      <?php 
                        wp_nav_menu(
                          array(
                            'menu' => 'Footer Column5',
                            'theme_location' => 'footer5',
                            'container' => false,
                            'menu_class' => 'footer-col-list ps-0'
                          )
                        );
                      ?>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="footer__bottom pt-4 pb-5">
          <div class="row">
            <div class="col-md-4">
              <p class="p-footer text-center text-md-start"><?php echo get_field('footer_left_text','option'); ?></p>
            </div>
            <div class="col-md-4">
              <p class="p-footer text-center"><span><?php echo get_field('footer_center_text','option'); ?></span> <a href="#" class="d-inline-block">Privacy Policy</a></p>
            </div>
            <div class="col-md-4">
              <p class="p-footer text-center text-md-end"><?php echo get_field('footer_right_text','option'); ?></p>
            </div>
          </div>
        </div>  
      </div>  
  </div> 
  <div class="chat-box">
    <?php 
      $imageURL = get_template_directory_uri().'/assets/images/chat-icon.svg';
    ?>
    <a href="#">
      <img src="<?php echo $imageURL; ?>" alt="Chat Box">
    </a>
  </div>
</footer>
<?php wp_footer(); ?> 

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>


