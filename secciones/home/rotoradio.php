<section id="inicio-radio" class="grid-x cell columns small-12 large-6 h-100-v p-top rel color-nucleo-roto-bg end">



  <?php

  $args = array(
    'page_id' => 46,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>


  <div class="row small-12 align-middle">

    <div class="columns p-0 h-a text-center">
      <a href="<?php echo get_the_permalink(75)?>" target="_blank" class="color-secundario-0 color-terciario-0-hover">
      <h1 class="titulo-inicio-anim w-break p-b-2 text-center columns p-0"><?php echo get_the_title(); ?></h1>

      <!-- <i class="icono-radio small-3 fa fa-step-backward"></i> -->
      <i class="icono-radio small-4 fa fa-stop"></i>
      <i class="icono-radio small-4  fa fa-play"></i>
      <!-- <i class="icono-radio small-3 fa fa-step-forward"></i> -->


      <div class="columns h-a p-t-2 font-m font-md-l">
          <?php echo excerpt(22," ... Ir a la radio >>"); ?>
      </div>
    </a>
    </div>

  </div>

  <?php
endwhile;
endif;
?>

</section>
