# Nucleoroto WP theme v3.0
## Desarrollos rotos

## Instrucciones

- git clone	repo/
- cd	repo/
- npm	install
- bower	install
- git	submodule	update	--init	--recursive
- gulp watch

## Changelog

### v3.1.0
- Release Degstort Live
  - Ajuste de pantones
- Bugfixes:
  - Resuelve la carga de Scripts para evitar carga en blanco
    - Moverlos al footer
  - Resuelve la carga del header mientras el sitio se ve blanco
    - Mueve la carga de wp_head a la ubicacion correcta
- Estilos a footer
- Elimina navegación slider flyers
- Elimina twitter
- Fix Heroscreen
  - Contenidos

### v3.0.2
- Estilos a slider flyers
- Bugfix:
  - Single Releases: Dato de Formato de disco muestra la palabra 'Array'
  - La función radio_data() no se ejecuta cada 20 segundos como se esperaba, lo que hace que la sección de radio no se actualice con la información más reciente.
  - Los metadatos de la radio se cargan unicamente una vez
- Actualiza links alternativos para estaciones de radio
  - Agrega target blank a links

### v3.0.1
- Configuración de gulpfile.js
- Actualización de rutas para dependencias
- Estilos para incio
  - Varios fixes en contenedores
  - Bugfix: contenedor de feed para instagram se desborda
- Cambio de colores
