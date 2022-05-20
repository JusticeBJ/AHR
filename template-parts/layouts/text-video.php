<section class="text-video pb-5">
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-lg-6 pb-5">
                <div class="text-video__video">
                    <?php 
                        $embed_video= get_sub_field('youtube_video_link');
                        if($embed_video){
                            echo $embed_video;
                        }
                        else{?>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/t0Q2otsqC4I?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h3><?php echo get_sub_field('title'); ?></h3>
                <div class="modules__description  ps-4 mt-4 mb-4 border-start border-4 border-red">
                    <?php echo get_sub_field('text'); ?>
                </div>
            </div>
        </div>
    </div>
</section>