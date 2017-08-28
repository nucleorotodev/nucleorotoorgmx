<?php

get_header();


?>
<section class="x-grid cell color-blanco">



  <?php

  for ($i=0; $i < 200; $i++) {
    ?>
    <div class="columns small-1 text-center end">
      <?php
      echo 'page ' . $i;
      ?>

    </div>
    <?php
  }
  ?>


</section>




<?php
get_footer();
?>
