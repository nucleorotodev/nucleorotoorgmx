<div class="columns p-0 small-9 medium-10 large-11 ovH">
<div class="slider-sidebar columns p-0">
  <?php
  // cambiar query por releases CPT cuando este terminado
  $args =  array( 'post_type' => 'post', 'showposts' => 8 );
  $q =  new WP_Query($args);

  if($q->have_posts()):
    while ($q->have_posts()): $q -> the_post();
    ?>
    <div class="columns p-1 rel">

        <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
          <img src="<?php echo get_template_directory_uri();?>/img/nr-logo-header-medium.jpg" alt="" />
        </div>
>
        <div class="columns p-1 h-a">
          <a href="<?php echo get_the_permalink();?>" class="columns rel h-100 p-0-3 color-blanco color-primario-0-hover ">
            <!-- Nombre -->
            <h5 class="h-a columns p-0 font-s"><?php echo "Fifaifofu apocalypse tyran oblea" ?></h5>

            <!-- artista -->
            <div class="columns h-a font-s">
              <?php echo "Venetian snares"; ?>
            </div>

            <!-- fecha release -->
            <div class="columns p-0 small-6 h-a text-right font-xs">
              <?php echo "12/12/2099"; ?>
            </div>
          </a>
        </div>

      </div>

    <?php
  endwhile;
endif;
?>

</div>
</div>
