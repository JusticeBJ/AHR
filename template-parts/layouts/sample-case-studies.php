<section class="three-columns bg-red pt-5 pb-5">
    <div class="container">
        <h4>CASE STUDIES</h4>
        <div class="row mt-4">
            <?php 
            // args
            $args = array(
                'post_type'	=> 'case-studies',
                'posts_per_page'=>  3	
            );

            // query
            $the_query = new WP_Query( $args );

            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <article class="case-study pt-3 pb-3">
                        <figure class="d-flex justify-content-center align-items-center">
                            <?php
                            if(get_the_post_thumbnail_url()){
                                the_post_thumbnail();
                            }
                            else{
                                echo '<span class="d-flex justify-content-center align-items-center">No Image</span>';
                            }
                            ?>
                        </figure>
                        <h5><?php echo get_the_title(); ?></h5>
                        <div class="case-study__p ps-4 mt-4 mb-4 border-start border-4 border-white">
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button button--white" role="button">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                    </article>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
        </div>
    </div>
</section>