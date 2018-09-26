    <!-- Section Products -->
    <section id="section-products" class="sawtooth-vertical bg-light-gray section-padding">
      <div class="grid-container">

        <div class="grid-x">
          <div class="small-12 cell" data-equalizer="title" data-equalize-by-row="true">

            <div class="grid-x box-wave-top-icon">
              <div class="small-12 cell bg-wave align-center text-center">
                  <span class="icon-shop"></span>
              </div>              
            </div>

            <!-- Products -->
            <div class="products grid-x large-up-5 medium-up-2 small-up-1 box-wave" data-equalizer="content" >
              <?php
                $products = array(
                  array(
                    'title'     => "Blind Offer Templates",
                    'desc'      => "Use these letter templates in your direct mail campaigns to find motivated sellers of real estate.",
                    'colour'    => "light-green"
                  ),
                  array(
                    'title'     => "Cash Buyer Postcards",
                    'desc'      => "Use these postcard templates in your direct mail campaigns to find cash buyers for the properties...",
                    'colour'    => "yellow"
                  ),
                  array(
                    'title'     => "Wholesaling Package",
                    'desc'      => "In this package, you'll find all the standard documents and templates I use when assigning...",
                    'colour'    => "green"
                  ),
                  array(
                    'title'     => "Delinquent Tax List Package",
                    'desc'      => "When you purchase this item, you will receive a special link (and password) to access the full ...",
                    'colour'    => "medium-blue"
                  ),
                  array(
                    'title'     => "Headlines and Listings Pack",
                    'desc'      => "One of the greatest skills you'll ever develop is the ability to create compelling property ...",
                    'colour'    => "orange"
                  ),
                  array(
                    'title'     => "Neighbor Letters",
                    'desc'      => "Looking for other avenues to help get your property sold FAST? Maybe it's time to send out some ...",
                    'colour'    => "medium-gray"
                  ),
                  array(
                    'title'     => "Offer Letters and Purchase Contract",
                    'desc'      => "If you want to get started with the exact templates I use to make offers – you can get immediate...",
                    'colour'    => "red"
                  ),
                  array(
                    'title'     => "Postcard Templates",
                    'desc'      => "Use these postcard templates in your direct mail campaigns to find motivated sellers of real estate.",
                    'colour'    => "dark-blue"
                  ),
                  array(
                    'title'     => "Sell Your Property Submission Form",
                    'desc'      => "Need a plug-and-play property submission form for your buying website? If you're using Gravity ...",
                    'colour'    => "light-green"
                  ),
                  array(
                    'title'     => "Voicemail Package",
                    'desc'      => "Want to get your voicemail greeting set up quickly? You can download both of my scripts, along...",
                    'colour'    => "yellow"
                  ),
                  
                );

                foreach(array_keys($products) as $num):
                  $title = $products[$num]['title'];
                  $desc = $products[$num]['desc'];
                  $colour = $products[$num]['colour'];
              ?>
              <!-- Item -->
              <div class="cell products-item text-center triangle-<?php echo $colour; ?>" >
                <div class="products-title" data-equalizer-watch="title" >
                  <h3 class="text-blue"><?php echo $title;?></h3>
                </div>
                <div class="products-content" data-equalizer-watch="content">
                  <p><?php echo $desc;?></p>
                </div>
                <a href="#" class="button rounded outline"><i class="fas fa-shopping-cart"></i> Buy now</a>
              </div>
              <!-- /Item -->
              <?php endforeach; ?>
          
            </div>
            <!-- /Products -->
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Products -->