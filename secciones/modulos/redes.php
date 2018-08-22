<?php

$iconos = array('bandcamp', 'soundcloud', 'mixcloud', 'twitter', 'youtube-play', 'facebook');
$links = array('https://nucleoroto.bandcamp.com','https://www.soundcloud.com/nucleoroto','https://www.mixcloud.com/nucleoroto','https://twitter.com/nucleoroto','https://www.youtube.com/channel/UCP4kJdciFB6Hu1aDlKdZXqg','https://www.facebook.com/nucleorotomusica');
$iconos_size = count($iconos);


for ($i=0; $i < $iconos_size; $i++):

  ?>

  <div class="columns small-2 h-a p-0 end">

      <a class="columns p-0 text-center" href="<?php echo $links[$i]?>">

        <i class="fa fa-<?php echo $iconos[$i];?>"></i>

      </a>

  </div>

<?php endfor; ?>
