<?php

get_header();

?>

<section id="busqueda" class="content-area columns small-12 large-9 p-0 color-blanco p-top">
  <div id="content" class="site-content">

    <?php if ( have_posts() ) : ?>

      <div class="row text-center">
        <h1 class="columns">
          <?php printf( __( 'Encontramos:', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h1>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>


        <div class="columns rel">
          <!-- <div class="columns imgLiquid imgLiquidFill">
            <img src="<?php //echo get_the_post_thumbnail_url();?>" alt="">
          </div> -->

          <a href="<?php echo get_the_permalink();?>" class="columns color-terciario-0-hover">

            <h1 class="columns text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>

          </a>
        </div>

      <?php endwhile; ?>

    <?php else : ?>
      <div class="row align-middle h-50-v">

        <h1 class="titulo-menu-movil columns small-12 text-center">
          <?php printf( __( '404' )); ?>
        </h1>

        <h1 class="columns small-12 text-center">
          <?php printf( __( 'No encontramos: %s', 'shape' ), '<div class="h-a">' . get_search_query() . '</div>' ); ?>
        </h1>

      </div>

    <?php endif; ?>

  </div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php

get_footer();
