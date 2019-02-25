<section id="single-mixtape" class="columns small-12 large-9 h-a p-0 p-md-1 p-top color-blanco">

  <?php
  if (have_posts()):
    ?>
    <section class="grid-x cell h-70-v" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo the_field('imagen_cabecera_mixtape');?>">

      <div class="row align-middle">
        <h2 class="word-break titulo-header-mixtapes titulo-anim columns h-a color-blanco text-shadow">
          <?php echo the_field('nombre_proyecto_mixtape'); ?>
        </h2>
        <h3 class="word-break subtitulo-header-mixtapes titulo-anim columns h-a color-blanco text-shadow">
          <?php echo the_field('titulo_del_mixtape'); ?>
        </h3>
      </div>
    </section>
    <!--  -->
    <?php
    while (have_posts()): the_post();
    // setPostViews(get_the_ID());
    ?>

    <div class="img-perfil columns medium-6 p-4">
      <a href="<?php echo the_field('link-descarga-mixtape')?>" target="_blank">
        <div class="columns p-0 imgLiquid imgLiquidNoFill">
          <img src="<?php echo the_field('imagen_portada_mixtape');?>"/>
        </div>
      </a>
    </div>
    <!-- side info -->
    <div class="columns medium-6 p-0 p-md-1 h-a">
      <div id="mixtape-descripcion" class="row align-middle h-100 text-left">

        <div class="columns p-0 h-a">

          <div class="columns h-a">
            <small>Catálogo:</small>
            <div class="mixtape-descripcion columns h-a numero-catalogo">
              <?php echo the_field('numero_de_catalogo'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Nombre:</small>
            <div class="mixtape-descripcion columns h-a">
              <?php echo the_field('titulo_del_mixtape'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Artista:</small>
            <div class="mixtape-descripcion columns h-a">
              <a href="<?php echo the_field('link_proyecto_mixtape');?>" target="_blank">
                <?php echo the_field('nombre_proyecto_mixtape'); ?>
              </a>
            </div>
          </div>
          <!--  -->
          <div class="columns h-a m-t-1-2 p-1-2">
            <!-- <a class="boton-release-descarga columns text-center" href="<?php //echo the_field('link-descarga-mixtape')?>" target="_blank">
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
    $id = get_field('mixtape_download_manager_id');
    $link_drive = get_field('mixtape_download_link');
    // boton download manager
    ?>
    <div class="columns">

      <?php
      echo do_shortcode('[download id=" '. $id .' "]');
      ?>
    </div>
    <?php

    //boton drive
    if (!empty($link_drive)):
      ?>
      <div class="info-title columns small-12 h-a p-0-3">
        <p>
          <a class="aligncenter download-button" href="<?php echo $link_drive;?>" rel="nofollow" target="_blank">
            <small><b>¿problemas para descargar? Utiliza este espejo</b> </small>
            External Download “<?php echo the_field('numero_de_catalogo');?>”
            <small>Descarga directa desde GDrive, Archivo:
              <?php echo the_field('numero_de_catalogo');?>.zip</small>
            </a></p>
          </div>
        <?php endif; ?>
        <!--  -->
      </div>

    </div>

  </div>



</div>

<!--  -->

<!-- General info -->
<div class="columns h-a">
  <small>Released:</small>
  <ul>
    <li class="mixtape-descripcion columns h-a">
      Pais:   <?php echo the_field('pais_mixtape'); ?>
    </li>
    <li class="mixtape-descripcion columns h-a">
      Fecha:  <?php echo the_field('dia_mixtape'); ?> / <?php echo the_field('mes_mixtape'); ?> / <?php echo the_field('ano_mixtape'); ?>
    </li>
  </ul>
</div>
<!--  texto + html player-->
<div class="info-mixtape columns p-0 h-a">
  <!--  -->
  <div class="info-mixtape columns small-12 large-6 text-left">
    <small>
      Información:
    </small>
    <?php echo the_field('informacion_del_mixtape'); ?>

    <!-- share -->
    <div class="grid-x p-t-2">
      <h3 class="small-12 text-center">Comparte este Mixtape</h3>
      <?php
      if(function_exists('social_warfare')):
        social_warfare();
      endif;
      ?>
    </div>
    <!--  -->

  </div>
  <!--  -->
  <div id="player" class="info-mixtape columns small-12 large-6 text-left show-for-large" data-sticky-container>
    <small>
      Player:
    </small>
    <div class="columns p-t-0-2" data-sticky data-top-anchor="player" data-btm-anchor="footer-widgets">
      <center >
        <?php echo the_field('mixtape-player'); ?>
      </center>
    </div>
  </div>
  <!-- small & medium -->
  <div id="player" class="info-title info-release columns small-12 large-6 text-left hide-for-large">
    <small>
      Player:
    </small>
    <div class="columns p-t-0-2">
      <center >
        <?php echo the_field('mixtape-player'); ?>
      </center>
    </div>
  </div>
</div>

<?php
endwhile;
endif;
?>

</section>
