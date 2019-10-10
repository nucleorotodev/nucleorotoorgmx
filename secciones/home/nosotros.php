<section id="inicio-nosotros" class="grid-x cell columns grid-padding-x h-a p-bottom color-verde-roto-bg">

  <div class="row align-middle">

    <div class="columns h-a">

      <?php
      $args = array(
        'page_id' => 34,
      );
      $query = new WP_Query($args);

      if($query->have_posts()):
        while ($query->have_posts()): $query -> the_post();
        ?>

        <div class="grid-x p-0 p-md-1 h-a">
          <?php get_template_part('secciones/modulos/iteracion-titulos'); ?>
        </div>
        <hr>
        <div class="grid-x p-0 p-md-1 p-t-1-2 h-a font-m font-lg-l text-justify">
          <?php echo get_the_content(); ?>
        </div>

        <?php
      endwhile;
    endif;

    ?>

  </div>

</div>

</section>
