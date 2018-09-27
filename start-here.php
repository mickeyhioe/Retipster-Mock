<?php
  $page = "Start Here";
  include('includes/header.php');
?>

    <!-- Section Intro -->
    <section id="section-intro" class="section-padding">      

      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center align-middle">

          <div class="large-6 medium-10 cell">

            <!-- Video -->
            <div class="video-container-wave">
              <div class="responsive-embed widescreen">
                <iframe width="500" height="281" src="https://www.youtube.com/embed/6glU6eGqocI?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
              </div>
            </div>
            <!-- /Video -->

          </div>


          <div class="large-6 medium-10 cell">
              
             <!-- Main -->
             <div>
              <h1 class="text-blue">Welcome to REtipster!</h1>
              <p><strong>You’re looking for an efficient way to get started in real estate investing, or grow your current business — without the gimmicks.</strong></p>
              <p>I teach you to succeed without wasting time or effort, sharing strategies that work and real-life lessons that make your work count.</p>
            </div>
            <!-- /Main -->
        
          </div>

        </div>
      </div>

    </section>
    <!-- /Section Intro -->

    <?php include('includes/section-seth.php'); ?>

    <?php include('includes/section-popular-post.php'); ?>                  

    <?php $padding="section-padding-top"; include('includes/section-club.php'); ?>
    
    <?php include('includes/section-subscribe.php'); ?>
    
    <?php include('includes/section-social.php'); ?>

  </div>

    
<?php include('includes/footer.php');?>