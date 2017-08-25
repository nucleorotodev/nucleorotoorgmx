<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' );?></title>
</head>
<body>

  <header id="header" class="columns h-10 fixed top left color-negro-bg shadow z1k1">


    <div id="header-logo" class="columns p-0 small-6 large-2 p-0-2">
      <a href="<?php echo home_url(); ?>" class="columns p-0 h-100">

        <div id="header-logo" class="grid-x cell imgLiquid imgLiquidNoFillLeft">
          <img src="<?php echo get_template_directory_uri();?>/img/nr-logo-header-small.jpg" alt="" />
        </div>

      </a>
    </div>

    <!-- menu escritorio -->
    <nav id="menu-escritorio" class="columns p-0 small-9 large-10 show-for-large align-right">
      <?php get_template_part('secciones/general/menu'); ?>
    </nav>
    <!--  -->

    <!-- boton menu movil -->
    <div id="header-movil" class="columns p-0 small-6 hide-for-large">

      <div class="columns small-9"></div>

      <div class="columns small-3 p-0">

        <div class="row small-3 small-centered p-0 text-right align-middle">

          <a id="boton-menu-movil" class="columns p-0 h-a" href="javascript:void(0)">

            <i class="fa fa-bars font-l"></i>

          </a>

        </div>

      </div>

    </div>
    <!--  -->

    <?php wp_head(); ?>

  </header>

  <!-- menu que entra por la derecha -->
  <div id="menu-movil" class="grid-x columns h-100-v fixed p-top p-bottom color-primario-0-bg z1k text-center color-white v-center hide-for-large">
    <?php get_template_part('secciones/general/menu-movil') ?>
  </div>

  <main id="main" class="grid-container fluid h-a rel">

    <!-- Logo fondo -->
    <div class="fondo-logo columns p-0 fixed top left h-100-v z-1k">
    </div>
