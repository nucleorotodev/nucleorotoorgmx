<div class="grid-x cell">

  <ul id="iteracion-titulo" class="grid-x">

    <?php

    $content = get_the_title();
    $fuente = array('xxs','xs','m','l','xl','xxl');
    $length = count($fuente) - 1 ;
    for ($i=0; $i <= $length ; $i++):

      $content_mix = str_shuffle($content);
      ?>
      <li class="cell h-a">
        <h1 class="titulo-anim grid-x h-a font-<?php echo $fuente[$i]; ?> text-shadow">

          <?php if ($i > 4 ):

            echo $content;
          else:

            echo $content_mix;

          endif; ?>

        </h1>

      </li>

    <?php endfor; ?>

  </ul>


</div>
