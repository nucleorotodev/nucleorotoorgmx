<section id="roto-tv" class="columns small-12 large-9 h-a p-0 p-lg-1 p-top color-blanco">

  <!--  -->
  <?php if (have_posts()):the_post(); ?>

    <section class="grid-x cell h-100-v h-md-85-v" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_the_post_thumbnail_url();?>">

      <div class="row align-middle">
        <div class="columns h-a color-blanco">
          <?php get_template_part('secciones/modulos/iteracion-titulos'); ?>
        </div>
      </div>
    </section>
    <!--  -->

    <div id="live-video-player" class="columns h-a">

      <div class=" h-a rel">

        <section id="live-container" class="columns">
          <?php
          // if (!! get_field('live_video')):
          //   echo get_field('live_video');
          // endif;
          ?>
        </section>

        <section id="live-texto" class="columns small-12">
          <?php
          if (!! get_the_content()):
            echo get_the_content();
          endif;
          ?>
        </section>

        <script src="https://embed.twitch.tv/embed/v1.js"></script>

        <script type="text/javascript">
        new Twitch.Embed("live-container", {
          channel: "nucleoroto",
          layout: "video",
          theme: "dark"
        });
      </script>
    </div>
  </div>
  <?php
endif;
?>
<!-- share -->
<div class="grid-x p-t-3">
  <?php
  if(function_exists('social_warfare')):
    social_warfare();
  endif;
  ?>
</div>
<!--  -->

</section>
