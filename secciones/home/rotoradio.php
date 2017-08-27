<section id="inicio-blog" class="grid-x cell columns small-12 medium-6 h-100-v rel color-verde-roto-bg end">



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
      <a href="#" target="_blank" class="color-secundario-0 color-terciario-0-hover">
      <h1 class="titulo-inicio-radio p-b-2 text-center columns p-0"><?php echo get_the_title(); ?></h1>

      <!-- <i class="icono-radio small-3 fa fa-step-backward"></i> -->
      <i class="icono-radio small-4 fa fa-stop"></i>
      <i class="icono-radio small-4  fa fa-play"></i>
      <!-- <i class="icono-radio small-3 fa fa-step-forward"></i> -->


      <div class="columns h-a p-t-2 font-s font-md-m">
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
