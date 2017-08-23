jQuery(document).foundation()
//
jQuery(document).ready(function() {

  setup()


})
//fin ready
// funciones
function setup() {

  img_liquid()
  menu_movil()
  slider_heroscreen()
  //
  setInterval(function() {
    titulo_roto()
  },250)
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
  var posicioninicial = menumovil.css({
    'transition': '0.01s',
    '-webkit-transform': 'translateX(' + anchomenumovil + 'px)',
    '-moz-transform': 'translateX(' + anchomenumovil +'px)',
    '-ms-transform': 'translateX(' + anchomenumovil +'px)',
    '-o-transform': 'translateX(' + anchomenumovil +'px)',
    'transform': 'translateX(' + anchomenumovil +'px)'
  })
  var menuicono = jQuery('#boton-menu-movil i');

  // reset del icono en caso de resize
  if (menuicono.hasClass('fa-close')) {

    menuicono.removeClass('fa-close').addClass('fa-bars');

  }
  //
  var salemenu = {
    'transition': '0.5s',
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
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
    // vertical: true,
    // verticalSwiping: true,
  })
}

function titulo_roto() {

  var classes = ['text-left','text-center','text-right', 'text-justify','text-left','text-center','text-right', 'text-justify']
  var desorden;
  jQuery("#iteracion-titulo li").each(function(i) {

    desorden = shuffle(classes)

    jQuery(this).toggleClass(desorden[i])

  })
}
