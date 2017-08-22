
</main>

<footer id="footer" class="columns h-a color-blanco-bg shadow-up z1k1">

  <div id="social" class="columns small-6 p-0">

    <?php

    $iconos = array('github', 'twitter', 'facebook', 'instagram');
    $iconos_size = count($iconos);


    for ($i=0; $i < $iconos_size; $i++):

      ?>

      <div class="w-a v-center">

        <div class="columns p-0 h-a text-center">

          <a class="columns p-0" href="#">

            <i class="fa fa-<?php echo $iconos[$i];?> text-shadow"></i>

          </a>

        </div>

      </div>

    <?php endfor; ?>

  </div>


  <div class="copyright columns small-6 text-right v-center">

    <div class="columns p-0 h-a">

      <i class="fa fa-copyright font-xs font-md-s text-shadow"> Nucleoroto <?php echo date("Y"); ?></i>

    </div>

  </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
