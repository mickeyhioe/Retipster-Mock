<?php include('header.php');?>

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
                  <a href="#">
                    <img src="assets/img/logo.svg" alt="REtipster">
                  </a>
                </div>
                <!-- /Logo -->
              </div>

               <!-- Menu Container-->
              <div class="top-bar-right">               
                <div class="menu-container">
                  <!-- Main Menu -->
                  <nav class="main-menu">
                    <ul class="menu">
                      <li class="active"><a href="#">Articles</a></li>
                      <li><a href="#">Podcast</a></li>
                      <li><a href="#">Resources</a></li>
                      <li><a href="#">Store</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </nav>
                  <!-- /Main Menu -->
                </div>
              </div>
              <!-- /Menu Container-->


              <div class="top-bar-right">
                <div>
                  <!-- Menu Search -->
                  <div class="menu-search">
                    <!-- Search Form -->
                    <form action="#" role="search" method="get" id="searchform" class="search-form form hide">
                      <input type="search" name="search"><button type="submit" class="search-button"></button>
                    </form>
                    <!-- /Search Form -->

                    <!-- Search Button -->
                    <div class="menu-search-icon">
                      <a href="#" class="search-icon">
                        <img src="assets/img/search.svg" alt="Search" class="icon-search">
                        <img src="assets/img/close.svg" alt="Close" class="icon-close hide">
                      </a>
                    </div>
                    <!-- /Search Button -->

                    <!-- Start Here -->
                    <div class="menu-start">
                      <a href="#" class="button bg-green">Start here</a>
                    </div>
                    <!-- /Start Here -->

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

    <!-- Section 1: Real World Guidance -->
    <section id="section-1" class="section-padding section-padding-top-large full-height main-bg-svg">
      

      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-6 large-offset-6 medium-10 medium-offset-1 cell">

            <!-- Main -->
            <div class="section-title">
              <h1 class="text-blue">Real-world guidance for real estate investing.</h1>
              <p>Are you motivated to create financial success from real estate, while helping others and making time for important things in life?</p>
              <p>You’ve come to the right place: gain knowledge that is simple to understand, practical guidance that is easy to apply, and overlooked strategies that are proven to bring results with minimal risks.</p>
            </div>
            <!-- /Main -->

            <?php include('newsletter.php');?>
            
          </div>
        </div>
      </div>

      <!-- Featured On -->
      <div class="grid-container">
        <div class="grid-x align-center">
          <div class="medium-10 small-11 cell">
            <div class="featured-on">
              <h2 class="stars">Featured on</h2>
              <div id="brands-carousel" class="brands-carousel owl-carousel">
                  <div class="brands-item"><img src="assets/img/medium.svg" alt="Medium"></div>
                  <div class="brands-item"><img src="assets/img/buzzfeed.svg" alt="Buzzfeed"></div>
                  <div class="brands-item"><img src="assets/img/huffpost.svg" alt="Huffpost"></div>
                  <div class="brands-item"><img src="assets/img/inman.svg" alt="Inman"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Featured On -->

    </section>
    <!-- /Section 1 -->

    <!-- Section 2 -->
    <section id="section-2" class="sawtooth-vertical bg-light-green section-padding">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <div class="section-title text-center">
              <h2 class="text-blue">Your success toolbox</h2>
              <p class="text-blue">Practical & proven resources to achieve your financial & personal freedom through real estate</p>
            </div>
          </div>
        </div>
      </div>
          
      <!-- Toolbox -->
      <div class="toolbox grid-container grid-container-padded">
        <div class="grid-x grid-margin-x grid-margin-y large-up-3 medium-up-2 small-up-1">
          <?php
            $toolbox = array(
              array(
                'icon'   => "icon-ruler",
                'title'  => "Articles",
                'copy'   => "Take advantage of tried-and-tested resources for your real estate business."
              ),
              array(
                'icon'   => "icon-microphone",
                'title'  => "Podcast",
                'copy'   => "Listen to real world success stories and lessons that have paved the way there."
              ),
              array(
                'icon'   => "icon-ruler",
                'title'  => "Videos",
                'copy'   => "Watch step-by-step videos that are easy to follow even for the most extensive tips."
              ),
              array(
                'icon'   => "icon-trophy",
                'title'  => "Results",
                'copy'   => "Find inspiration and motivation from those who have achieved great success here."
              ),
              array(
                'icon'   => "icon-sign",
                'title'  => "Shop",
                'copy'   => "Save time and accelerate your results using templates and tools with proven success."
              ),
              array(
                'icon'   => "icon-ruler",
                'title'  => "Resources",
                'copy'   => "Take advantage of tried-and-tested resources for your real estate business."
              )
            );

            foreach(array_keys($toolbox) as $num):
              $title = $toolbox[$num]['title'];
              $icon = $toolbox[$num]['icon'];
              $copy = $toolbox[$num]['copy'];
          ?>
          <!-- Item -->
          <div class="cell toolbox-item">
            <a href="#">
              <div class="toolbox-icon">
                <span style="background-image: url('assets/img/<?php echo $icon;?>.svg')"></span>
              </div>
              <div class="toolbox-content">
                <h3><?php echo $title;?></h3>
                <p><?php echo $copy;?></p>
              </div>
            </a>
          </div>
          <!-- /Item -->
          <?php endforeach; ?>
          
      </div>
      <!-- /Toolbox -->

    </section>
    <!-- /Section 2 -->

    <!-- Section 3 -->
    <section id="section-3" class="section-padding">
      <div class="grid-container">
        <div class="grid-x">
          <div class="large-12 cell">

            <div class="box-blue">
              <p class="text-center"><strong>Bonus:</strong> Your free copy of the <strong>INVESTOR HACKS</strong> e-book gives you instant access to the REtipster Toolbox, with even more resources to succeed.</p>
            </div>

            <div class="grid-x box-wave align-middle">
              <div class="large-6 cell text-center">
                <div class="padding-3">
                  <h2 class="title-money text-blue">Invest better</h2>
                  <p><strong>INVESTOR HACKS</strong> gives you game-changing tools to transform your real estate investing business.</p>
                  <a href="#" class="button large rounded">Get my free e-book</a>
                </div>
              </div>
              <div class="large-6 cell">
                <div class="book-cover text-white">
                  <div class="book-cover-title">
                    <h2>Investor Hacks!</h2>
                    <p>20 Essential Tools for Real Estate Investors</p>
                  </div>
                  <div class="book-cover-author">
                    By: Seth Williams
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section 3 -->

    <!-- Section 4 -->
    <section id="section-4" class="sawtooth-vertical bg-light-gray section-padding ">

       <!-- Articles Nav -->
      <div class="grid-container">       
        <div class="grid-x grid-padding-x grid-margin-y">
          <div class="large-12 cell">
            <div class="grid-container">
              <div class="grid-x grid-padding-x box-wave align-middle">
                <div class="large-6 cell">
                  <h2 class="text-blue h3 margin-0">Articles from our blog</h2>
                </div>
                <div class="large-6 cell">
                  <nav class="sort-articles-menu">
                    <ul class="menu align-right">
                      <li class="active"><a href="#">Recent</a></li>
                      <li><a href="#">Featured</a></li>
                      <li><a href="#">Popular</a></li>
                      <li><a href="#">Trending</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <!-- /Articles Nav -->


      <!-- Articles Container -->
      <div class="grid-container grid-container-padded">
        <!-- Articles -->
        <div class="article-grid grid-x grid-margin-x grid-margin-y">

          <!-- Item -->
          <div class="article-grid-item cell large-6 medium-12">
            <div class="article-grid-item-inner big">
              <a href="#" class="img" style="background-image: url(assets/img/articles.jpg);">
              </a>
              <div class="content">
                <span class="cat-icon" style=" background-image:url(assets/img/icon-apartment.svg);"></span>
                <div class="category">Just For Fun</div>
                <div class="title">
                  <h3><a href="#">20 Life-Changing Books on Business, Real Estate and Personal Success</a></h3>
                </div>
              </div>
              <div class="user">By: Seth Williams • <span class="span-reading-time"> 16 </span> min read </div>
            </div>
          </div>
          <!-- /Item -->

          <?php
            $cat_icon = array(
              array(
                'icon'   => "icon-megaphone",
                'title'  => "Just for Fun",
              ),
              array(
                'icon'   => "icon-map",
                'title'  => "Land investing"
              ),
              array(
                'icon'   => "icon-house",
                'title'  => "Selling property"
              ),
              array(
                'icon'   => "icon-apartment",
                'title'  => "Landlording"
              ),
              array(
                'icon'   => "icon-sign",
                'title'  => "Finding deals"
              ),
              array(
                'icon'   => "icon-piggybank",
                'title'  => "Saving money"
              ),
              array(
                'icon'   => "icon-smiley",
                'title'  => "Getting more done"
              ),
              array(
                'icon'   => "icon-cellphone",
                'title'  => "Technology"
              )
            );

            foreach(array_keys($cat_icon) as $num):
              $title = $cat_icon[$num]['title'];
              $icon = $cat_icon[$num]['icon'];
          ?>
          <!-- Item -->
          <div class="article-grid-item cell large-3 medium-6">
            <div class="article-grid-item-inner">
              <a href="#" class="img" style="background-image: url(assets/img/articles.jpg);">
              </a>
              <div class="content">
                <span class="cat-icon <?php echo $icon;?>"></span>
                <div class="category"><?php echo $title;?></div>
                <div class="title">
                  <h3><a href="#">20 Life-Changing Books on Business, Real Estate and Personal Success</a></h3>
                </div>
              </div>
              <div class="user">By: Seth Williams • <span class="span-reading-time"> 16 </span> min read </div>
              <a href="#" class="article-link"></a>
            </div>
          </div>
          <!-- /Item -->
            <?php endforeach; ?>

        </div>
        <!-- /Articles -->
      
      </div>
      <!-- Articles Container -->

      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y grid-margin-y grid-margin-x align-center">
          <a href="#" class="button large rounded">Go to our blog</a>
        </div>
      </div>



      <!-- Help Container -->
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <div class="section-title title-wave text-center">
              <h2>Hi REtipster, I want help with</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- /Help Container -->

      <!-- Help Category -->
      <div class="help-category grid-container grid-container-padded">
        <div class="grid-x grid-margin-x grid-margin-y large-up-4 medium-up-2 small-up-1">
          <?php
            $help_category = array(
              array(
                'icon'   => "icon-megaphone",
                'title'  => "Getting started",
              ),
              array(
                'icon'   => "icon-map",
                'title'  => "Land investing"
              ),
              array(
                'icon'   => "icon-house",
                'title'  => "Selling property"
              ),
              array(
                'icon'   => "icon-apartment",
                'title'  => "Landlording"
              ),
              array(
                'icon'   => "icon-sign",
                'title'  => "Finding deals"
              ),
              array(
                'icon'   => "icon-piggybank",
                'title'  => "Saving money"
              ),
              array(
                'icon'   => "icon-smiley",
                'title'  => "Getting more done"
              ),
              array(
                'icon'   => "icon-cellphone",
                'title'  => "Technology"
              )
            );

            foreach(array_keys($help_category) as $num):
              $title = $help_category[$num]['title'];
              $icon = $help_category[$num]['icon'];
          ?>
          <!-- Item -->
          <div class="cell help-category-item">
            <a href="#">
              <div class="help-category-icon">
                <span style="background-image: url('assets/img/<?php echo $icon;?>.svg')"></span>
              </div>
              <div class="help-category-content">
                <h3><?php echo $title;?></h3>
              </div>
            </a>
          </div>
          <!-- /Item -->
          <?php endforeach; ?>
          
      </div>
      <!-- /Help Category -->

    </section>
    <!-- /Section 4 -->


    <!-- Section 5 -->
    <section id="section-5" class="section-padding">
      <div class="grid-container">
        <div class="grid-x">
          <div class="large-12 cell">

            <div class="box-blue">
              <p class="text-center"><strong>Bonus:</strong> Your free copy of the <strong>INVESTOR HACKS</strong> e-book gives you instant access to the REtipster Toolbox, with even more resources to succeed.</p>
            </div>

            <div class="grid-x box-wave align-middle">
              <div class="large-6 cell">
                <div class="padding-3">
                  <h2 class="text-blue">Success requires decision and action</h2>
                  <p>The market moves fast. Stay ahead with the latest tips in low-risk, high-return real estate investing for your business.</p>
                  <?php include ('newsletter.php')?>
                </div>
              </div>
              <div class="large-6 cell">
                <div class="book-cover building"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section 5 -->

    <!-- Section 6 -->
    <section id="section-6" class="sawtooth-vertical bg-medium-blue section-padding">
      <div class="grid-container">

        <div class="grid-x">
          <div class="large-12 cell">

            <div class="grid-x box-white">
              <div class="large-12 cell bg-wave align-center text-center">
                <h2 class="text-center text-blue title-bg-white">Join our growing community</h2>
              </div>              
            </div>

            <!-- Social -->
            <div class="social-category grid-x large-up-4 medium-up-2 small-up-1 box-wave">
              <?php
                $social_category = array(
                  array(
                    'icon'    => "mail",
                    'number'  => "3,233",
                    'subtitle'=> "Subscribers"
                  ),
                  array(
                    'icon'   => "youtube",
                    'number'  => "3,233",
                    'subtitle'=> "YouTube"
                  ),
                  array(
                    'icon'   => "twitter",
                    'number'  => "3,233",
                    'subtitle'=> "Twitter"
                  ),
                  array(
                    'icon'   => "facebook",
                    'number'  => "3,233",
                    'subtitle'=> "Facebook"
                  ),
                  array(
                    'icon'   => "instagram",
                    'number'  => "3,233",
                    'subtitle'=> "Instagram"
                  ),
                  array(
                    'icon'   => "google",
                    'number'  => "3,233",
                    'subtitle'=> "Google"
                  ),
                  array(
                    'icon'   => "linkedin",
                    'number'  => "3,233",
                    'subtitle'=> "LinkedIn"
                  ),
                  array(
                    'icon'   => "pinterest",
                    'number'  => "3,233",
                    'subtitle'=> "Pinterest"
                  )
                );

                foreach(array_keys($social_category) as $num):
                  $number = $social_category[$num]['number'];
                  $subtitle = $social_category[$num]['subtitle'];
                  $icon = $social_category[$num]['icon'];
              ?>
              <!-- Item -->
              <div class="cell social-category-item">
                <a href="#">
                  <div class="social-category-icon">
                    <span style="background-image: url('assets/img/socials/com-soc/<?php echo $icon;?>.svg')"></span>
                  </div>
                  <div class="social-category-content">
                    <h3><?php echo $number;?></h3>
                    <p><?php echo $subtitle;?></p>
                  </div>
                </a>
              </div>
              <!-- /Item -->
              <?php endforeach; ?>
          
            </div>
            <!-- /Social -->
          </div>
        </div>
      </div>
    </section>
    <!-- /Section 6 -->

  </div>

    
<?php include('footer.php');?>