<section class="three-columns">
    <div class="container">
        <h2 class="sub-title f30">Hardware and Computer Repair Services</h2>
        <div class="row" >
            <div class="col-md-4">
                <a href="#" class="three-columns__col--1 on-screen rotate-left">
                    <figure class="three-columns__img">
                        <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ){
                                $size = 'large';
                                $image = $image['sizes'][ $size ];
                            }
                            else{
                                $image= get_template_directory_uri().'/assets/images/laptop-repair.png';
                            }
                        ?>
                        <img src="<?php echo $image; ?>" alt="Laptop">
                    </figure>
                    <div class="three-columns__text">
                        <h3 class="f20">Fix Laptop General Damaged</h3>
                        <span class="button--white-grey-grey">Read More</span>
                    </div>
                </a>
            </div> 
            <div class="col-md-4">
                <a href="#" class="three-columns__col--2 on-screen slide-up">
                    <figure class="three-columns__img">
                        <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ){
                                $size = 'large';
                                $image = $image['sizes'][ $size ];
                            }
                            else{
                                $image= get_template_directory_uri().'/assets/images/liquid-on-laptop.png';
                            }
                        ?>
                        <img src="<?php echo $image; ?>" alt="Laptop">
                    </figure>
                    <div class="three-columns__text">
                        <h3 class="f20">Fix Laptop Liquid Damaged</h3>
                        <span class="button--white-grey-grey">Read More</span>
                    </div>
                </a>
            </div> 
            <div class="col-md-4">
                <a href="#" class="three-columns__col--3 on-screen rotate-left">
                    <figure class="three-columns__img">
                        <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ){
                                $size = 'large';
                                $image = $image['sizes'][ $size ];
                            }
                            else{
                                $image= get_template_directory_uri().'/assets/images/laptop-screen-damaged.png';
                            }
                        ?>
                        <img src="<?php echo $image; ?>" alt="Laptop">
                    </figure>
                    <div class="three-columns__text">
                        <h3 class="f20">Laptop Screen Replacement</h3>
                        <span class="button--white-grey-grey">Read More</span>
                    </div>
                </a>
            </div> 
        </div>
    </div>
<!-- <div class="wave--1 wave--top-right"></div>
<div class="wave--5 wave--bottom-right"></div> -->
</section>