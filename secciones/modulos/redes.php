<?php

$iconos = array('bandcamp', 'soundcloud', 'mixcloud', 'twitter', 'youtube-play', 'facebook');
$links = array('https://nucleoroto.bandcamp.com','https://www.soundcloud.com/nucleoroto','https://www.mixcloud.com/nucleoroto','https://twitter.com/nucleoroto','https://www.youtube.com/channel/UCP4kJdciFB6Hu1aDlKdZXqg','https://www.facebook.com/nucleorotomusica');
$iconos_size = count($iconos);


for ($i=0; $i < $iconos_size; $i++):

  ?>

  <div class="social-item">

      <a class="columns" href="<?php echo $links[$i]?>" target="_blank">

        <i class="fa fa-<?php echo $iconos[$i];?>"></i>

      </a>

  </div>

<?php endfor; ?>
