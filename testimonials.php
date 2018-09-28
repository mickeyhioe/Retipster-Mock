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
                <h1 class="text-blue">Testimonials</h1>              
            </div>
            <!-- /Article Title -->
            
                                  
            <!-- Article Content -->
            <div class="article-content">              
            
                <p>For the longest time, I resisted the nagging feeling that I needed to show “Testimonials” on my website. For some reason, I felt like it would come across like I was trying to “sell my system” or convince people that the investment methods I talk about are the best.</p>

                <p>I eventually came to the realization that testimonials&nbsp;<em>are very important</em>. The average person hears&nbsp;<strong>hundreds</strong>&nbsp;of sales pitches on different systems and programs throughout their lifetime – and it's not easy to know where to turn when so many people&nbsp;<em>aren't straightforward and truthful about what they're selling</em>.</p>

                <p>My goal with this page ISN'T to convince you to do what I do. I'm simply showing you that there is a great deal of legitimacy to the things I'm talking about… so IF you decide to dive in, you'll know that you aren't just chasing after some pie-in-the-sky dream.</p>

                <p>I get emails pretty regularly from people who have used my blog to make money on their own (many of them&nbsp;<em>without paying me a dime</em>). Most of the testimonials below are from people who have reached out to me over the years or have simply posted their experiences in public forms (in the majority of cases, with no prompting from me).</p>
                
                <?php include('includes/section-testimonials.php');?>

                      
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