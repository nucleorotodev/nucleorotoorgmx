<ul id="menu-lista" class="columns p-0 h-100">

<?php
$items = array(
  'Inicio ',
  'Releases',
  'Mixtapes',
  'Artístas',
  'Booking',
  'Rotoblog',
  'Radio ',
  'Mercado ',
  'Contacto',
);
for ($i=0; $i < count($items); $i++):
  ?>

  <li class="w-a columns p-l-1 p-r-1 h-100 end">

    <a href="" class="row p-0 h-100 align-middle">

      <div class="columns h-a p-0 text-shadow">

        <?php echo $items[$i]; ?>

      </div>

    </a>

  </li>

<?php endfor; ?>

</ul>
