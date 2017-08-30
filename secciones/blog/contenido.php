<section id="blog-cards" class="columns small-12 large-9 h-a p-1 p-top">

  <div class="blog-cards columns p-0 p-t-1 p-b-1 h-a">

    <?php
    if (have_posts()):
      while (have_posts()): the_post();
      ?>
      <div class="columns small-12 medium-4 large-6 p-0-2 h-a end">

        <div class="columns p-0-2 h-a card">

          <div class="columns absUpL h-50-v z1k imgLiquid imgLiquidFill">
            <img src="<?php //echo get_the_post_thumbnail();?>" alt="" />
          </div>

          <div class="columns p-0-2 color-negro text-center card-divider">

            <h4 class="columns p-0">
              <?php echo get_the_title(); ?>
            </h4>

            <div class="card-section text-justify">
              <?php echo excerpt(25); ?>
            </div>

            <div class="columns small-6 p-0 p-t-0-2 text-left">
              <small>
                Escrito por: <?php echo get_the_author(); ?>
              </small>
            </div>
            <div class="columns small-6 p-0 p-t-0-2 text-right">
              <small>
                <?php echo get_the_date(); ?>
              </small>
            </div>


          </div>
        </div>
      </div>

      <?php
    endwhile;
  endif; ?>

</div>

</section>
