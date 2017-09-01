<div id="inicio-artistas" class="grid-x cell columns p-0-2 small-12 medium-4 h-35-v h-md-50-v">

  <?php
  $args = array(
    'page_id' => 36,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>

    <div class="columns p-0-2 p-lg-1">
      <a href="<?php echo get_the_permalink(15)?>" class="row align-middle rel p-b-0-3 color-primario-0-bg color-primario-1-hover-bg color-blanco shadow-up">

        <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
          <img src="http://fakeimg.pl/320x480/?text=Placeholder" alt="" />
          <?php //echo get_the_post_thumbnail(); ?>
        </div>

        <div class="columns h-a">
          <h5 class="columns p-0-2 text-left font-lg-xxl"><?php echo get_the_title(); ?></h5>
          <span class="columns p-0-2 text-justify font-s font-sm-m font-lg-l card-section"><?php echo get_the_content(); ?></span>
        </div>
      </a>
    </div>

    <?php
  endwhile;
endif;

?>

</div>
