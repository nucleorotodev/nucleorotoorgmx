//
jQuery(document).ready(function() {

  jQuery(document).foundation()
  //
  setup()
  resize_reset()

  // date picker reset
  jQuery('#ui-datepicker-div').addClass('h-a')

})
//fin ready
// funciones
function setup() {

  img_liquid()
  classes_menu_movil()
  menu_movil()
  slider_heroscreen()
  parallax_home()
  slider_footer()
  slider_blog()
  slider_sidebar()
  titulo_roto()
  //blog
  blog_random_colors()
  blog_cats()
  masonry_blog()
  //
  //


}

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

function resize_reset() {

  jQuery(window).on('resize', function() {
    menu_movil()

    // al cambiar tamano cubre la pagina con el menu movil
    /*revisar, esto causa conflicto con los navegaores
    moviles, por que al mostrar la barra de url cambia el tamano de la
    ventana y ejecuta el resize solo haciendo scroll*/

    // jQuery("#menu-movil").css({
    //   'transition': '0.01s',
    //   '-webkit-transform': 'translateX(0px)',
    //   '-moz-transform': 'translateX(0px)',
    //   '-ms-transform': 'translateX(0px)',
    //   '-o-transform': 'translateX(0px)',
    //   'transform': 'translateX(0px)'
    // })

  })

}

function img_liquid() {

  jQuery(".imgLiquid.imgLiquidFill").imgLiquid()

  jQuery(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})

  jQuery(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left"
  })
  jQuery(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right"
  })

}


function menu_movil() {
  var menumovil = jQuery("#menu-movil");
  // registra su posicion actual, fuera de la pantalla
  var anchomenumovil = menumovil.width() + 40
  var menuicono = jQuery('#boton-menu-movil i')
  // activa menu movil despues de 2 segundos
  setTimeout(function() {
    // jQuery('.menu-movil').removeClass('hidden')
    var posicioninicial = menumovil.css({
      'transition': '0.75s',
      '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
      '-moz-transform': 'translateX(' + anchomenumovil +'px)',
      '-ms-transform': 'translateX(' + anchomenumovil +'px)',
      '-o-transform': 'translateX(' + anchomenumovil +'px)',
      'transform': 'translateX(' + anchomenumovil +'px)'
    })
  },2500)
  // activa menu movil despues de 3.5 segundos
  setTimeout(function() {
    jQuery('.menu-movil').removeClass('hidden')
    jQuery('#menu-logo').addClass('hidden')
  },3500)

  // reset del icono en caso de resize
  if (menuicono.hasClass('fa-close')) {

    menuicono.removeClass('fa-close').addClass('fa-bars');

  }
  //
  var salemenu = {
    'transition': '0.35s',
    '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
    '-moz-transform': 'translateX(' + anchomenumovil +'px)',
    '-ms-transform': 'translateX(' + anchomenumovil +'px)',
    '-o-transform': 'translateX(' + anchomenumovil +'px)',
    'transform': 'translateX(' + anchomenumovil +'px)'
  }

  jQuery('#boton-menu-movil').on('click', function() {

    var posicion = menumovil.position();

    if(posicion.left >= jQuery(document).width()) {
      // entra
      menumovil.css({
        'transition': '0.5s',
        '-webkit-transform': 'translateX(0px)',
        '-moz-transform': 'translateX(0px)',
        '-ms-transform': 'translateX(0px)',
        '-o-transform': 'translateX(0px)',
        'transform': 'translateX(0px)'
      });
      //

      // gira
      menuicono.toggleClass('gira-icono-menu');

      //cambia icono
      setTimeout(function() {

        menuicono.removeClass('fa-bars black').addClass('fa-close');

      },125);

      // reset gira-icono-menu
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500)


    } else {
      // sale menu
      menumovil.css(salemenu)
      // gira
      menuicono.toggleClass('gira-icono-menu')
      //cambia el icono
      setTimeout(function() {

        menuicono.removeClass('fa-close black').addClass('fa-bars');

      },125);

      //reset giro
      setTimeout(function() {

        menuicono.toggleClass('gira-icono-menu');

      },500);

    }

  });

}

