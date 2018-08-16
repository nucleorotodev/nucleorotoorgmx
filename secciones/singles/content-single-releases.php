<section id="single-release" class="columns small-12 large-9 h-a p-0 p-md-1 p-top color-blanco">

  <?php
  if (have_posts()):
    ?>
    <section class="grid-x cell h-70-v" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo the_field('imagen_cabecera_release');?>">

      <div class="row align-middle">
        <h2 class="word-break titulo-header-releases titulo-anim columns h-a color-blanco text-shadow">
          <?php echo the_field('nombre_artista_release'); ?>
        </h2>
        <h3 class="word-break subtitulo-header-releases titulo-anim columns h-a color-blanco text-shadow">
          <?php echo the_field('titulo_de_release'); ?>
        </h3>
      </div>
    </section>
    <!--  -->
    <?php
    while (have_posts()): the_post();
    // setPostViews(get_the_ID());
    ?>

    <div class="img-perfil columns medium-6 p-4">
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

          <div class="info-title columns h-a">
            <small>Catálogo:</small>
            <div class="release-descripcion columns h-a numero-catalogo">
              <?php echo the_field('numero_de_catalogo'); ?>
            </div>
          </div>

            <div class="info-title columns h-a">
              <small>Nombre:</small>
              <div class="release-descripcion columns h-a">
                <?php echo the_field('titulo_de_release'); ?>
              </div>
            </div>

            <div class="info-title columns h-a">
              <small>Artista:</small>
              <div class="release-descripcion columns h-a">
                <a href="<?php echo the_field('link_a_artista_release');?>" target="_blank">
                  <?php echo the_field('nombre_artista_release'); ?>
                </a>
              </div>
            </div>

          <!--  -->
          <div class="info-title columns small-12 h-a p-1-2">
            <!-- <a class="boton-release-descarga columns text-center" href="<?php //echo the_field('link-descarga-release')?>" target="_blank">
              <ul>
                <li>
                  Descarga&nbsp;/&nbsp;Download&nbsp;/&nbsp;Scaricare&nbsp;
                </li>
                <li>
                  <i class="fa fa-arrow-down"></i>
                </li>
              </ul>
            </a> -->
            <?php
            $id = get_field('download_manager_shortcode');
            echo do_shortcode($id);
            ?>
          </div>

        </div>

      </div>



    </div>

    <!--  -->

    <!-- General info -->
    <div class="info-title columns h-a">
      <small>Released:</small>
      <ul>
        <li class="release-descripcion columns h-a">
          Pais:   <?php echo the_field('pais_release'); ?>
        </li>
        <li class="release-descripcion columns h-a">
          Fecha:  <?php echo the_field('dia_release'); ?> / <?php echo the_field('mes_release'); ?> / <?php echo the_field('ano_release'); ?>
        </li>
        <li class="release-descripcion columns h-a">
          Tipo:  <?php echo the_field('tipo_de_release'); ?>
        </li>
      </ul>
    </div>
    <!--  -->
    <div class="info-title info-release columns h-a p-b-1">
      <small>Formatos disponibles:</small>
      <div id="release-formato" class="row align-middle h-100">
        <div class="release-descripcion columns small-12 medium-12 h-a text-left">
          <?php echo the_field('formatos'); ?>
        </div>
      </div>
    </div>
    <!--  texto + html player-->
    <div class="info-title info-release columns p-0 h-a">
      <!--  -->
      <div class="info-title info-release columns small-12 large-6 text-justify">
        <small>
          Información:
        </small>
        <?php echo the_field('informacion_release'); ?>
      </div>
      <!--  -->
      <div class="info-title info-release columns small-12 large-6 text-left">
        <small>
          Player:
        </small>
        <div class="columns p-t-0-2">
          <center>
          <?php echo the_field('release-player'); ?>
        </center>
        </div>
      </div>
    </div>

    <?php
  endwhile;
endif;
?>

</section>
