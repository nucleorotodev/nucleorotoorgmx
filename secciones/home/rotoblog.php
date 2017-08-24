<section id="inicio-blog" class="grid-x cell columns small-12 medium-6 h-100-v p-top rel color-secundario-1-bg color-blanco end">

  <a href="#" class="columns p-0">
  <h1 class="titulo-inicio-blog h-a columns p-0 text-center">
      RotoBlog
  </h1>
</a>

    <div id="inicio-blog-slider" class="slider-blog columns p-0 h-80 ovH">

      <?php

      $args =  array( 'post_type' => 'post', 'showposts' => 6 );
      $query =  new WP_Query($args);

      if($query->have_posts()):
        while ($query->have_posts()): $query -> the_post();
        ?>
        <div class="columns h-30 p-0-2">


          <a href="<?php echo get_the_permalink();?>" class="columns rel color-blanco color-primario-0-hover ">
            <div class="columns absUpL z-1 imgLiquid imgLiquidFill">
              <img src="http://fakeimg.pl/320x480/?text=Placeholder" alt="" />
              <?php //echo get_the_post_thumbnail(); ?>
            </div>
            <div class="columns absUpL z0 cortina-negro-bg">
            </div>

            <h5 class="h-a columns p-0">
              <?php echo get_the_title(); ?></h5>

              <div class="columns h-a font-s font-md-m">
                <?php echo excerpt(16,"... leer mas >>"); ?>
              </div>
              <div class="columns p-0 h-a font-xs font-md-s">
                <div class="columns p-0 small-6 h-a text-left">
                  <?php echo "Escrito por: " . get_the_author_meta( 'display_name' ); ?>
                </div>
                <div class="columns p-0 small-6 h-a text-right">
                  <?php echo get_the_date(); ?>
                </div>
              </div>

            </a>
          </div>

          <?php
        endwhile;
      endif;
      ?>

    </div>

  </section>
