<div class="columns p-1 small-11 medium-10 large-11 h-95 p-t-0 ovH">
  <div class="columns text-center h-a p-0-1">
    <small class="subheader"> << drag >> </small>
  </div>
  <div class="slider-sidebar columns p-0">
    <?php
    // cambiar query por releases CPT cuando este terminado
    $args =  array( 'post_type' => 'post', 'showposts' => 12 );
    $q =  new WP_Query($args);
    $num = 0;
    if($q->have_posts()):
      while ($q->have_posts()): $q -> the_post();
      ?>
      <div class="columns p-0-2 rel">

        <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
          <img src="http://fakeimg.pl/120x120/?text=PortadaRelease" alt="" />
        </div>

        <div class="columns p-0-1 h-a cortina-negro-bg">
          <a href="<?php echo get_the_permalink();?>" class="columns rel h-100 p-0-1 color-blanco color-primario-0-hover ">
            <!-- Titulo release -->
            <h4 class="h-a columns p-0 font-s">

              <?php echo "Fifaifofu apocalypse tyran oblea" . $num   ?></h4>

            <!-- artista -->
            <div class="columns h-a font-m">
              <?php echo "Agrecitizen vs Drvnt live " . $num; ?>
            </div>

            <!-- fecha release -->
            <div class="columns p-0 small-6 h-a text-right font-s">
              <?php echo "12/12/2018"; ?>
            </div>
          </a>
        </div>

      </div>

      <?php
      $num ++;
    endwhile;
  endif;
  ?>

</div>
</div>
