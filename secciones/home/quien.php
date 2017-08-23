<section id="inicio-nosotros" class="grid-x cell grid-padding-x h-100-v h-md-50 p-top p-bottom">

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

        <div class="grid-x p-1 h-a font-s font-md-m text-justify">
          <?php echo get_the_content(); ?>
        </div>


        <div class="grid-x p-1 h-a text-justify">
          <?php get_template_part('secciones/modulos/iteracion-titulos'); ?>
        </div>



        <?php
      endwhile;
    endif;

    ?>

  </div>

</div>

</section>
