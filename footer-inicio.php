<?php echo get_template_part('secciones/general/footer-widgets') ?>

</main>


<footer id="footer" class="columns h-a p-t-1 p-b-1 color-blanco-bg shadow-up z1k1 color-negro-bg">

  <div class="copyright columns small-5 text-left v-center">

    <p class="columns p-t-0-1 h-a font-xs font-md-s text-shadow color-blanco">

      <i class="fa fa-copyright"></i> <? echo bloginfo(); ?> &nbsp; <?php echo date("Y"); ?>

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
