<?php
/*
Template Name: RotoFontTest
*/

get_header('inicio');

?>

<section class="grid-x cell h-a p-top color-blanco">

  <div class="columns small-10 small-centered">

    <div class="columns m-b-4">
      <h1 class="columns small-12 h-a p-0-2 subheader text-center">Headings</h1>

      <?php

      for ($i=1; $i < 9; $i++):
        ?>

        <span class="columns small-1 p-0-2"><?php echo $i ?></span>
        <h1 class="columns small-11 h-a p-0-2  text-left font-headings-<?php echo $i;?>">Nucleoroto ipsum est</h1>

      <?php endfor; ?>
    </div>
    <!--  -->
    <div class="columns m-b-4">

      <h1 class="columns small-12 h-a p-0-2 subheader text-center">Contenidos</h1>

      <?php

      for ($i=1; $i < 7; $i++):
        ?>

        <span class="columns small-1 p-0-2"><?php echo $i ?></span>
        <p class="columns small-11 h-a p-0-2  text-left font-l font-contenidos-<?php echo $i;?>">Nucleoroto ipsum est</p>

      <?php endfor; ?>
    </div>
    <!--  -->
    <div class="columns m-b-4">
      <h1 class="columns p-0-2 subheader text-center">Especiales</h1>

      <?php

      for ($i=1; $i < 6; $i++):
        ?>
        <span class="columns small-1 p-0-2"><?php echo $i ?></span>
        <h3 class="columns small-11 h-a p-0-2 text-left font-especial-<?php echo $i;?>">Nucleoroto ipsum est</h3>

      <?php endfor; ?>
    </div>

  </div>

</section>




<?php get_footer('inicio'); ?>
