<div id="inicio-mixtapes" class="grid-x cell columns p-0-2 small-12 large-4 h-35-v h-md-50-v">

  <?php
  $args = array(
    'page_id' => 40,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>
    <div class="columns p-0-2 p-lg-1">

      <a href="<?php echo get_the_permalink(13)?>" class="card-label row align-middle rel p-b-0-3  color-acento-0-bg color-terciario-1-hover-bg color-blanco shadow-up">

        <div class="columns h-a">
          <h2 class="columns p-0-2 text-right">
            <?php echo get_the_title(); ?>
          </h2>
          <span class="columns p-0-2 text-justify font-m font-lg-l card-section"><?php echo get_the_content(); ?></span>
        </div>
      </a>
    </div>

    <?php
  endwhile;
endif;

?>

</div>
