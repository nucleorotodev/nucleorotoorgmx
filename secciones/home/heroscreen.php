<section id="heroscreen" class="grid-x cell h-100-v p-top">

  <div class="columns p-0 h-85">
    <div id="hero-slider" class="slider-portada columns ovH p-0">

      <?php

      $args = cpt('roto-releases',true,4);
      $q = new WP_Query($args);

      if($q->have_posts()):
        while ($q->have_posts()): $q -> the_post();
        ?>
        <div class="columns p-0 rel text-shadow">
          <!-- fondo slide -->
          <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

            <img src="<?php echo the_field('imagen_cabecera_release');?>" alt="<?php echo the_field('nombre_artista_release')  . " - " . the_field('titulo_de_release');?>" />

          </div>

          <div class="textos-slider row align-middle rel p-0 z-1k1 absUpL">
            <div class="textos-slider columns h-a p-0 color-white">

              <h3 class="titulo-slider-home columns text-center color-blanco">
                <?php
                echo the_field('nombre_artista_release');
                ?>
              </h3>
              <h1 class="titulo-slider-home columns text-center color-blanco">
                <?php
                echo get_the_title();
                ?>
              </h1>

            <div class="columns small-8 medium-4 large-2 small-centered h-a">

              <a href="<?php echo get_permalink();?>" class="boton-roto columns">

                <?php

                echo 'Descarga  ';

                ?>

              </a>

            </div>

          </div>
        </div>


      </div>

      <?php

    endwhile;
  endif;

  ?>

</div>
</div>

<div class="heroscreen-redes columns h-15 color-nucleo-roto-bg">

  <div class="row small-10 medium-8 large-6 small-centered align-middle">

    <div class="columns p-0 h-a">

      <?php echo get_template_part('secciones/modulos/redes') ?>

    </div>

  </div>

</div>


</section>
