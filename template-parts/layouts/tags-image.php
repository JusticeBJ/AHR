<section class="tags-image">
    <div class="container">
        <h2 class="sub-title f30">Web Development Services</h2>
        <div class="row" >
            <div class="col-md-4">
                <div class="tags-image__tags">
                <!-- https://www.hwebsitedesign.co.za/our-services -->
                    <p class="tag--pink on-screen slide-up">Professional Website</p>
                    <p class="tag--grey on-screen slide-up">Ecommerce Website</p>
                    <p class="tag--green on-screen slide-up">SEO Services</p>
                    <p class="tag--red on-screen slide-up">Digital Marketing</p>
                    <p class="tag--black on-screen slide-up">Speed Up Website</p>
                </div> 
            </div>
            <div class="col-md-8">
                <figure class="tags-image__img">
                    <div class="tags-image__screen">
                        <span>Need more information?<br>Click the Button</span>
                        <a href="#" class="button--black-red" role="button" tabindex="0">Read More<i class="fas fa-arrow-alt-circle-right"></i></a>
                    </div>
                    <?php
                        $image = get_sub_field('image');
                        if( !empty($image) ){
                            $size = 'large';
                            $image = $image['sizes'][ $size ];
                        }
                        else{
                            $image= get_template_directory_uri().'/assets/images/Laptop.png';
                        }
                    ?>
                    <img src="<?php echo $image; ?>" alt="Laptop">
                </figure> 
            </div>
        </div>
        <div class="tags-image__bottom on-screen slide-up">
            <p class="tag--pink">Domain Registration</p>
            <p class="tag--grey">Website Hosting</p>
            <p class="tag--green">Website Analytics</p>
            <p class="tag--red">Mobile Appplication</p>
        </div> 
    </div>
    <div id="this-cursor"></div>
</section>