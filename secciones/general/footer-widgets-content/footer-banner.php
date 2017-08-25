<div id="footer-banners" class="slider-footer columns p-1">

  <?php

  $paged = get_query_var('paged');
  $args = cpt('roto-banners', $paged);
  $q = new WP_Query( $args );

  if($q->have_posts()):
    while ($q->have_posts()): $q -> the_post();


// for ($i=0; $i < 4; $i++):
?>
    <div class="columns p-0 rel text-shadow">
      <a href="<?php echo the_field('link_banner');?>" target="_blank">

      <!-- fondo slide -->
      <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidNoFill">

        <img src="<?php echo the_field('banner');?>" alt="" />


      </div>

      <div class="textos-slider row align-middle rel p-0">
        <div class="textos-slider columns h-a p-0 color-white">

          <h1 class="columns p-1 text-center text-shadow color-blanco">

            <?php
            //echo get_the_title();
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


  </a>
  </div>

  <?php

endwhile;
endif;
// endfor;
?>

</div>
