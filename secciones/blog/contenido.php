<section id="blog-cards" class="columns small-12 large-9 h-a p-1 p-top color-blanco">

  <h1 class="titulo-anim columns p-t-1">
    <?php //echo get_the_archive_title(). " RotoBlog" ?>
    <?php echo "RotoBlog" ?>
  </h1>

  <div class="columns text-center h-a font-s font-sm-m">
    <?php
    //echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.';
    ?>
  </div>

  <div class="lista-categorias columns text-left p-0 font-m m-t-2">
    <?php
    $args = array (
    'hide_empty' => 0,
    'title_li' => false,
    'style' => 'list',
    'echo' => 0,
    // 'exclude' => array( 8 )
  );
  echo str_replace( "<br>", "", wp_list_categories( $args ) );
  ?>
</div>

<?php
$ext = range(6,60,7);
$palabras = shuffle($ext);
$cols = array(3,6,3,6,3,6,3,6,3,6,3,6,3,6,6,3,3,3,3);//mas largo que el numero de entradas a mostrar
$i = 0;
if (have_posts()):
  ?>

  <div class="blog-cards columns p-0 p-t-1 p-b-1 h-a">

    <?php
    while (have_posts()): the_post();

    $rcol = array_rand($cols,count($cols));
    ?>
    <div class="blog-sizer columns small-12 medium-<?php echo $cols[$rcol[$i]];?> h-a"></div>

    <div class="blog-card columns small-12 medium-<?php echo $cols[$rcol[$i]];?> p-0-1 h-a end">
      <a class="columns p-0 h-100" href="<?php echo get_the_permalink();?>" target="_blank">

        <div class="columns p-0-1 h-a card">

          <div class="columns p-0-2 color-negro text-center card-divider">

            <h6 class="columns p-0">
              <?php echo get_the_title(); ?>
            </h6>

            <div class="card-section text-justify">
              <?php echo excerpt($ext[$i]); ?>
            </div>

            <div class="columns small-6 p-0 p-t-0-2 text-left">
              <small>
                Escrito por: <?php echo get_the_author(); ?>
              </small>
            </div>
            <div class="columns small-6 p-0 p-t-0-2 text-right">
              <small>
                <?php echo get_the_date(); ?>
              </small>
            </div>


          </div>
        </div>

      </a>

    </div>

    <?php
    $i ++;

  endwhile;
  ?>
</div>

<?php

get_template_part('secciones/modulos/paginacion');


else:
  ?>
  <div class="row align-midle p-1 p-md-2">
    <h1 class="columns h-a text-center color-blanco">

      <?php echo 'No existen publicaciónes de esta categoría' ?>

    </h1>
  </div>

  <?php

endif;

?>

</section>
