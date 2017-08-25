<section class="columns p-0-2 color-blanco font-m font-md-s font-lg-l">

  <div class="columns small-11 medium-6 large-10 small-centered">

    <!-- <h5 class="columns text-center p-0">Ultimos Releases</h5> -->
    <?php

    // $args = array(
    //   'cat' => 20,
    // );
    // $query = new WP_Query($args);
    //
    // if($query->have_posts()):
    //   while ($query->have_posts()): $query -> the_post();
    //
    for ($i=0; $i < 9; $i++):
      ?>
      <div class="thumb-ultimos columns small-4 p-0-1 rel">
        <a href="#" class="columns p-0 h-100">

          <!-- thumbnail -->
          <div class="thumb-card columns  p-0 z1 imgLiquid imgLiquidNoFill">

            <img src="http://fakeimg.pl/32x32/?text=thumby" alt="" />
            <?php
            //echo get_the_post_thumbnail();
            ?>

          </div>
        </a>

      </div>

      <?php

      //   endwhile;
      // endif;
    endfor;
    ?>

  </div>
