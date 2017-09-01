<section id="releases-cards" class="columns small-12 large-9 h-a p-1 p-top color-blanco">

<!--  -->
<?php if (have_posts()):the_post(); ?>

<section class="grid-x cell h-90-v h-md-95-v" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_template_directory_uri();?>/img/header-dummie.jpg">

<div class="row align-middle">
<div class="columns p-l-3 p-r-3 h-a color-blanco">
  <?php get_template_part('secciones/modulos/iteracion-titulos'); ?>
</div>
</div>
</section>
<!--  -->
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
  $args =  cpt('roto-releases',true,6,'ID');
  $q =  new WP_Query($args);
  if($q->have_posts()):
    while ($q->have_posts()): $q -> the_post();
    ?>
    <div class="columns small-12 medium-6 h-45-v p-0 rel">

      <div class="columns absUpL z-1 p-0-3">
        <div class="columns imgLiquid imgLiquidFill">
          <img src="<?php echo the_field('imagen_portada');?>" alt="<?php echo the_field('link_a_artista_release')  . " - " . the_field('titulo_de_release');?>" />
        </div>
      </div>

      <a href="<?php echo get_the_permalink();?>" class="small-7 p-0-2 p-md-1 p-lg-2 absUpL z1k h-a text-left">

        <div class="columns p-0 z-1 cortina-negro absDownR">
        </div>

        <!-- Titulo release -->
        <h4 class="release-titulo columns p-0 h-a">

          <?php echo the_field('titulo_de_release'); ?>

        </h4>
        <small class="columns p-0-2 text-center">Descarga</small>

        </a>



      <div class="small-5 p-0-2 p-md-1 p-lg-2 absDownR z-1 h-a text-right">
        <div class="columns p-0 z-1 cortina-negro absDownR">
        </div>
          <!-- artista -->
          <div class="columns p-0 h-a font-m font-sm-l">
            <?php echo the_field('nombre_artista_release'); ?>
          </div>

          <!-- fecha release -->
          <div class="columns p-0 p-b-1 h-a text-right font-s font-sm-m">
            <span>
              <?php echo the_field('mes_release') ?>
            </span>  /
            <span>
              <?php echo the_field('ano_release') ?>
            </span>

          </div>

        </div>

    </div>

    <?php
  endwhile;

  get_template_part('secciones/general/paginacion-cpt');

else:
  ?>
  <div class="row align-midle p-1 p-md-2">
    <h1 class="columns h-a text-center color-blanco">

      <?php echo 'NR00 este colectívo no tiene releases aún' ?>

    </h1>
  </div>

  <?php

endif;

?>

</div>


</section>
