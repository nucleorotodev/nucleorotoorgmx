<?php
/*
Template Name: RotoContacto
*/
get_header();

?>
<section class="columns small-12 large-9 p-0 color-blanco p-top">

  <?php
  if (have_posts()):
    while (have_posts()): the_post();
    ?>

    <h1 class="columns text-center p-0-3 color-blanco">
      <?php echo get_the_title(); ?>
    </h1>
    <!--  -->
    <div class="columns p-0 small-11 medium-9 large-10 xlarge-9 small-centered h-a">

      <div class="columns p-1 font-s font-sm-m text-justify">
        <?php echo get_the_content(); ?>
      </div>
      <!--  -->
      <div class="columns p-0-2 p-md-1 font-s font-sm-m text-justify color-blanco">

        <?php echo do_shortcode('[contact-form-7 id="19" title="RotoContacto"]'); ?>

      </div>

    </div>

    <?php
  endwhile;
endif;
?>



</section>




<?php
get_footer();
?>
