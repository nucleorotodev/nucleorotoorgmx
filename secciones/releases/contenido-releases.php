<section id="releases-cards" class="columns small-12 large-9 h-a p-0 p-lg-1 p-top color-blanco">

  <!--  -->
  <?php if (have_posts()):the_post(); ?>

    <section class="grid-x cell h-100-v h-md-85-v" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_the_post_thumbnail_url();?>">

      <div class="row align-middle">
        <div class="columns h-a color-blanco">
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
      $args =  cpt('roto-releases',$paged,20,'date');
      $q =  new WP_Query($args);
      if($q->have_posts()):
        while ($q->have_posts()): $q -> the_post();
        ?>
        <div class="columns small-12 medium-6 h-45-v p-0 rel">

          <div class="columns absUpL z-1 p-0-3">
            <div class="columns imgLiquid imgLiquidFill">
              <img src="<?php echo get_field('imagen_cabecera_release');?>" alt="<?php echo get_field('link_a_artista_release')  . " - " . get_field('titulo_de_release');?>" />
            </div>
          </div>

          <a href="<?php echo get_the_permalink();?>" class="small-12 p-0-2 p-md-1 p-lg-2 absUpL z1 h-100 text-left">

            <div class="columns p-0 z-1 cortina-negro absDownR">
            </div>

            <!-- Titulo release -->
            <h3 class="release-titulo columns p-0 h-a text-left p-t-0-2">

              <?php echo get_field('titulo_de_release'); ?>

            </h3>
            <strong class="columns p-0-2 text-center">Descarga</strong>

          </a>



          <div class="small-5 p-0-2 p-md-1 p-lg-2 absDownR z-1 h-a text-right">
            <div class="columns p-0 z-1 cortina-negro absDownR">
            </div>
            <!-- artista -->
            <div class="columns p-0 h-a font-m font-sm-l">
              <?php echo get_field('nombre_artista_release'); ?>
            </div>

            <!-- fecha release -->
            <div class="columns p-0 p-b-1 h-a text-right font-s font-sm-m">
              <span>
                <?php echo get_field('mes_release') ?>
              </span>  /
              <span>
                <?php echo get_field('ano_release') ?>
              </span>

            </div>

          </div>

        </div>

        <?php
      endwhile;

      add_pagination($q);
      
    else:
      ?>
      <div class="row align-midle p-1 p-md-2">
        <h1 class="columns h-a text-center color-blanco">

          <?php echo 'NR00 este colectívo aún no tiene Releases' ?>

        </h1>
      </div>

      <?php

    endif;

    ?>

  </div>

</div>

<!-- share -->
<div class="grid-x p-t-3">
  <?php
  if(function_exists('social_warfare')):
    social_warfare();
  endif;
  ?>
</div>
<!--  -->

</section>
