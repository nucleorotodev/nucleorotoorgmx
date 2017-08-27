<div id="footer-widgets" class="grid-x cell columns h-a h-md-60-v color-negro-bg ovH">

  <?php
  // $arr = array('footer widget 1', 'footer-widget 2', 'footer-widget-3');
  $arr = array('ultimos-releases', 'friendly-links', 'banner');
  for ($i=0; $i < 3; $i++):
    ?>

    <div class="grid-x cell columns small-12 large-4 p-0 h-60-v h-md-100 color-negro-bg">
      <!-- <div class="row align-middle">
        <div class="columns h-a font-xxl"> -->

          <?php get_template_part('secciones/general/footer-widgets-content/footer-' . $arr[$i]); ?>

        <!-- </div>
      </div> -->
    </div>

    <?php
  endfor;
  ?>
</div>
