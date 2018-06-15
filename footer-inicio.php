<?php echo get_template_part('secciones/general/footer-widgets') ?>

</main>


<footer id="footer" class="columns p-t-1 p-b-1 shadow-up z1k1 color-negro-bg">

  <div class="copyright columns small-5 text-left align-middle">

    <div class="row p-t-0-1 font-xs font-md-s text-shadow color-blanco align-middle">

      <div class="column h-a">

        <i class="fa fa-copyright"></i> <? echo bloginfo(); ?> &nbsp; <?php echo date("Y"); ?>

      </div>

    </div>

  </div>

  <div id="social" class="column small-7 p-0">

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
