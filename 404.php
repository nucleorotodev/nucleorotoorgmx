<?php

get_header();

?>
<section id="blog-cards" class="columns small-12 large-9 h-100-v p-1 p-top color-blanco">

<div class="row align-middle p-top">

  <?php

  $content = "404";
  $fuente = array('xxxs','xxs','s','m','l','xl','font-huge');
  $length = count($fuente) - 1 ;
  for ($i=0; $i <= $length ; $i++):

    $content_mix = str_shuffle($content);
    ?>
      <h1 class="titulo-anim grid-x h-a font-<?php echo $fuente[$i]; ?>">

        <?php if ($i > 5 ):

          echo $content;
        else:

          echo $content_mix;

        endif; ?>

      </h1>

  <?php endfor; ?>

</section>


</div>

<?php
get_footer();
 ?>
