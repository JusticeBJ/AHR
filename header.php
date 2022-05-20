<!DOCTYPE html>
<head lang="fr">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title();  echo ' » AHR';  ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> > 


  <header class="header position-absolute top-0 start-0 end-0 pt-1">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-xxl navbar-light bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="<?php echo site_url();?>">   
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white-1.png" alt="site-logo">
          </a>
          <button class="navbar-toggler border border-0 rounded-0 header__button mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="header-btn-text"> Menu </span>
            <span class="header-btn-icon">
              <span></span>
              <span></span>
              <span></span>
            </span> 
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'Main Menu',
                  'theme_location' => 'primary',
                  'depth' => 2,
                  'container' => false,
                  'menu_class' => 'navbar-nav',
                  'fallback_cb' => 'wp_page_menu',
                  'walker' => new wp_bootstrap_navwalker()
                )
              );
            ?>
          </div>
        </div>
      </nav>
    </div>
  </header>