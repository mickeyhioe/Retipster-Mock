<?php 
  $page = "Testimonials";
  include('includes/header.php');
?>
    <!-- Single Page -->
    <section id="single-page-wrapper" class="section-padding-main">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">          
                  
          <!-- Left column -->
          <div class="medium-12 large-8 cell">

            <!-- Article Title -->
            <div class="section-title">
                <h1 class="text-blue">Search Result</h1>
                <div class="search-term">For: Cool Technology</div>           
            </div>
            <!-- /Article Title -->
            
                                  
            <!-- Article Content -->
            <div class="article-content">              
            
                <?php include('includes/search-result.php');?>

                      
            </div>
            <!-- /Article Content -->
                        
          </div>
          <!-- /Left column -->
                  

          <!-- Right column -->
          <div class="medium-12 large-4 cell">

            <!-- Article Sidebar Wrapper -->
            <div class="article-sidebar-wrapper">
                          
              <!-- Widget -->
              <div class="widget article-sidebar-item">

                <div class="grid-y subscribe-today ">
                  <h3 class="text-blue">Subscribe today!</h3>                  
                  <span class="text-gray h6 title-mail">Get all the latest news!</span>
                                              
                  <form action="https://www.getdrip.com/forms/5100474/submissions" method="post" data-drip-embedded-form="5100474">
                    <div class="grid-container padding-0">
                      <div class="grid-y">
                        <div class="cell">
                          <input type="email" name="fields[email]" class="input rounded large" value="" required placeholder="Email Address *"/>
                        </div>
                        <div class="cell">
                          <input type="submit" name="submit" value="Sign me up!" data-drip-attribute="sign-up-button" class="button rounded large full-width" />
                        </div>
                      </div>
                    </div>
                  </form>
                                            
                </div>
              </div>
              <!-- /Widget -->
                          
              <!-- Widget -->
              <div class="widget article-sidebar-item">
              
                <div class="grid-y sidebar-bio">                                                                
                  <img class="alignnone size-medium wp-image-15111" src="https://retipster.com/wp-content/uploads/2018/01/Seth-Williams-Profile-500x500.jpg" alt="Seth Willliams" width="100%" />
                  <div class="sidebar-bio-content">
                    <h3>I'm Seth Williams.</h3>
                    <p>I founded REtipster to share with you the lessons I learned on my journey to real estate investing success, which led to REtipster's mission: to empower others to build their own personal and financial freedom.</p>
                      <a href="#" class="button large rounded bg-green">Learn more</a>
                  </div>                    
                </div>
              </div>
              <!-- /Widget -->                        
                          
              <!-- Widget -->
              <div class="widget article-sidebar-item"> 
                
                <div class="grid-y sidebar-popular-posts">
                  <div class="cell text-center">
                    <h3 class="text-blue">Popular Posts</h3>
                  </div>
                  <div class="cell text-center">
                    <nav class="sort-articles-menu">
                      <ul class="menu underline">
                        <li class="active"><a href="#">Recent</a></li>
                        <li><a href="#">Popular</a></li>
                        <li><a href="#">Trending</a></li>
                      </ul>
                    </nav>
                  </div>
                  <?php include('includes/popular-posts.php');?>
                </div>
                  
              </div>
              <!-- /Widget --> 
            </div>
            <!-- /Article Sidebar Wrapper -->               
                                                                                
          </div>
          <!-- /Right column -->

        </div>
      </div>
    </section>
    <!-- /Single Page -->
      
    <?php //include('includes/section-related-articles.php'); ?>    
      
    <?php //include('includes/section-subscribe.php'); ?>

    <?php //include('includes/section-social.php'); ?>

  </div>

    
<?php include('includes/footer.php');?>