<div id="inicio-artistas" class="grid-x cell columns p-0-2 small-12 large-4">

  <?php
  $args = array(
    'page_id' => 36,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>

    <div class="columns p-0-2 p-lg-1">
      <a href="<?php echo get_the_permalink(15)?>" class="card-label row rel p-b-0-3 color-primario-0-bg color-primario-1-hover-bg color-blanco shadow-up">

        <div class="columns h-a">
          <h2 class="columns p-0-2 text-left">
            <?php echo get_the_title(); ?>
          </h2>
          <span class="columns p-0-2 text-justify font-m font-lg-l card-section">
            <?php echo get_the_content(); ?>
          </span>
        </div>
      </a>
    </div>

    <?php
  endwhile;
endif;

?>

</div>
