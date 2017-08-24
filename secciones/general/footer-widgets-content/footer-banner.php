<div id="footer-banners" class="slider-footer columns p-0">

  <?php

  // $args = array(
  //   'cat' => 20,
  // );
  // $query = new WP_Query($args);
  //
  // if($query->have_posts()):
  //   while ($query->have_posts()): $query -> the_post();
  //

for ($i=0; $i < 4; $i++):
?>
    <div class="columns p-0 rel text-shadow">
      <!-- fondo slide -->
      <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

        <img src="http://fakeimg.pl/420x420/?text=Banners" alt="" />
        <?php
        //echo get_the_post_thumbnail();
        ?>

      </div>

      <div class="textos-slider row align-middle rel p-0">
        <div class="textos-slider columns h-a p-0 color-white">

          <h1 class="columns p-1 text-center text-shadow color-blanco">

            <?php
            echo get_the_title();
            ?>

          </h1>
          <div class="columns small-10 medium-8 large-6 p-1 m-b-0-3 rel bold h-a text-shadow text-justify small-centered font-s font-sm-m font-lg-l color-blanco">
            <!-- <div class="columns p-0-3 cortina-negro absUpL z-1">

          </div> -->
          <?php

          // echo excerpt(19);

          ?>

        </div>

      </div>
    </div>


  </div>

  <?php

//endwhile;
//endif;
endfor;
?>

</div>
