    <?php
      if (!isset($article_title)){
        $article_title ="REtipster success stories";
      }
    ?>
    <!-- Section Success Stories -->
    <section id="section-articles" class="sawtooth-vertical bg-light-gray section-padding ">

       <!-- Articles Nav -->
      <div class="grid-container">       
        <div class="grid-x grid-padding-x grid-margin-y">
          <div class="small-12 cell">
            <div class="grid-container">
              <div class="grid-x grid-padding-x box-wave align-middle">
                <div class="large-6 cell">
                  <h2 class="text-blue title-article"><?php echo $article_title;?></h2>
                </div>
                <div class="large-6 cell">
                  <div class="button-container-article flex-container align-middle">
                    <h3 class="h5 title-side-hat flex-child-auto">Want to learn more? </h3>
                    <a href="#" class="button rounded flex-child-auto">Take me to the blog</a>
                  </div>
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
            for($num = 0; $num < 4; $num++):
          ?>
          <!-- Item -->
          <div class="article-grid-item cell large-3 medium-6">
            <div class="article-grid-item-inner">
              <a href="single.php" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo rand(600, 1000)?>);">
                <span class="cat-icon icon-map"></span>
              </a>
              <div class="content">                
                <div class="category">Case Studies</div>
                <div class="title">
                  <h3><a href="single.php">20 Life-Changing Books on Business, Real Estate and Personal Success</a></h3>
                </div>
                <div class="user">By: Seth Williams • <span class="span-reading-time"> 16 </span> min read </div>
                  <a href="single.php" class="article-link"></a>
                </div>
              </div>
          </div>
          <!-- /Item -->
            <?php endfor; ?>

        </div>
        <!-- /Articles -->
      
      </div>
      <!-- Articles Container -->

      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y grid-margin-y grid-margin-x align-center">
          <a href="articles.php" class="button large rounded">Show me more success stories</a>
        </div>
      </div>

    </section>
    <!-- /Section Success Stories -->