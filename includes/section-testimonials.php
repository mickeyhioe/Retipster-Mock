    <!-- Section Testimonials -->
    <section id="section-testimonials">

      <!-- Testimonials Container -->
      <div class="grid-container testimonials">
        <div class="grid-x">

          <?php
            $testimonials = array(
              array(
                'author'   => "Dave Fritch",
                'position' => "Real Estate Investor",
                'content'  => "<p>I had tried flipping houses and had done okay. When I first heard Seth interviewed on the Biggerpockets podcast I was excited because land flipping eliminated the 2 biggest headaches I was experiencing; financing and rehabbing.</p>
                <p>Seth has unquestionably been the biggest and best source of information and leadership in building a part-time business that has yielded fantastic financial returns. I made a decision to follow Seth’s methods pretty closely and not try to reinvent the wheel. I think it was a smart move. My first mailing I bought two parcels from one seller for $9,000. Within 6 months I had sold them for $24,000 total. About 9 months in I bought a parcel for just under $2,400 and sold it for $14,950 within 60 days.</p>",
              ),
              array(
                'author'   => "Karl James",
                'position' => "Part-Time Land Investor",
                'content'  => "<p>In just six months, I have done 8 deals and made $180,000 in profit. I also have three other parcels under contract, with buyers interested in all three and waiting to close. These deals look like another $80,000 – $100,000 profit on all three combined.</p>
                <p>The four person staff at my title company are amazed when they see how much I am making on each deal, but I’ve sworn them to secrecy!</p>
                <p>What is so cool about this material is that once you learn the concepts and methods, they are flexible enough to adapt to fit one’s own needs or approach.</p>",
              ),
              array(
                'author'   => "Billy Rogers",
                'position' => "Part-Time Land Investor",
                'content'  => "<p>(With the money from land investing) I’ve paid off a rental property, taken a few vacations, helped pay for a relative’s funeral, set aside taxes and reinvested the rest. Paying off the rental was big goal for me. I enjoyed the Dominican Republic and Costa Rica. Oh I almost forgot I’m paying for laser eye surgery next month with some of my profits.</p>
                <p>I hope none of this sounds like bragging because I really just wanted to say thank you to Seth because you were the inspiration for me getting into land flipping and it has really made an impact on my life.</p>
                <p>My future goals are to acquire mobile home parks and small apartment buildings….and quit my job :)</p>",
              ),
            );

            foreach(array_keys($testimonials) as $num):
              $testimonials_author = $testimonials[$num]['author'];
              $testimonials_position = $testimonials[$num]['position'];
              $testimonials_content = $testimonials[$num]['content'];
          ?>

          <!-- Item -->
          <div class="testimonials-item cell small-12 cell">
            <blockquote class="testimonials-content">
              <?php echo $testimonials_content; ?>              
            </blockquote>
            <div class="testimonials-author-container">
              <span class="testimonials-author"><?php echo $testimonials_author; ?></span>
              <span class="testimonials-position"><?php echo $testimonials_position; ?></span>
            </div>
          </div>
          <!-- /Item -->
            <?php endforeach; ?>

        </div>
      </div>
      <!-- Testimonials Container -->

    </section>
    <!-- /Section Testimonials -->