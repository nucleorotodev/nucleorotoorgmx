<section id="inicio-label" class="grid-x cell columns p-0 h-a p-top rel">
  <!-- Textura fondo -->
  <div class="fondo-label columns p-0 absUpL top left h-100-v z-1k">

  </div>
  <?php

  $args = array(
    'page_id' => 43,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>

    <!-- <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/320x480/?text=Placeholder" alt="" />
      <?php //echo get_the_post_thumbnail(); ?>
    </div> -->

    <h1 class="titulo-inicio-label columns color-blanco"><?php echo get_the_title(); ?></h1>

    <?php
  endwhile;
endif;
?>
<?php
get_template_part('secciones/home/artistas');
get_template_part('secciones/home/releases');
get_template_part('secciones/home/mixtapes');
?>

<!-- repite loop del inicio del documento por conflictos con loops hijos -->
<?php
$args = array(
  'page_id' => 43,
);
$query = new WP_Query($args);

if($query->have_posts()):
  while ($query->have_posts()): $query -> the_post();
  ?>


  <div class="columns color-blanco">
    <div class="columns text-justify font-s font-md-m">

      <?php echo get_the_content(); ?>
    </div>
  </div>

  <?php
endwhile;
endif;
?>

<div id="boton-inicio-booking" class="columns p-top m-b-2 align-center">

  <div class="columns small-1 medium-3 large-4 p-0-2 p-l-0-2 p-r-0-2">
  </div>

  <a href="#" class="columns small-10 medium-6 large-4 p-0-2 p-l-0-2 p-r-0-2 font-m font-md-lg text-center color-blanco color-blanco-bd color-negro-bg color-negro-hover color-blanco-hover-bg">
    Bookea algún proyecto
  </a>

  <div class="columns small-1 medium-3 large-4 p-0-2 p-l-0-2 p-r-0-2">
  </div>

</div>

</section>
