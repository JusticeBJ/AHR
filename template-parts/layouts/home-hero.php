
<section class="home-hero">
  <!-- Swiper -->
  <div class="home-hero__slider swiper-container">
    <div class="swiper-wrapper">
      <?php
        $image = get_template_directory_uri().'/assets/images/company.png';
      ?>
      <div class="swiper-slide">
        <div class="home-hero__img" style="background-image:url(<?php echo $image;?>)">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="home-hero__img" style="background-image:url(<?php echo $image;?>)">
        </div>
      </div>
    </div>  
    <div class="swiper-pagination"></div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
  </div>
  <div class="container home-hero__text">
    <div class="row" >
      <div class="col-md-12">
        <div class="home-hero__titles">
          <h1 class="f24">Welcome to</h1>
          <h1 class="f80">ultimate supreme products</h1>
        </div>
        <div class="home-hero__p">
          <p>
            Ultimate Supreme Products (USP) is a 100% BEE compliant, privately owned business. 
            USP is an electronic infrastructure and systems company serving private sector as 
            well as metros. We specialise in optic fibre, and Fibre based CCTV solutions 
            installations. We are an accredited Vumatel fibre optic installer.
          </p>
        </div> 
      </div>
    </div>
  </div>
</section>

