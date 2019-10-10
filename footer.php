

<!-- sidebar escritorio sticky -->
<aside class="columns small-12 large-3 show-for-large" data-sticky-container>

  <div class="sticky columns p-0-1 h-100-v" data-sticky data-btm-anchor="footer">

    <div class="columns p-0">

      <div class="columns small-1 medium-2 large-1 p-0 text-center">
        <div class="columns p-0 color-verde-roto-bg rel">
          <h3 class="titulo-sidebar h-a color-negro-bg color-verde-roto p-t-0-2 p-b-0-2 absUpL top right">
            <?php if (!is_page( array(11,13,71) )): ?>
              Random Releases
              <?php else: ?>
              Random Artists
              <?php
            endif;
            ?>
          </h3>
        </div>
      </div>

      <?php get_template_part('sidebar'); ?>

    </div>
  </div>

</aside>
<!-- sidebar no sticky medium y small -->
<aside class="columns small-12 large-3 hide-for-large">

  <div class="row p-1 p-md-2 p-top h-90-v">

    <div class="columns small-11 medium-10 small-centered p-0">

      <div class="columns small-1  p-0 text-center p-b-1">
        <div class="columns color-verde-roto-bg rel">
          <h5 class="titulo-sidebar h-a color-negro-bg color-verde-roto p-t-0-2 p-b-0-2 absUpL top right">
            <?php if (!is_page( array(11,13,71) )): ?>
              Random Releases
              <?php else: ?>
              Random Artists
              <?php
            endif;
            ?>
          </h5>
        </div>
      </div>

      <?php get_template_part('sidebar'); ?>

    </div>
  </div>

</aside>
<!--  -->

</main>

<!-- fuera de main por el sidebar  -->
<?php echo get_template_part('secciones/general/footer-widgets') ?>


<footer id="footer" class="columns h-a p-t-1 p-b-1 color-blanco-bg shadow-up z1k1 color-negro-bg">

  <div class="copyright columns small-5 text-left v-center">

    <div class="row p-t-0-1 font-xs font-md-s text-shadow color-blanco align-middle">

      <div class="column h-a">

        <i class="fa fa-copyright"></i> <? echo bloginfo(); ?> &nbsp; <?php echo date("Y"); ?>

      </div>

    </div>

  </div>

  <div id="social" class="columns small-7 p-0">

    <div class="row align-middle">

      <?php
      get_template_part('secciones/modulos/redes');
      ?>

    </div>

  </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
