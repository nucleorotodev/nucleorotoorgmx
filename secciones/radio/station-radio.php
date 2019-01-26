
<h4 class="small-12 p-t-2"><small>Server status: </small>

  <?php
  $online = "Online"; // Displays when stream is online
  $offline['server'] = "Offline (El servidor no está operando)"; // Displays when server is offline
  $offline['source'] = "Offline (En espera ...)"; // Displays when server is online with no source
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "s42.myradiostream.com:32404/7.html");
  curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  $data = curl_exec($ch);
  curl_close($ch);
  $data = str_replace('</body></html>', "", $data);
  $split = explode(',', $data);
  if (empty($data)) {
    $status = $offline['server'];
  } else {
    if ($split[1] == "0") {
      $status = $offline['source'];
    } else {
      $status = $online;
    }
  }
  echo $status;
  ?>

</h4>
<h4 class="small-12"><small>Track: </small>

  <?php
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "s42.myradiostream.com:32404/7.html");
  curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  $data = curl_exec($ch);
  curl_close($ch);
  $data = str_replace('</body></html>', "", $data);
  $split = explode(',', $data);
  if (empty($split[6])) {
    $title = "Nombre de canción no disponible ";
  } else {
    $count = count($split);
    $i = "6";
    while($i<=$count) {
      if ($i > 6) {
        $title .= "," . $split[$i];
      } else {
        $title .= $split[$i];
      }
      $i++;
    }
  }
  $title = substr($title, 0, -1);
  echo $title;
  ?>

</h4>
<h4 class="small-12"><small>Souls: </small>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "s42.myradiostream.com:32404/7.html");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$data = curl_exec($ch);
curl_close($ch);
$data = str_replace('</body></html>', "", $data);
$split = explode(',', $data);
if (empty($data)) {
  $listeners = 0;
} else {
  if ($split[1] == "0") {
    $listeners = 0;
  } else {
    $listeners = $split[0];
  }
}
echo $listeners;
?>
</h4>
