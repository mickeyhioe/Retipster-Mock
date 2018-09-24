    <!-- Section 4 -->
    <section id="section-4" class="sawtooth-vertical bg-light-gray section-padding ">

       <!-- Articles Nav -->
      <div class="grid-container">       
        <div class="grid-x grid-padding-x grid-margin-y">
          <div class="small-12 cell">
            <div class="grid-container">
              <div class="grid-x grid-padding-x box-wave align-middle">
                <div class="large-6 cell">
                  <h2 class="text-blue title-article">Articles from our blog</h2>
                </div>
                <div class="large-6 cell">
                  <nav class="sort-articles-menu">
                    <ul class="menu">
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
              if ($num == 0){
                $cellsize = "large-6 ";
                $imgsize = "big";
              }else{
                $cellsize = "large-3 medium-6 ";
                $imgsize = "";
              }
          ?>
          <!-- Item -->
          <div class="article-grid-item cell <?php echo $cellsize;?>">
            <div class="article-grid-item-inner <?php echo $imgsize;?>">
              <a href="#" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo rand(600, 1000)?>);">
                <span class="cat-icon <?php echo $icon;?>"></span>
              </a>
              <div class="content">                
                <div class="category"><?php echo $title;?></div>
                <div class="title">
                  <h3><a href="#">20 Life-Changing Books on Business, Real Estate and Personal Success</a></h3>
                </div>
                <div class="user">By: Seth Williams • <span class="span-reading-time"> 16 </span> min read </div>
                  <a href="#" class="article-link"></a>
                </div>
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
          <div class="small-12 cell">
            <div class="section-title title-wave text-center">
              <h2>Hi REtipster, I want help with</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- /Help Container -->

      <!-- Help Category -->
      <div class="help-category grid-container grid-container-padded">
        <div class="grid-x grid-margin-x grid-margin-y large-up-4 medium-up-3 small-up-2">
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