<section class="columns small-12 large-9 p-1 p-top">
  <?php
  if (have_posts()):
    while (have_posts()): the_post();
    ?>

    <div class="columns small-4 p-1 h-35 color-blanco card end">

      <div class="columns p-1 color-blanco text-center card-divider">
        <?php echo get_the_title(); ?>
        <div class="card-section">
            <?php echo excerpt(14); ?>
        </div>

      </div>

    </div>

    <?php
  endwhile;
endif; ?>

</section>
