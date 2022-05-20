<?php
    $the_id= str_replace(' ','-',strtolower(get_sub_field('title')));
?>
<section class="custom-section pt-5 pb-5" id="<?php echo $the_id; ?>">
    <div class="container">
        <h4><?php echo get_sub_field('title'); ?></h4>
    </div>
</section>