<div id="footer-widgets" class="grid-x cell columns h-a h-md-60-v color-blanco-bg">

  <?php
  // $arr = array('footer widget 1', 'footer-widget 2', 'footer-widget-3');
  $arr = array('texto', 'tags', 'banner');
  for ($i=0; $i < 3; $i++):
    ?>

    <div class="grid-x cell columns small-12 medium-4 h-60-v h-md-100 card">
      <div class="row align-middle">
        <div class="columns h-a font-xxl">

          <?php get_template_part('secciones/general/footer-widgets-content/footer-' . $arr[$i]); ?>

        </div>
      </div>
    </div>

    <?php
  endfor;
  ?>
</div>
