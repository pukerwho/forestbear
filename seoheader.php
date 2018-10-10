<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127078049-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127078049-1');
  </script>

</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><span class="lightdarkblack font-weight-bold">WeModern</span> <span class="mobile-none">|</span><span class="lightdarkblack font-weight-light mobile-none"> SEO-Продвижение</span></a>
            <div class="headermenu">
              <div class="pc-show">
                <div class="menu d-flex align-items-center justify-content-between">
                  <?php 
                    wp_nav_menu( array(
                      'menu'            => 'MainMenu', 
                    ))
                  ?>
                  <ul>
                  	<li><div class="btn btn-success" data-toggle="modal" data-target="#seoAuditModal">Заказать аудит</div></li>
                  </ul>
                </div>
              </div>
              <div class="mobile-show">
                <div class="toogle-menu"></div>
                <div class="slide-menu">
                  <div class="menu">
                    <?php 
                      wp_nav_menu( array(
                        'menu'            => 'MainMenu', 
                      ))
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">