<div class="grid-x cell">

  <ul id="iteracion-titulo" class="">

    <?php

    $content = get_the_title();
    $fuente = array('xxxs','xxs','s','m','l','xl');
    $length = count($fuente) - 1 ;
    for ($i=0; $i <= $length ; $i++):

      $content_mix = str_shuffle($content);
      ?>
      <li class="cell h-a">
        <h1 class="grid-x h-a font-<?php echo $fuente[$i]; ?> text-shadow">

          <?php if ($i > 4 ):

            echo $content;
            // echo $i;
          else:

            echo $content_mix;

          endif; ?>

        </h1>

      </ li>

    <?php endfor; ?>

  </ul>


</div>
