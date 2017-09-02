<nav class="columns h-35 m-b-1">
  <div id="menu-logo" class="row p-1-2 small-6 small-centered p-0-2">
    <div class="columns imgLiquid imgLiquidNoFill">
      <img src="<?php echo get_template_directory_uri();?>/img/nr-logo-header-medium.jpg" alt="" />
    </div>
  </div>
  <div class="row align-middle">
  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-movil',
    'container_class' => 'columns small-12 h-a p-0 menu-movil hidden',
    'menu_class' => 'menu-movil-ul columns h-a small-12 p-t-0-1 p-md-t-1 font-l font-md-xxxl bold') );
    ?>
  </div>

  </nav>
  <div class="columns p-0 h-65">

    <div class="row align-middle">

      <h1 class="titulo-anim columns p-0 text-center h-a font-huge color-verde-roto">
        <?php echo "Nucleoroto" ?>
      </h1>

    </div>

  </div>
