 <section id="inicio-label" class="grid-x cell columns p-0 h-a p-top rel">
  <!-- Textura fondo -->
  <div class="fondo-label columns p-0 absUpL top left h-100-v z-1k">
  </div>

  <?php
  $args = array(
    'page_id' => 43,
  );
  $q = new WP_Query($args);

  if($q->have_posts()):
    while ($q->have_posts()): $q -> the_post();
    ?>

    <h1 class="titulo-inicio-anim columns color-blanco text-center"><?php echo get_the_title();?></h1>

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


  <div class="columns p-2 p-t-1 color-blanco">
    <div class="column text-center font-l font-lg-xl">
      <?php echo get_the_content(); ?>
    </div>
  </div>

  <?php
endwhile;
endif;
?>

<div id="boton-inicio-booking" class="columns p-t-0-2 m-b-2 align-center text-center">

  <div class="columns small-2 medium-4 medium-3 large-4 p-0-2 p-l-0-2 p-r-0-2"></div>

  <a href="<?php echo get_the_permalink(71);?>" class="boton-roto columns small-8 medium-4">
    Bookea algún proyecto
  </a>

  <!-- <div class="columns small-1 medium-3 large-4 p-0-2 p-l-0-2 p-r-0-2"></div> -->

</div>

</section>
