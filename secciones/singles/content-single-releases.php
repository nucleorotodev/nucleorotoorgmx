<section id="single-release" class="columns small-12 large-9 h-a p-0 p-md-1 p-top color-blanco">

  <?php
  if (have_posts()):
    ?>
    <section class="grid-x cell h-70-v" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo get_field('imagen_cabecera_release');?>">

      <div class="row align-middle">
        <h2 class="word-break titulo-header-releases titulo-anim columns h-a color-blanco text-shadow">
          <?php echo get_field('nombre_artista_release'); ?>
        </h2>
        <h3 class="word-break subtitulo-header-releases titulo-anim columns h-a color-blanco text-shadow">
          <?php echo get_field('titulo_de_release'); ?>
        </h3>
      </div>
    </section>
    <!--  -->
    <?php
    while (have_posts()): the_post();
    // setPostViews(get_the_ID());
    ?>

    <div class="info-title info-release columns p-0 h-a">
      <div class="img-perfil columns medium-6 p-4">
        <a href="<?php echo get_field('link-descarga-release')?>" target="_blank">
          <div class="columns p-0 imgLiquid imgLiquidNoFill">
            <img src="<?php echo get_field('imagen_portada');?>"/>
          </div>
        </a>
      </div>
      <!-- side info -->
      <div class="columns medium-6 p-0 p-md-1 h-a">
        <div id="release-descripcion" class="row align-middle h-100 text-left">

          <div class="columns p-0 h-a">

            <div class="info-title columns h-a">
              <small>Catálogo:</small>
              <div class="release-descripcion columns h-a numero-catalogo">
                <?php echo get_field('numero_de_catalogo'); ?>
              </div>
            </div>

            <div class="info-title columns h-a">
              <small>Nombre:</small>
              <div class="release-descripcion columns h-a">
                <?php echo get_field('titulo_de_release'); ?>
              </div>
            </div>

            <div class="info-title columns h-a">
              <small>Artista:</small>
              <div class="release-descripcion columns h-a">
                <a href="<?php echo get_field('link_a_artista_release');?>" target="_blank">
                  <?php echo get_field('nombre_artista_release'); ?>
                </a>
              </div>
            </div>

            <!--  -->
            <div class="info-title columns small-12 h-a p-0-3">
              <?php
              $id = get_field('release_download_manager_id');
              $id2 = get_field('release_download_manager_id_version_2');
              $id3 = get_field('release_download_manager_id_version_3');
              $link_drive = get_field('release_download_link');
              if (!empty($id)) {
              echo do_shortcode('[download id=" '. $id .' "]');
              }
              if (!empty($id2)) {
                echo do_shortcode('[download id=" '. $id2 .' "]');
              }
              if (!empty($id3)) {
                echo do_shortcode('[download id=" '. $id3 .' "]');
              }
              ?>
            </div>
            <!-- boton drive -->
            <?php
            if (!empty($link_drive)) {
              ?>
              <div class="info-title columns small-12 h-a p-0-3">
                <p>
                  <a class="aligncenter download-button" href="<?php echo $link_drive;?>" rel="nofollow" target="_blank">
                    <small><b>¿Problemas para descargar? Utiliza este espejo externo </b></small>
                    External Download “<?php echo get_field('numero_de_catalogo');?>”
                    <small>Descarga directa desde nuestro Drive, Archivo:
                      <?php echo get_field('numero_de_catalogo');?>.zip</small>
                    </a></p>
                  </div>
                <?php } ?>
                <!--  -->
              </div>

            </div>

          </div>
        </div>

        <!--  -->

        <!-- General info -->
        <!-- player -->
        <div class="info-title info-release columns small-12 large-6 p-0 h-a">

          <!-- large sticky-->
          <div id="player" class="info-title info-release columns text-left show-for-large" data-sticky-container>
            <small>
              Player:
            </small>
            <div class="columns p-t-0-2" data-sticky data-top-anchor="player" data-btm-anchor="footer-widgets">
              <center >
                <?php echo get_field('release-player'); ?>
              </center>
            </div>
          </div>
          <!-- small & medium -->
          <div id="player" class="info-title info-release columns text-left hide-for-large">
            <small>
              Player:
            </small>
            <div class="columns p-t-0-2">
              <center >
                <?php echo get_field('release-player'); ?>
              </center>
            </div>
          </div>
        </div>
        <!-- end player -->
        <!--  -->
        <!--  texto + html player-->
        <div class="info-title info-release columns small-12 large-6 p-0 h-a">
          <!-- Bloque 1 -->
          <div class="info-title columns h-a">
            <small>Released:</small>
            <ul>
              <li class="release-descripcion columns h-a">
                País:   <?php echo get_field('pais_release'); ?>
              </li>
              <li class="release-descripcion columns h-a">
                Fecha:  <?php echo get_field('dia_release'); ?> / <?php echo get_field('mes_release'); ?> / <?php echo get_field('ano_release'); ?>
              </li>
              <li class="release-descripcion columns h-a">
                Tipo:  <?php echo get_field('tipo_de_release'); ?>
              </li>
            </ul>
          </div>
          <!--  -->
          <div class="info-title info-release columns h-a p-b-1">
            <small>Formatos disponibles:</small>
            <div id="release-formato" class="row align-middle h-100">
              <div class="release-descripcion columns small-12 medium-12 h-a text-left">
                <?php echo get_field('formatos'); ?>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="info-title info-release columns text-left">
            <small>
              Información:
            </small>
            <?php echo get_field('informacion_release'); ?>
          </div>

          <!-- share -->
          <div class="grid-x p-t-2">
            <h3 class="small-12 text-center">Comparte este Release</h3>
            <?php
            if(function_exists('social_warfare')):
              social_warfare();
            endif;
            ?>
          </div>
          <!--  -->

        </div>

        <?php
      endwhile;
    endif;
    ?>

  </section>
