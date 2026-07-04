<?php echo get_template_part('secciones/general/footer-widgets') ?>

</main>


<footer id="footer" class="columns p-t-1 p-b-1 shadow-up z1k1 color-negro-bg">

  <div class="copyright columns">

      <p class="column h-a">

        <i class="fa fa-copyright"></i> <?php echo bloginfo(); ?>&nbsp;|&nbsp;<?php echo date("Y"); ?>

      </p>

  </div>

  <div id="social" class="columns">

    <div class="social-container align-middle">

      <?php
      get_template_part('secciones/modulos/redes');
      ?>

    </div>

  </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
