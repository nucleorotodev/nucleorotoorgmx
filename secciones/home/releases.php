<div id="inicio-releases" class="grid-x cell columns p-0-2 small-12 large-4">

  <?php
  $args = array(
    'page_id' => 38,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>

    <div class="columns p-0-2 p-lg-1">

      <a href="<?php echo get_the_permalink(11);?>" class="card-label row align-middle rel p-b-0-3 color-secundario-0-bg color-secundario-1-hover-bg color-blanco shadow-up">

        <div class="columns h-a">
          <h2 class="columns p-0-2 text-center">
            <?php echo get_the_title();?>
          </h2>
          <span class="columns p-0-2 text-justify font-m font-lg-l card-section">
            <?php echo get_the_content();?>
          </span>
        </div>
      </a>
    </div>

    <?php
  endwhile;
endif;

?>

</div>
