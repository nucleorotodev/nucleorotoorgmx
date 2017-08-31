<?php
/*
Template Name: RotoRadio
*/

get_header();

?>
<section class="columns small-12 large-9 p-0 h-100-v color-blanco p-top">

<?php
if (have_posts()):
  while (have_posts()): the_post();
  ?>

  <h1 class="columns text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>


  <!-- <div class="columns p-1 text-justify"> -->
    <?php //echo get_the_content(); ?>


    <!-- mientras -->
    <div class="row small-10 small-centered h-70 p-1 align-middle card">

      <h1 class="columns h-a text-center font-huge ">
        Proximamente.
      </h1>

    </div>
    <!--  -->


  <!-- </div> -->

  <?php
endwhile;
endif;
?>



</section>
<?php
get_footer();
