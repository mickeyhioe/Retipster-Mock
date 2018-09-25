<?php
  $page = "Store";
  include('includes/header.php');
?>

    <!-- Section Intro -->
    <section id="section-intro" class="section-padding">      

      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">

          <div class="large-6 medium-10 cell">

            <!-- Video -->
            <div class="video-container-wave">
              <div class="responsive-embed widescreen">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/PcBNbbZV8aI?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
              </div>
            </div>
            <!-- /Video -->

          </div>


          <div class="large-6 medium-10 cell">

            <!-- Main -->
            <div>
              <h1 class="text-blue">Save time & make more money with the right gear.</h1>
              <p>Your time and effort go further when you’re equipped with the right things. These are the tools proven of high returns for investment, made available for purchase for you to leverage.</p>
            </div>
            <!-- /Main -->

            <?php include('includes/newsletter.php');?>
                     
          </div>

        </div>
      </div>

    </section>
    <!-- /Section Intro -->
   
    <?php 
      $article_title = "Sort articles by:";
      include('includes/section-articles.php'); 
    ?>

    <?php include('includes/section-subscribe.php'); ?>

    <?php include('includes/section-social.php'); ?>

  </div>

    
<?php include('includes/footer.php');?>