<footer class="footer">
    <div class="container">
  <div class="footer__top pt-5 pb-5 border-bottom border-1 border-red">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-6 col-lg-3 text-center text-md-start">
              <div class="footer__col">
                <?php 
                  wp_nav_menu(
                    array(
                      'menu' => 'Footer Column2',
                      'theme_location' => 'footer2',
                      'container' => false,
                      'menu_class' => 'footer-col-list'
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
                      'menu_class' => 'footer-col-list'
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
                        'menu_class' => 'footer-col-list'
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
                        'menu_class' => 'footer-col-list'
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
          <p class="p-footer text-center text-md-start">© AHR Group Limited <?php echo date('Y');?></p>
        </div>
        <div class="col-md-4">
          <p class="p-footer text-center"><span>Terms and Conditions</span> <a href="#" class="d-inline-block">Privacy Policy</a></p>
        </div>
        <div class="col-md-4">
          <p class="p-footer text-center text-md-end">SITE BY STAXO</p>
        </div>
      </div>
    </div>  
  </div>  
  </div> 
</footer>
<?php wp_footer(); ?> 

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>


