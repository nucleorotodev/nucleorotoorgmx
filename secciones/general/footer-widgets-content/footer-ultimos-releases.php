<section class="columns p-0-2 color-blanco font-m font-md-s font-lg-l">

  <div class="columns small-11 medium-6 large-10 small-centered">

    <!-- <h5 class="columns text-center p-0">Ultimos Releases</h5> -->
    <?php

    $args = cpt('roto-releases',true,9,'rand');
    $q = new WP_Query($args);

    if($q->have_posts()):
      while ($q->have_posts()): $q -> the_post();
      ?>
      <div class="thumb-ultimos columns small-4 p-0-1 rel">
        <a href="<?php echo get_permalink()?>" class="columns p-0 h-100">

          <!-- thumbnail -->
          <div class="thumb-card columns  p-0 z1 imgLiquid imgLiquidNoFill">

            <img src="<?php echo the_field('imagen_portada');?>" alt="<?php echo the_field('link_a_artista_release')  . " - " . the_field('titulo_de_release');?>" />

          </div>
        </a>

      </div>

      <?php

        endwhile;
      endif;
    ?>

  </div>
