<?php

get_header();


?>
<section class="columns small-12 large-9 p-0 color-blanco">



  <?php

  for ($i=0; $i < 999; $i++) {
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
