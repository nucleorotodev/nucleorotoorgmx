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

  <h1 class="titulo-anim columns text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>


  <!-- <div class="x-grid p-1 text-center">

    <?php echo get_the_content(); ?>
  
  </div> -->

  <div class="x-grid h-a p-0">
    <div id="radio-widget" class="text-center">
 
      <script src="//myradiostream.com/embed/NRGramofono"></script>

    </div>
  </div>


  <?php
endwhile;
endif;
?>



</section>
<?php
get_footer();
