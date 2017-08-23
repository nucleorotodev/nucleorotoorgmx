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


    <div id="header-logo" class="columns p-0 small-3 medium-2 large-4 p-0-2">
      <div id="header-logo" class="grid-x cell imgLiquid imgLiquidNoFillLeft">
        <img src="<?php echo get_template_directory_uri();?>/img/nr-logo-header-medium.jpg" alt="" />
      </div>
    </div>

    <!-- menu escritorio -->
    <nav id="menu-escritorio" class="columns p-0 small-9 medium-10 large-8 show-for-large align-right">
      <?php get_template_part('secciones/general/menu'); ?>
    </nav>
    <!--  -->

    <!-- boton menu movil -->
    <div id="header-movil" class="columns p-0 small-9 hide-for-large">

      <div class="columns small-9"></div>

      <div class="columns small-3 p-0">

        <div class="row p-0 text-right align-middle">

          <a id="boton-menu-movil" class="columns p-0 h-a" href="#">

            <i class="fa fa-bars font-l"></i>

          </a>

        </div>

      </div>

    </div>
    <!--  -->

    <?php wp_head(); ?>

  </header>

  <!-- menu que entra por la derecha -->
  <div id="menu-movil" class="grid-x cell h-100-v fixed p-top p-bottom color-primario-0-bg z1k text-center color-white v-center hide-for-large">
    <?php echo "este será el menu movil"; ?>
  </div>

  <main id="main" class="grid-container fluid h-a">
