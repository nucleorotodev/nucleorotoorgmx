<?php
/*
Template Name: RotoRadio
*/

get_header();

?>
<section class="columns small-12 large-9 p-0 h-100-v color-blanco p-top">

<?php
if (have_posts()):
  while (have_posts()): the_post();
  ?>

  <h1 class="titulo-anim columns text-center p-0-3 color-blanco"><?php echo get_the_title(); ?></h1>


  <!-- <div class="x-grid p-1 text-center">

    <?php echo get_the_content(); ?>
  
  </div> -->

  <div class="x-grid h-a p-0">
  <h3 class="text-center">
  <strong>
    Press play, and enjoy
  </strong>
</h3>
    <div id="radio-widget" class="text-center">
 
      <script src="//myradiostream.com/embed/NRGramofono"></script>

    </div>

    <div class="x-grid text-center">

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
    Direct Links:
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




  <?php
endwhile;
endif;
?>



</section>
<?php
get_footer();
