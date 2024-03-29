<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="container bb_width">
      <div class="row">
        <div class="col-md-12">
          <div class="header__content">
            <a href="<?php echo home_url(); ?>">
              <div class="header__logo">
                <img src="<?php echo carbon_get_theme_option('crb_logo') ?>" alt="">
              </div>
            </a>
            <div class="header__menu">
              <?php wp_nav_menu([
                'theme_location' => 'head_menu',
                'container' => 'nav',
                'menu_id' => 'head_menu',
              ]); ?>
              <div class="header__login">
                <a href="<?php echo carbon_get_theme_option('crb_links_resseler_agent') ?>">
                  <img src="<?php bloginfo('template_url') ?>/img/reseller.png" alt="">
                  Reseller/Agent
                </a>
                <a href="<?php echo carbon_get_theme_option('crb_links_customer') ?>">
                  <img src="<?php bloginfo('template_url') ?>/img/my_acc.png" alt="">
                  Customer
                </a>
              </div>
            </div>
            <div class="mobile-show">
              <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-show">
    <div class="mobile-overlay">
      <div class="mobile-cover">
        <?php wp_nav_menu([
          'theme_location' => 'head_menu',
          'container' => 'nav',
          'menu_id' => 'head_menu',
        ]); ?> 
        <div class="header__login">
          <a href="#">
            <img src="<?php bloginfo('template_url') ?>/img/reseller.png" alt="">
            Reseller/Agent
          </a>
          <a href="#">
            <img src="<?php bloginfo('template_url') ?>/img/my_acc.png" alt="">
            Customer
          </a>
        </div>
      </div>
    </div>
  </div>
  <section id="content" role="main">