<?php 
  $page = "Home";
  include('includes/header.php');
?>

    <!-- Section 1 -->
    <section id="section-1" class="full-height main-bg-svg">      

      <div class="grid-container">
        <div class="grid-x grid-padding-x full-height align-center">

          <div class="large-6 large-offset-6 medium-10 cell">

             <!-- Main -->
             <div class="section-title main">
              <h1 class="text-blue">Real-world guidance for real estate investing.</h1>
              <p>Are you motivated to create financial success from real estate, while helping others and making time for important things in life?</p>
              <p>You’ve come to the right place: gain knowledge that is simple to understand, practical guidance that is easy to apply, and overlooked strategies that are proven to bring results with minimal risks.</p>
            </div>
            <!-- /Main -->

            <?php include('includes/newsletter.php');?>            
          </div>

          <div class="medium-10 small-11 cell align-self-bottom">
            <!-- Featured On -->
            <div class="featured-on">
              <h2 class="stars">Featured on</h2>
              <div id="brands-carousel" class="brands-carousel owl-carousel">
                  <div class="brands-item"><img src="assets/img/medium.svg" alt="Medium"></div>
                  <div class="brands-item"><img src="assets/img/buzzfeed.svg" alt="Buzzfeed"></div>
                  <div class="brands-item"><img src="assets/img/huffpost.svg" alt="Huffpost"></div>
                  <div class="brands-item"><img src="assets/img/inman.svg" alt="Inman"></div>
              </div>
            </div>
            <!-- /Featured On -->
          </div>

        </div>
      </div>

    </section>
    <!-- /Section 1 -->

    
    <?php include('includes/section-toolbox.php'); ?>
    
    <?php include('includes/section-ebook.php'); ?>
    
    <?php include('includes/section-articles.php'); ?>

    <?php include('includes/section-subscribe.php'); ?>

    <?php include('includes/section-social.php'); ?>

  </div>

    
<?php include('includes/footer.php');?>