<section id="inicio-feed" class="grid-x cell columns small-12 large-6 h-100-v p-top rel color-terciario-0-bg color-blanco end">

  <a href="<?php echo get_the_permalink(7);?>" class="columns p-0 color-negro-hover">
    <h1 class="titulo-inicio-anim h-a columns p-0 text-center">
      RotoFeed
    </h1>
  </a>

  <div class="contenedor-inicio-feed row columns small-12 align-middle p-0">
    <!--  -->

    <?php echo do_shortcode('[simple-photo-feed view="18" size="small"]'); ?>    
    <!--  -->
    <div class="columns text-center h-5 p-0">
      <small class="color-verde-roto"> <a href="https://facebook.com/nucleorotomusica" target="_blank">Visita nuestro facebook</a> </small>
    </div>
    <!--  -->
  </div>

</section>
