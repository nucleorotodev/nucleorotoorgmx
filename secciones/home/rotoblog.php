<section id="inicio-blog" class="grid-x cell columns small-12 large-6 h-100-v p-top rel color-terciario-0-bg color-blanco end">

  <a href="<?php echo get_the_permalink(7);?>" class="columns p-0 color-negro-hover">
    <h1 class="titulo-inicio-anim h-a columns p-0 text-center">
      RotoBlog
    </h1>
  </a>

  <div class="row columns small-12 align-middle p-0">

    <div id="inicio-blog-slider" class="slider-blog columns p-0 h-75 ovH">
      <?php

      $args =  array( 'post_type' => 'post', 'showposts' => 6 );
      $query =  new WP_Query($args);

      if($query->have_posts()):
        while ($query->have_posts()): $query -> the_post();
        ?>
        <article class="columns p-0-1">

          <a href="<?php echo get_the_permalink();?>" class="columns p-0 color-blanco color-verde-roto-hover color-verde-roto-hover-bd text-shadow">
            <div class="columns small-4 imgLiquid imgLiquidFill">
              <?php echo get_the_post_thumbnail(); ?>
            </div>

            <div class="columns small-8 home-blog-data cortina-negro">

              <h3 class="h-a columns p-0 color-blanco">
                <?php echo get_the_title(); ?>
              </h3>
              <!-- <div class="columns h-a color-blanco">
                <?php // echo excerpt(9,"... leer mas >>"); ?>
              </div> -->
              <div class="columns p-0 h-a">
                <div class="columns p-0 small-12 medium-8 h-a text-left color-blanco">
                  <?php echo "Escrito por: " . get_the_author_meta( 'display_name' ); ?>
                </div>
                <div class="columns p-0 small-12 medium-4 h-a text-right color-blanco">
                  <?php echo get_the_date(); ?>
                </div>
              </div>

            </div>

          </a>
        </article>

        <?php
      endwhile;
    endif;
    ?>

  </div>

  <!--  -->
  <div class="columns text-center h-5 p-0">
    <small class="color-verde-roto"> << drag >> </small>
  </div>
  <!--  -->
</div>

</section>
