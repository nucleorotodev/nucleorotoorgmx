<div id="footer-widgets" class="grid-x cell columns h-a h-md-60-v color-negro-bg ovH">

  <?php
  // cambia el numero de widgets en el footer
  if (is_front_page() && is_home()  ):

    $arr = array('ultimos-releases', 'friendly-links', 'banner');
    $col = 'large-4';
  else:

    $arr = array('friendly-links', 'banner');
    $col = 'medium-6';

  endif;

  for ($i=0; $i < count($arr); $i++):
    ?>

    <div class="grid-x cell columns small-12  <?php echo $col;?> p-0 h-60-v h-md-100 color-negro-bg">

      <?php get_template_part('secciones/general/footer-widgets-content/footer-' . $arr[$i]); ?>

    </div>

    <?php
  endfor;
  ?>
</div>
