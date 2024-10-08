<div id="sidebar" class="columns p-0-2 small-11 p-t-0 ovH">
  <div class="columns text-center h-a p-0 m-b-0-3">
    <!-- <small class="subheader"> << drag >> </small> -->
    <!-- <small class="subheader"> << Busca: >> </small> -->
    <div class="busqueda columns p-0 h-a">
      <?php echo get_search_form(); ?>
    </div>
  </div>
  <div class="slider-sidebar columns p-0">
    <?php
    if (!is_page(array(11,13,71))):
      $args =  cpt('roto-releases',true,17,'rand');
    else:
      $args =  array(
        'post_type' => 'roto-artistas',//'post'
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
        if (!is_page(array(11,13,71))):
          ?>
          <img src="<?php echo get_field('imagen_cabecera_release');?>" alt="<?php echo get_field('nombre_artista_release')  . " - " . get_field('titulo_de_release');?>"/>
          <?php
        else:
          // echo get_the_post_thumbnail();
          ?>
          <img src="<?php echo get_field('imagen_artista');?>" alt="<?php echo get_field('nombre_artista');?>"/>
          <?php
        endif;
        ?>
      </div>

      <div class="columns p-0-1 h-a">
        <a href="<?php echo get_the_permalink();?>" class="columns rel h-100 p-0-2 color-blanco color-verde-roto-hover-bg color-negro-hover cortina-negro">
          <!-- Titulo release -->
          <h3 class="h-a columns text-justify p-0-1 font-m">
            <?php
            if (!is_page(array(11,13,71))):
              echo get_field('titulo_de_release');
            else:
              // echo get_the_title();
              echo get_field('nombre_artista');
            endif;
            ?>
          </h3>

          <div class="columns h-a font-l">
            <?php
            if (!is_page(array(11,13,71))):
              echo get_field('nombre_artista_release');;
            else:
              //echo get_the_author();
            endif;
            ?>
          </div>

          <div class="columns p-0 h-a text-right font-m">
            <?php
            if (!is_page(array(11,13,71))):
              echo get_field('dia_release') . get_field('mes_release') . get_field('ano_release');
            else:
              // echo get_the_date();
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
