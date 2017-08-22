<?php

$iconos = array('bandcamp', 'soundcloud', 'mixcloud', 'twitter', 'youtube-play', 'facebook');
$iconos_size = count($iconos);


for ($i=0; $i < $iconos_size; $i++):

  ?>

  <div class="columns small-2 p-0 end">

      <a class="columns p-0 text-center" href="#">

        <i class="fa fa-<?php echo $iconos[$i];?> text-shadow"></i>

      </a>

  </div>

<?php endfor; ?>
