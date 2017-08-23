<div class="grid-x cell">

    <?php

    $content = get_the_title();
    $fuente = array('xxxs','xxs','s','m','l','xxxl');
    $length = count($fuente) - 1 ;
    for ($i=0; $i <= $length ; $i++):

      $content_mix = str_shuffle($content);
      ?>

      <h1 class="grid-x h-a text-right font-<?php echo $fuente[$i]; ?> text-shadow">

        <?php if ($i > 4 ):

          echo $content;
          // echo $i;
        else:

          echo $content_mix;

        endif; ?>

      </h1>


    <?php endfor; ?>

</div>
