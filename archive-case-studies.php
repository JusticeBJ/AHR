<?php
get_header();
?>

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
      <h1 class=""><?php echo get_field('case_study_title','option'); ?></h1>
      <p class="p-large"><?php echo get_field('case_study_intro_text','option'); ?></p>
    </div>
  </div>
</section>
<section class="three-columns-blog">
  <div class="container">
    <div class="three-columns-blog__content">
        <!-- Nav pills -->
        <div  class="tab-header">
          <?php 
            $terms = get_terms( array(
              'taxonomy' => 'case-studies-category',
              'hide_empty' => false,
              'orderby'       =>  'title',
              'order' => 'ASC'
            ) );
          ?>
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#all-case-studies">ALL</a>
            </li>
            <?php 
              $counter= 0;
              foreach( $terms as $term ) {?>
               <li class="nav-item">
                  <a  class="nav-link" data-bs-toggle="pill" href="#<?php echo $term->slug;?>"><?php echo $term->name; ?></a>
                </li>
                <?php
                $counter++;
              }
            ?>
          </ul>
          <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
          </form>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="all-case-studies" class="container tab-pane active">
            <div class="row">
              <div class="row mt-4">
                <?php 
                // args
                $args = array(
                    'post_type'	=> 'case-studies',
                    'posts_per_page'=>  -1	
                );

                // query
                $the_query = new WP_Query( $args );

                ?>
                <?php 
                if( $the_query->have_posts() ): ?>
                  <?php 
                  while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-4">
                      <article class="case-study pt-3 pb-3 mb-5">
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
                        <div class="case-study__categories">
                          <?php 
                            $term_list = get_the_terms(get_the_id(), 'case-studies-category');
                            foreach($term_list as $term) {?>
                              <p class="tag bg-red"><?php echo $term->name; ?></p>
                              <?php 
                            }
                          ?>
                        </div>
                        <div class="case-study__p ps-4 mt-4 mb-4 border-start border-4 border-red">
                            <?php
                              if(strlen(get_the_excerpt()) < 130){
                                $text= get_the_excerpt();
                              }
                              else{
                                $string= substr(get_the_excerpt(), 0, 130);
                                $words = explode( " ", $string );
                                array_splice( $words, -1 );
                                $text= implode( " ", $words );
                              }
                            ?>
                            <p><?php echo $text; ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button button--red" role="button">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                      </article>
                    </div>
                    <?php 
                  endwhile; ?>
                  <?php 
                endif; ?>
                <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
              </div>
            </div>
          </div>
          <?php 
            $terms = get_terms( array(
              'taxonomy' => 'case-studies-category',
              'hide_empty' => false,
              'orderby'       =>  'title',
              'order' => 'ASC'
            ) );
          ?>
          <?php 
            foreach( $terms as $term ) {?>
              <div id="<?php echo $term->slug;?>" class="container tab-pane fade">
                <div class="row">
                  <div class="row mt-4">
                    <?php 
                    // args
                    $args = array(
                      'post_type'	=> 'case-studies',
                      'posts_per_page'=>  -1,
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'case-studies-category',
                              'field'    => 'slug',
                              'terms'    => $term->slug, 
                          ),
                      ),
                    );
                    // query
                    $the_query = new WP_Query( $args );

                    ?>
                    <?php 
                    if( $the_query->have_posts() ): ?>
                      <?php 
                      while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-4">
                          <article class="case-study pt-3 pb-3 mb-5">
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
                            <div class="case-study__categories">
                              <?php 
                                $term_list = get_the_terms(get_the_id(), 'case-studies-category');
                                foreach($term_list as $term) {?>
                                  <p class="tag bg-red"><?php echo $term->name; ?></p>
                                  <?php 
                                }
                              ?>
                            </div>
                            <div class="case-study__p ps-4 mt-4 mb-4 border-start border-4 border-red">
                              <?php
                                if(strlen(get_the_excerpt()) < 130){
                                  $text= get_the_excerpt();
                                }
                                else{
                                  $string= substr(get_the_excerpt(), 0, 130);
                                  $words = explode( " ", $string );
                                  array_splice( $words, -1 );
                                  $text= implode( " ", $words );
                                }
                              ?>
                              <p><?php echo $text; ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="button button--red" role="button">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                          </article>
                        </div>
                        <?php 
                      endwhile; ?>
                      <?php 
                    endif; ?>
                    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
                  </div>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>