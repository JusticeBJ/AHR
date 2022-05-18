<!DOCTYPE html>
<head lang="fr">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
    if(get_field('title_tag')){?>
      <title><?php echo get_field('title_tag'); wp_title();  echo ' » FTK'; ?></title>
      <?php
    }
    else{?>
      <title><?php wp_title();  echo ' » FTK';  ?></title>
      <?php
    }
    if(get_field('meta_description')){?>
      <meta name="description" content="<?php echo get_field('meta_description'); ?>">
      <?php
    }
    if(get_field('meta_keywords')){?>
      <meta name="keywords" content="<?php echo get_field('meta_keywords'); ?>">
      <?php
    }
  ?>
  <meta name="author" content="madefinition.com">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> > 


  <header class="header position-absolute top-0 start-0 end-0">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-xxl navbar-light bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="<?php echo site_url();?>">   
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white-1.png" alt="site-logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            Menu <span class="btn-icon"><span></span></span> 
            <span class="navbar-toggler-icon"></span>
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