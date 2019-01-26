<?php
/*
Template Name: RotoRadio
*/

get_header();

?>
<section class="columns small-12 large-9 p-0 color-blanco p-top">

<?php

get_template_part('secciones/radio/contenido-radio');

// get_template_part('secciones/radio/programacion-radio');

?>


<!-- </div> -->

<!-- share -->
<div class="columns h-a p-t-1">
  <h3 class="col text-center">Comparte este Stream</h3>
<div class="container">
  <?php
  if(function_exists('social_warfare')):
    social_warfare();
  endif;
  ?>
</div>
</div>
<!--  -->

</section>
<?php
get_footer();
