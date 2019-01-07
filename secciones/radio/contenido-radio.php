<?php
if (have_posts()):
  while (have_posts()): the_post();
  ?>

  <h1 class="titulo-anim grid-container text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>


  <p class="columns p-2 text-center font-l">

    <?php echo get_the_content(); ?>

  </p>

  <?php
endwhile;
endif;
?>

<div class="columns h-a p-1">

  <div class="columns small-12 medium-6">

    <h3 class="text-center">
      <strong>
        Dale 'Play'
      </strong>
    </h3>

    <div id="radio-widget" class="text-center">

      <script src="//myradiostream.com/embed/NRGramofono"></script>

    </div>

  </div>

  <div class="columns small-12 medium-6 text-center">

    <?php
    $radio_links = array(
      'PLS Link' => 'http://s42.myradiostream.com:32404/listen.pls',
      'M3U Playlist' => 'http://s42.myradiostream.com:32404/listen.m3u',
      'MP3 Audio' => ' http://s42.myradiostream.com:32404/listen.mp3',
      'AAC+ Audio' => 'http://s42.myradiostream.com:32404/listen.m4a'
    );
    ?>

    <h3>
      <strong>
        Links directos:
      </strong>
    </h3>
    <ul>
      <?php
      for($i=0; $i < count($radio_links); $i++):
        $link = key($radio_links);
        ?>

        <li class="x-grid test-center">
          <a href="<?php echo $radio_links[$link];?>">
            <?php
            echo $link;
            next($radio_links);
            ?>
          </a>
        </li>
        <?php
      endfor;
      ?>
    </ul>

  </div>

</div>
