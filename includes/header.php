<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REtipster</title>

    <link rel="stylesheet" href="assets/js/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    
  </head>

  <body>
  <div class="wrapper">

    <!-- Header -->
    <header id="header" class="site-header">
      <div class="grid-container padding-0">
        <div class="grid-x">
          <div class="cell">
            <div class="top-bar">
              <div class="top-bar-left">
                <!-- Logo -->
                <div class="logo">
                  <a href="index.php">
                    <img src="assets/img/logo.svg" alt="REtipster">
                  </a>
                </div>
                <!-- /Logo -->
              </div>

               <!-- Menu Container-->
              <div class="top-bar-right">               
                <div class="menu-container">
                  <?php include('includes/main-menu.php');?>
                </div>
              </div>
              <!-- /Menu Container-->


              <div class="top-bar-right">
                <div>
                  <!-- Menu Search -->
                  <div class="menu-search">

                    
                    <!-- Search Button -->
                    <div class="menu-search-icon">
                      <a href="#" class="search-icon" id="open-search">
                        <img src="assets/img/search.svg" alt="Search" class="icon-search">                        
                      </a>
                    </div>
                    <!-- /Search Button -->

                    <!-- Start Here -->
                    <div class="menu-start">
                      <a href="#" class="button bg-green">Start here</a>
                    </div>
                    <!-- /Start Here -->

                    <!-- Mobile Menu -->
                    <div class="menu-button" aria-hidden="true">
                      <a href="#" id="open-menu"><span></span><span></span><span></span>MENU</a>
                    </div>
                    <!-- Mobile Menu -->

                  </div>
                  <!-- /Menu Search -->
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- Mobile Menu -->			
    <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
      <a href="#" id="close-menu" class="icon-close">
        <img src="assets/img/close.svg" alt="Close">
      </a>
      <nav class="overlay-menu" role="navigation">
        <?php include('includes/main-menu.php');?>
      </nav>
    </div>
    <!-- /Mobile Menu -->

    <!-- Search Form -->
    <div class="mobile-menu" id="search-menu" aria-hidden="true">
      <a href="#" id="close-search" class="icon-close">
        <img src="assets/img/close.svg" alt="Close">
      </a>
      <form action="#" role="search" method="get" id="searchform" class="search-form form">
        <div class="grid-container section-padding">
          <div class="grid-x grid-padding-y align-center-middle text-center" style="height: 100fv;">
            <div class="cell small-12">
              <h1 class="text-blue">Search</h1>
            </div>

            <div class="cell medium-6">
              <input type="search" name="search" class="input rounded large" placeholder="Search">
            </div>
            <div class="cell medium-3">
              <button type="submit" class="search rounded large button full-width">SEARCH</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- /Search Form -->