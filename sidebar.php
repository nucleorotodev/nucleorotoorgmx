<div id="sidebar" class="columns p-1 small-11 medium-10 large-11 h-95 p-t-0 ovH">
  <div class="columns text-center h-a p-0 m-b-0-3">
    <!-- <small class="subheader"> << drag >> </small> -->
    <small class="subheader"> << Busca: >> </small>
    <div class="busqueda columns p-0 h-a">
      <?php echo get_search_form(); ?>
    </div>
  </div>
  <div class="slider-sidebar columns p-0">
    <?php
    if (!is_page(array(11,13))):
      $args =  cpt('roto-releases',true,14,'rand');
    else:
      $args =  array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'orderby' => 'rand',
        // 'order'   => 'ASC',
      );
    endif;
    ?>
    <?php
    $q =  new WP_Query($args);
    if($q->have_posts()):
      while ($q->have_posts()): $q->the_post();
      ?>
      <div class="columns p-0-2 rel">
        <div class="columns absUpL z-1 imgLiquid imgLiquidFill"><?php
        if (!is_page(array(11,13))):
          ?>
          <img src="<?php echo the_field('imagen_cabecera_release');?>" alt="<?php echo the_field('nombre_artista_release')  . " - " . the_field('titulo_de_release');?>"/>
          <?php
        else:
          echo get_the_post_thumbnail();
        endif;
        ?>
      </div>

      <div class="columns p-0-1 h-a">
        <a href="<?php echo get_the_permalink();?>" class="columns rel h-100 p-0-2 color-blanco color-secundario-1-hover cortina-negro">
          <!-- Titulo release -->
          <h3 class="h-a columns text-justify p-0-1 font-m">
            <?php
            if (!is_page(array(11,13))):
              echo the_field('titulo_de_release');
            else:
              echo get_the_title();
            endif;
            ?>
          </h3>

          <div class="columns h-a font-l">
            <?php
            if (!is_page(array(11,13))):
              echo the_field('nombre_artista_release');;
            else:
              //echo get_the_author();
            endif;
            ?>
          </div>

          <div class="columns p-0 h-a text-right font-m">
            <?php
            if (!is_page(array(11,13))):
              echo the_field('dia_release') . the_field('mes_release') . the_field('ano_release');
            else:
              echo get_the_date();
            endif;
            ?>
          </div>
        </a>
      </div>

    </div>

    <?php
  endwhile;
endif;
?>

</div>
</div>
