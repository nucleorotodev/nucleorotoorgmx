<section id="single-releases" class="columns small-12 large-9 h-a p-0 p-md-1 p-top color-blanco">

  <?php
  if (have_posts()):
    ?>
    <section class="grid-x cell h-60-v" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo the_field('imagen_header_artista');?>">

      <div class="row align-middle">
        <h1 class="word-break titulo-anim columns p-l-3 p-r-3 h-a color-blanco text-shadow">
          <?php echo the_field('nombre_artista'); ?>
        </h1>
      </div>
    </section>
    <!--  -->
    <?php
    while (have_posts()): the_post();
    // setPostViews(get_the_ID());
    ?>

    <div class="columns medium-6 p-4 h-60-v">
      <div class="columns p-0 imgLiquid imgLiquidNoFill">
        <img src="<?php echo the_field('imagen_artista');?>"/>
      </div>
    </div>
    <!-- side info -->
    <div class="columns medium-6 p-0 p-md-1 h-a h-md-60-v">
      <div id="artista-descripcion" class="row align-middle h-100 text-left">

        <div class="columns p-0 h-a">

          <div class="columns h-a">
            <small>País :</small>
            <div class="artista-descripcion columns h-a">
              <?php echo the_field('pais_artista'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Redes:</small>
            <div class="artista-descripcion columns h-a">
              <?php echo the_field('redes_artista'); ?>
            </div>
          </div>

          <div class="columns h-a">
            <small>Proyectos alternos:</small>
            <div class="artista-descripcion columns h-a">
              <?php echo the_field('proyectos_alternos'); ?>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!--  -->

    <!-- Bio labels info -->
    <div class="info-artista columns h-a">
      <small>Bio :</small>
      <div id="artista-bio" class="row align-middle h-100 text-left">
        <div class="columns small-12 h-a text-left text-md-m">
          <?php echo the_field('bio'); ?>
        </div>
      </div>
    </div>
    <!-- otros labels info -->
    <div class="info-artista columns h-a p-b-1">
      <small>Colectivos o Labels :</small>
      <div id="artista-labels" class="row align-middle h-100">
        <?php
        for ($i=1; $i < 5; $i++):
          ?>
          <div class="columns small-12 medium-3 h-a text-left">
            <a href="<?php echo the_field('link_colectivo_' . $i); ?>" target="_blank">
              <?php echo the_field('label_o_colectivo_' . $i); ?>
            </a>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <!--  releases y compilaciones-->
    <div class="columns h-a">
      <div class="info-releases columns small-12 medium-6 p-0 text-left">
        <small>
          Releases:
        </small>
        <?php echo the_field('releases'); ?>
      </div>
      <div class="info-releases columns small-12 medium-6 p-0 text-left">
        <small>
          Compilaciones:
        </small>
        <?php echo the_field('compilaciones'); ?>
      </div>
    </div>

    <?php

  endwhile;
endif;

?>

</section>
