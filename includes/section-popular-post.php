    <!-- Section Popular Posts Title -->
    <section id="popular-posts-title" class="">
      <div class="grid-container">
        <div class="grid-x text-center align-center">
          <div class="cell">
            <h2 class="title-stars text-blue">Popular posts</h2>
            <p><em>There is a pretty extensive library of articles throughout this <a href="articles.php">blog</a>.</em></p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Popular Posts Title -->

    <!-- Section Popular Posts Accordion -->
    <section id="popular-posts-accordion" class="section-padding-top">
        <div class="grid-container">
            <div class="grid-x align-center">
                <div class="cell medium-10">
                    <ul class="accordion box-wave-bottom" data-accordion data-allow-all-closed="true">

                    <?php
                        $accordions = array(
                            'Finding great deals',
                            'Selling properties quickly',
                            'Getting Started / Productivity Tips',
                            'Land Investing',
                            'Rental Properties'
                        );
                        foreach(array_keys($accordions) as $num):
                            $title = $accordions[$num];
                    ?>
                        <li class="accordion-item" data-accordion-item>
                            <a href="#" class="accordion-title"><h3><?php echo $title; ?></h3></a>
                            <div class="accordion-content" data-tab-content>
                                <?php include('includes/popular-posts.php');?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section Popular Posts Accordion -->