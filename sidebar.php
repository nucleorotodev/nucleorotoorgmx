<div class="columns p-1 small-11 medium-10 large-11 h-95 p-t-0 ovH">
  <div class="columns text-center h-a p-0-1">
    <small class="subheader"> << drag >> </small>
  </div>
  <div class="slider-sidebar columns p-0">
    <?php
    $args =  cpt('roto-releases',true,12,'ID');
    $q =  new WP_Query($args);
    if($q->have_posts()):
      while ($q->have_posts()): $q -> the_post();
      ?>
      <div class="columns p-0-2 rel">

        <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
          <img src="<?php echo the_field('imagen_portada');?>" alt="<?php echo the_field('link_a_artista_release')  . " - " . the_field('titulo_de_release');?>" />
        </div>

        <div class="columns p-0-1 h-a cortina-negro-bg">
          <a href="<?php echo get_the_permalink();?>" class="columns rel h-100 p-0-1 color-blanco color-primario-0-hover ">
            <!-- Titulo release -->
            <h4 class="h-a columns text-justify p-0 font-s">

              <?php echo the_field('titulo_de_release'); ?></h4>

              <!-- artista -->
              <div class="columns h-a font-m">
                <?php echo the_field('nombre_artista_release'); ?>
              </div>

              <!-- fecha release -->
              <div class="columns p-0 small-6 h-a text-right font-s">
                <?php echo the_field('dia_release') ."/". the_field('mes_release') ."/" . the_field('ano_release'); ?>
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
