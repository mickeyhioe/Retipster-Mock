    <!-- Section 6 -->
    <section id="section-6" class="sawtooth-vertical bg-medium-blue section-padding">
      <div class="grid-container">

        <div class="grid-x">
          <div class="small-12 cell">

            <div class="grid-x box-white">
              <div class="small-12 cell bg-wave align-center text-center">
                <h2 class="text-center text-blue title-bg-white">Join our growing community</h2>
              </div>              
            </div>

            <!-- Social -->
            <div class="social-category grid-x large-up-4 medium-up-3 small-up-2 box-wave">
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