// sliders
function slider_heroscreen() {

  jQuery('.slider-portada').slick({
    autoplay: true,
    autoPlaySpeed: 1000,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 750,
    fade: true,
    cssEase: 'linear'
  })
}
function slider_footer() {

  jQuery('.slider-footer').slick({
    autoplay: true,
    autoPlaySpeed: 1000,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 1000,
    fade: false,
    cssEase: 'linear'
  })
}
function slider_blog() {

  jQuery('.slider-blog').slick({
    autoplay: true,
    autoPlaySpeed: 1000,
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    vertical: true,
    verticalSwiping: false,
    speed: 500,
    cssEase: 'linear'
  })
}
function slider_sidebar() {

  jQuery('.slider-sidebar').slick({
    autoplay: true,
    autoPlaySpeed: 2000,
    dots: false,
    arrows: false,
    slidesToShow:7,
    slidesToScroll: 1,
    infinite: true,
    vertical: true,
    verticalSwiping: false,
    speed: 500,
    cssEase: 'linear'
  })
}

function titulo_roto() {

  var classes = ['text-left','text-center','text-right','text-left','text-center','text-right', 'text-justify']
  var espaciado = ['0vw','0.25vw','0.5vw','0.75vw','1vw']
  var desorden, espacios
  var iter = 0
  setInterval(function() {

    desorden = shuffle(classes)
    espacios = shuffle(espaciado)

    jQuery("#iteracion-titulo li").each(function(i) {

      jQuery(this).toggleClass(desorden[i])

    })
    jQuery(".titulo-anim").each(function(i) {

      jQuery(this).toggleClass(desorden[i])

    })

    // abre espacio de las letras
    if (iter < 4 ) {
      jQuery(".titulo-anim, .titulo-inicio-anim").css('letter-spacing',espacios[iter])
      iter = iter ++
    } else {
      iter = 0
    }

  },500)

}

function parallax_home() {
  jQuery('.fondo-label').parallax({
    imageSrc: '/nrdev/wp-content/themes/nucleorotoorgmx/img/nr-parallax2.jpg',
    speed: 0.75,
    bleed: 100,
    androidFix: true
  });
  jQuery('.fondo-logo').parallax({
    imageSrc: '/nrdev/wp-content/themes/nucleorotoorgmx/img/nr-logo-header-medium.jpg',
    speed: 0.75,
    bleed: 100,
    androidFix: true
  });
  jQuery('.fondo-mercado').parallax({
    imageSrc: '/nrdev/wp-content/themes/nucleorotoorgmx/img/nr-parallax1.jpg',
    speed: 0.75,
    bleed: 150,
    androidFix: true
  });
}

function classes_menu_movil() {

  jQuery('.menu-movil-ul li').each(function() {
    jQuery(this).addClass('columns small-4 p-b-0-1 end')
  })

}

function blog_random_colors() {

  var colores = [
    'color-negro-bg',
    'color-terciario-0-bg',
    'color-terciario-0-bg',
    'color-negro-bg',
    'color-verde-roto-bg',
    'color-terciario-0-bg',
    'color-terciario-0-bg',
    'color-negro-bg',
    'color-terciario-0-bg',
    'color-negro-bg',
    'color-verde-roto-bg',
    'color-verde-roto-bg',
    'color-terciario-0-bg',
    'color-verde-roto-bg',
    'color-terciario-0-bg',
    'color-terciario-0-bg'
  ]
  var fondo = [
    'color-acento-1-bg',
    'color-complementario-1-bg',
    'color-acento-1-bg',
    'color-neutral-0-bg',
    'color-acento-0-bg',
    'color-complementario-1-bg',
    'color-complementario-1-bg',
    'color-neutral-0-bg',
    'color-complementario-0-bg',
    'color-complementario-0-bg',
    'color-acento-1-bg',
    'color-neutral-0-bg',
    'color-neutral-1-bg',
    'color-complementario-0-bg',
    'color-complementario-1-bg',
    'color-acento-0-bg',
    'color-complementario-0-bg'
  ]
  var mixed,mixedfondo
  mixed = shuffle(colores)
  mixedfondo = shuffle(fondo)

  setInterval(function() {
    jQuery(".card").each(function(i) {

      jQuery(this).toggleClass(mixed[i])
      // jQuery(this).toggleClass('color-negro-bg')

    })
  },250)

  jQuery(".card .card-divider").each(function(i) {
    jQuery(this).addClass(mixedfondo[i])

  })

}

function blog_cats() {
  jQuery('.cat-item').addClass('columns small-4 medium-3 large-2 p-0-2 end')
  jQuery('.cat-item a').addClass('columns text-center p-0-1 color-verde-roto-bg color-negro')
}

function masonry_blog() {
  jQuery('.blog-cards').masonry({
    itemSelector: '.blog-card',
    columnWidth: '.blog-sizer',
    percentPosition: true
  })
}
