<section id="artistas-cards" class="columns small-12 large-9 h-a p-0 p-lg-1 p-top color-blanco">

  <!--  -->
  <?php if (have_posts()):the_post(); ?>

    <section class="grid-x cell h-100-v h-md-85-v" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_the_post_thumbnail_url();?>">

      <div class="row align-middle">
        <div class="columns p-l-3 p-r-3 h-a color-blanco">
          <?php get_template_part('secciones/modulos/iteracion-titulos'); ?>
        </div>
      </div>
    </section>
    <!--  -->

    <div class="columns h-a">

      <div class="columns text-justify h-a font-s font-sm-m p-t-2">
        <?php
        echo get_the_content();
        ?>
      </div>
      <?php
    endif;
    ?>

    <div class="columns small-12 p-0-3 h-a rel">

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args =  cpt('roto-artistas',$paged,12,'ID');
      $q =  new WP_Query($args);
      if($q->have_posts()):
        while ($q->have_posts()): $q -> the_post();
        ?>
        <div class="columns small-12 medium-6 h-45-v p-0 rel">

          <div class="columns absUpL z-1 p-0-3">
            <div class="columns imgLiquid imgLiquidNoFill">
              <img src="<?php echo the_field('imagen_artista');?>" alt="<?php echo the_field('nombre_artista');?>">
            </div>
          </div>

          <div class="row align-middle small-10 small-centered p-0-2 p-md-1 p-lg-2">
            <a href="<?php echo get_the_permalink();?>" class="columns h-a h-a text-center">

              <div class="columns p-0 z-1 cortina-negro absDownR">
              </div>

              <h3 class="release-titulo columns p-0 h-a">

                <?php echo the_field('nombre_artista'); ?>

              </h3>

            </a>
          </div>

        </div>

        <?php
      endwhile;

      get_template_part('secciones/modulos/paginacion-cpt');

    else:
      ?>
      <div class="row align-midle p-1 p-md-2">
        <h1 class="columns h-a text-center color-blanco">

          <?php echo '404 este colectívo aún no tiene Artistas'; ?>

        </h1>
      </div>

      <?php

    endif;

    ?>

  </div>

</div>

</section>
