<!-- Este archivo es la base para las secciones de el sitio -->
<section class="columns p-0 h-100-v p-top p-bottom">

<div class="heroscreen row align-middle">


  <div class="columns h-a">

    <?php

    $content = 'NUCLEOROTO Acid Trip Dev Team';
    $fuente = array('xs','s','m','l','xl','xxl');

    for ($i=0; $i <= 5 ; $i++):

      $content_mix = str_shuffle($content);
      ?>

      <div class="columns p-0 h-a text-center font-<?php echo $fuente[$i]; ?> text-shadow">

        <?php if ($i > 4):

          echo $content;

        else:

          echo $content_mix;

        endif; ?>

      </div>


    <?php endfor; ?>

  </div>

</div>
<!-- row -->

</section>
