   
    <!-- Section Articles -->
    <section id="section-articles" class="sawtooth-vertical bg-light-gray section-padding ">

       <!-- Articles Nav -->
      <div class="grid-container">       
        <div class="grid-x grid-padding-x grid-margin-y">
          <div class="small-12 cell">
            <div class="grid-container">
              <div class="grid-x grid-padding-x box-wave align-middle">
                <div class="large-12 cell related-articles-title-row align-middle grid-x">
                  <h2 class="text-blue title-article">Related articles</h2>
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
              $cellsize = "small-12 medium-6 large-3 ";
              $imgsize = "";             
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




    </section>
    <!-- /Section Articles -->