    <!-- Section Toolbox -->  
    <section id="section-toolbox" class="sawtooth-vertical bg-medium-blue section-padding">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="section-title text-center">
              <h2 class="text-white">Your success toolbox</h2>
              <p class="text-white">Practical & proven resources to achieve your financial & personal freedom through real estate</p>
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
    <!-- /Section Toolbox -->