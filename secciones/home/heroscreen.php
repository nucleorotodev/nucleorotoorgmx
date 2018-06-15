<section id="heroscreen" class="grid-x cell h-100-v p-top">

  <div class="columns p-0 h-85">
    <div id="hero-slider" class="slider-portada columns ovH p-0">

      <?php

      $args = cpt('roto-releases',true,8);
      $q = new WP_Query($args);

      if($q->have_posts()):
        while ($q->have_posts()): $q -> the_post();
        ?>
        <div class="columns p-0 rel text-shadow">
          <!-- fondo slide -->
          <div class="columns p-0 z-1 absUpL imgLiquid imgLiquidFill">

            <img src="<?php echo the_field('imagen_portada');?>" alt="<?php echo the_field('link_a_artista_release')  . " - " . the_field('titulo_de_release');?>" />

          </div>

          <div class="textos-slider row align-middle rel p-0 z-1k1 absUpL">
            <div class="textos-slider columns h-a p-0 color-white">

              <h1 class="titulo-slider-home columns p-1 text-center text-shadow color-blanco">

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
            <div class="columns small-8 medium-4 large-2 small-centered h-a">

              <a href="<?php echo get_permalink();?>" class="color-primario-0-bg color-primario-1-hover-bg color-blanco-hover color-negro columns p-1-1 font-s font-sm-m font-lg-l text-center shadow">

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

<div class="heroscreen-redes columns h-15 color-verde-roto-bg">

  <div class="row small-10 medium-8 large-6 small-centered align-middle">

    <div class="columns p-0 h-a">

      <?php echo get_template_part('secciones/modulos/redes') ?>

    </div>

  </div>

</div>


</section>
