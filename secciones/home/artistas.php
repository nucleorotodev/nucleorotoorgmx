<section id="inicio-artistas" class="grid-x cell small-4 grid-padding-x h-25-v h-md-50-v">

  <?php
  $args = array
    'page_id' => 36,
  );
  $query = new WP_Query($args);

  if($query->have_posts()):
    while ($query->have_posts()): $query -> the_post();
    ?>

<div class="row align-middle rel">

<div class="columns absUpL z-1 imgLiquid imgLiquidFill">
  <img src="http://fakeimg.pl/320x480/?text=Placeholder" alt="" />
  <?php //echo get_the_post_thumbnail(); ?>
</div>

  <div class="columns h-a">
    <h3 class="columns p-0-2"><?php echo get_the_title(); ?></h3>

    <span class="columns p-0-2 text-justify"><?php get_the_content(); ?></span>
  </div>
</div>

<?php
endwhile;
endif;

?>

</section>
