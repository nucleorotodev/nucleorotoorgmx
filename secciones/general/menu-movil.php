<nav class="columns h-40 m-b-1">
  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-movil',
    'container_class' => 'columns small-12 h-100 menu-movil hidden',
    'menu_class' => 'menu-movil-ul columns h-a small-12 p-t-2') );
    ?>
    <div id="menu-logo" class="columns p-1 small-6 small-centered p-0-2">
        <div class="columns imgLiquid imgLiquidNoFill">
          <img src="<?php echo get_template_directory_uri();?>/img/nr-logo-header-small.jpg" alt="" />
        </div>
    </div>

  </nav>
  <div class="columns h-60">

    <div class="row align-middle">

      <h1 class="columns text-center h-a font-huge color-verde-roto">
        <?php echo "Nucleoroto" ?>
      </h1>

    </div>

  </div>
