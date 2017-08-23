<div class="row align-middle">


  <div class="columns h-a">

    <?php

    $content = 'Titulo glitch iterado doom';
    $fuente = array('xs','s','m','l','xl','xxl');

    for ($i=0; $i <= 5 ; $i++):

      $content_mix = str_shuffle($content);
      ?>

      <h1 class="columns p-0 h-a text-center font-<?php echo $fuente[$i]; ?> text-shadow">

        <?php if ($i > 4):

          echo $content;

        else:

          echo $content_mix;

        endif; ?>

      </h1>


    <?php endfor; ?>

  </div>

</div>
