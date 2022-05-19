<section class="media-slider pt-5 pb-5">
    <div class="media-slider__media">
        <div class="container-fluid g-0">
            <div class="row  g-0">   
                <div class="col-md-6">Test2</div>  
                <div class="col-md-5">
                    <div class="media-slider__icons">
                        text3
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media-slider__slider">
        <div class="container-fluid g-0 text-center my-3"> 
            <div class="row mx-auto my-auto justify-content-center"> 
                <div id="recipeCarousel" class="carousel slide g-0" data-bs-ride="carousel"> 
                    <div class="carousel-inner" role="listbox"> 
                        <?php 
                            $counter= 0;
                            if(have_rows('slider_images')):
                                while(have_rows('slider_images')):the_row();
                                    $carousel_item_status= '';
                                    if($counter == 0){
                                        $carousel_item_status = 'active';
                                    }
                                    ?>
                                    <div class="carousel-item <?php echo $carousel_item_status; ?>"> 
                                        <div class="col-md-3"> 
                                            <div class="card border border-white">
                                                <div class="card-img"> 
                                                    <?php 
                                                        $image = get_sub_field('image');
                                                        if($image){
                                                            $imageURL = wp_get_attachment_image_url( $image, 'large');
                                                        }
                                                        else{
                                                            $imageURL = get_template_directory_uri().'/assets/images/242611452_229150395849798_1430821725233963132_n.PNG';
                                                        }
                                                    ?>
                                                    <img src="<?php echo $imageURL; ?>" class="img-fluid"> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                <?php
                                $counter++;
                                endwhile;
                            else: 
                            endif;
                        ?>
                    </div>
                </div> 
                <!-- <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev"> 
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
                </a> 
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next"> 
                    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
                </a>  -->
            </div> 
        </div> 
    </div>
</section>