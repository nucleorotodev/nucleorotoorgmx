<section id="single-releases" class="columns small-12 large-9 h-a p-0 p-md-1 p-top color-blanco">

  <?php
  if (have_posts()):
    ?>
    <section class="grid-x cell h-70-v" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo the_field('imagen_cabecera_release');?>">

      <div class="row align-middle">
        <h2 class="word-break titulo-anim columns p-l-3 p-r-3 h-a color-blanco text-shadow">
          <?php echo the_field('nombre_artista_release'); ?>
        </h2>
        <h3 class="word-break titulo-anim columns p-l-3 p-r-3 h-a color-blanco text-shadow">
          <?php echo the_field('titulo_de_release'); ?>
        </h3>
      </div>
    </section>
    <!--  -->
    <?php
    while (have_posts()): the_post();
    // setPostViews(get_the_ID());
    ?>

    <div class="columns medium-6 p-4 h-60-v">
      <a href="<?php echo the_field('link-descarga-release')?>" target="_blank">
        <div class="columns p-0 imgLiquid imgLiquidNoFill">
          <img src="<?php echo the_field('imagen_portada');?>"/>
        </div>
      </a>
    </div>
    <!-- side info -->
    <div class="columns medium-6 p-0 p-md-1 h-a h-md-60-v">
      <div id="release-descripcion" class="row align-middle h-100 text-left">

        <div class="columns p-0 h-a">

          <div class="columns h-a">
            <small>Catálogo:</small>
            <div class="release-descripcion columns h-a numero-catalogo">
              <?php echo the_field('numero_de_catalogo'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Nombre:</small>
            <div class="release-descripcion columns h-a">
              <?php echo the_field('titulo_de_release'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Artista:</small>
            <div class="release-descripcion columns h-a">
              <a href="<?php echo the_field('link_a_artista_release');?>" target="_blank">
                <?php echo the_field('nombre_artista_release'); ?>
              </a>
            </div>
          </div>
          <!--  -->
          <div class="columns h-a m-t-1-2 p-1-2">
            <a class="boton-release-descarga columns text-center" href="<?php echo the_field('link-descarga-release')?>" target="_blank">
              Descarga / Download / Scaricare
            </a>
          </div>

        </div>

      </div>



    </div>

    <!--  -->

    <!-- General info -->
    <div class="columns h-a">
      <small>Released:</small>
      <ul>
        <li class="release-descripcion columns h-a">
          Pais:   <?php echo the_field('pais_release'); ?>
        </li>
        <li class="release-descripcion columns h-a">
          Fecha:  <?php echo the_field('dia_release'); ?> / <?php echo the_field('mes_release'); ?> / <?php echo the_field('ano_release'); ?>
        </li>
      </ul>
    </div>
    <div class="info-release columns h-a">
      <small>Tipo:</small>
      <div id="release-tipo" class="row align-middle h-100 text-left">
        <div class="release-descripcion columns small-12 h-a text-left">
          <?php echo the_field('tipo_de_release'); ?>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="info-release columns h-a p-b-1">
      <small>Formatos disponibles:</small>
      <div id="release-formato" class="row align-middle h-100">
        <div class="release-descripcion columns small-12 medium-12 h-a text-left">
          <?php echo the_field('formatos'); ?>
        </div>
      </div>
    </div>
    <!--  releases y compilaciones-->
    <div class="columns h-a">
      <div class="info-releases columns small-12 medium-6 text-justify">
        <small>
          Información:
        </small>
        <?php echo the_field('informacion_release'); ?>
      </div>
      <div class="info-releases columns small-12 medium-6 p-0 text-left">
        <small>
          Tracks:
        </small>
        <?php echo the_field('release-player'); ?>
      </div>
    </div>

    <?php
  endwhile;
endif;
?>

</section>
