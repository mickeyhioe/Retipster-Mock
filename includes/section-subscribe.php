<?php
  if (!isset($padding)){
    $padding ="section-padding";
  }
?>
    <!-- Section Subscribe -->
    <section id="section-subscribe" class="<?php echo $padding; ?>">
      <div class="grid-container">
        <div class="grid-x">
          <div class="small-12 cell">

            <div class="box-blue">
              <p class="text-center"><strong>Bonus:</strong> Your free copy of the <strong>INVESTOR HACKS</strong> e-book gives you instant access to the REtipster Toolbox, with even more resources to succeed.</p>
            </div>

            <div class="grid-x box-wave align-middle">
              <div class="large-6 cell">
                <div class="padding-3">
                  <h2 class="text-blue">Success requires decision and action</h2>
                  <p>The market moves fast. Stay ahead with the latest tips in low-risk, high-return real estate investing for your business.</p>
                  <?php include ('includes/newsletter.php')?>
                </div>
              </div>
              <div class="large-6 cell">
                <div class="book-cover building"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Subscribe -->

<?php 
  $padding = 'section-padding';
?>