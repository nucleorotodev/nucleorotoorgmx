<section id="single-post" class="columns small-12 large-9 h-a p-1 p-top color-blanco">

  <?php
  if (have_posts()):

    while (have_posts()): the_post();
    setPostViews(get_the_ID());
    ?>

    <div class="columns small-12 medium-7 p-0-2 p-md-1 h-70-v">
      <div class="columns" data-parallax="scroll" data-speed="0.25" data-image-src="<?php echo get_the_post_thumbnail_url();?>">
      </div>
    </div>
    <div class="columns small-12 medium-5 p-0-2 p-md-1 h-30-v">
      <div class="row align-middle h-100">
        <h4 class="columns word-break text-right">
          <?php echo get_the_title(); ?>
        </h4>
      </div>
    </div>

    <div class="columns small-12 p-1 h-a">

      <div class="columns small-12 medium-4 p-0 text-left">
        <small>
          <?php echo get_the_date(); ?>
        </small>
      </div>
      <!--  -->
      <div class="columns small-12 medium-4 p-0 text-center">
        <small>
          Escrito: <?php echo get_comment_author(); ?>
        </small>
      </div>
      <!--  -->
      <div class="columns small-12 medium-4 p-0 text-right">
        <?php echo "<small>Server calls: </small>" . getPostViews(get_the_ID()); ?>
      </div>

    </div>
    <!--  -->
    <div class="columns small-12 p-1 h-a">
      <?php echo get_the_content(); ?>
    </div>

    <?php

  endwhile;

endif;

?>

</section>
