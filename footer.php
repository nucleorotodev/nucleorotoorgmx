

<aside class="columns small-12 medium-3 large-2 h-100-v p-top p-b-1">

  <div class="columns p-0" data-sticky-container>
    <div class="sticky" data-sticky>

      <?php get_template_part('sidebar'); ?>

    </div>
  </div>

</aside>


</main>
<!-- fuera de main por el sidebar  -->
<?php echo get_template_part('secciones/general/footer-widgets') ?>


<footer id="footer" class="columns h-a p-t-1 p-b-1 color-blanco-bg shadow-up z1k1 color-negro-bg">

  <div class="copyright columns small-5 text-left v-center">

    <p class="columns p-0 p-b-0-2 h-a font-xs font-md-s text-shadow color-blanco">

      <i class="fa fa-copyright"></i> Nucleoroto <?php echo date("Y"); ?>

    </p>

  </div>

  <div id="social" class="columns small-7 p-0">

    <?php
    get_template_part('secciones/modulos/redes');
    ?>

  </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
