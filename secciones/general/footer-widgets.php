
<?php
// cambia el numero de widgets en el footer
if (is_front_page() || is_home()  ):

  $arr = array('ultimos-releases', 'friendly-links', 'banner');
  $col = 'large-4';
  $main_col = ' ';
else:

  $arr = array('friendly-links', 'banner');
  $col = 'medium-6';
  $main_col = 'large-9';

endif;
?>
<div id="footer-widgets" class="columns <?php echo $main_col;?> h-a h-md-60-v color-negro-bg ovH">

<?php
for ($i=0; $i < count($arr); $i++):
  ?>
    <div class="grid-x cell columns small-12  <?php echo $col;?> p-0 h-60-v h-md-100 color-negro-bg">

      <?php get_template_part('secciones/general/footer-widgets-content/footer-' . $arr[$i]); ?>

    </div>

    <?php
  endfor;
  ?>
</div>
