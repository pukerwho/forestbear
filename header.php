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
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><span class="lightdarkblack font-weight-bold">WeModern</span> |<span class="lightdarkblack font-weight-light"> Создание сайтов</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <div class="menu">
                <?php 
                  wp_nav_menu( array(
                    'menu'            => 'MainMenu', 
                  ))
                ?>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">