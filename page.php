<?php

get_header();


?>
<section class="columns small-12 large-9 p-0 color-blanco p-top">

  <?php
  if (have_posts()):
    while (have_posts()): the_post();
    ?>

    <h1 class="columns text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>


    <div class="columns p-1 text-justify">
      <?php echo get_the_content(); ?>
    </div>

    <?php
  endwhile;
endif;
?>



</section>




<?php
get_footer();
?>
