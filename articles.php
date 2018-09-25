<?php
  $page = "Articles";
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
                <iframe width="500" height="281" src="https://www.youtube.com/embed/uKovEYt4tNA?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
              </div>
            </div>
            <!-- /Video -->

          </div>


          <div class="large-6 medium-10 cell">
             <!-- Main -->
             <div>
              <h1 class="text-blue">Real-world guidance for real estate investing.</h1>
              <p>Our mission is to show self-motivated people like you how to make great money from real estate, while helping others, minimizing risk, and creating more time for the things that matter.</p>
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