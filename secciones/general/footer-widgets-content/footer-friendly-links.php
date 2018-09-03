<section class="row align-middle color-blanco font-m font-md-s font-lg-l">

  <div class="columns h-a p-0 p-md-1 small-11 large-10 xlarge-9 small-centered">

    <div class="columns h-a small-6">
      <h3 class="columns h-a text-left p-0">Fiendly</h3>

      <ul class="friendly-ul columns p-0 text-left ">
        <?php
        $links_col_1 = array(
          'Radio Nopal' => 'http://radionopal.com' ,
          'Stirpe999' => 'https://stirpe999.bandcamp.com/',
          'Presente Perfecto' => 'http://presenteperfecto.xyz/',
          'Cuatro Cuartos' => 'http://facebook.com',
          'Toplap' => 'http://toplap.org',
          'IMPT' => 'https://impt.bandcamp.com/',
          'Reggetron' => 'http://rggtrn.github.io',
          'BreakCore never dies' => 'http://breakcoreneverdies.net',
          'WAD' => 'http://wadweb.mx'
        );
        $links_rand_1 = shuffle_with_keys($links_col_1);
        $links_1 = array_slice($links_rand_1,0,8);
        for ($i=0; $i < count($links_1); $i++):
          $friend = key($links_1);
          ?>
          <li>
            <a href="<?php echo $links_1[$friend];?>" target="_blank">
              <?php
              echo $friend;
              next($links_1);
              ?>
            </a>
          </li>
          <?php
          endfor
          ?>
        </ul>

      </div>
      <!--  -->
      <div class="columns small-6">

        <ul class="friendly-ul columns p-0">
          <?php
          $links_col_2 = array(
            'LivecodeLab' => 'http://livecodelab.org' ,
            'Praxis Records' => 'https://praxis-records.net/shop/',
            'Mixfuckedup' => 'http://mixfuckedup.net/',
            'Darkmatter SoundSystem' => 'http://www.darkmattersoundsystem.com/',
            'LAAD' => 'http://www.laad.com.mx/',
            'Hernani VIllaseñor' => 'http://hernanivillasenor.com',
            'Fiendly Lin' => '#',
            'Fiendly Link' => '#'
          );
          for ($i=0; $i < count($links_col_2); $i++):
            $friend = key($links_col_2);
            ?>

            <li class="columns p-0 text-right">
              <a href="<?php echo $links_col_2[$friend];?>" target="_blank">
                <?php
                echo $friend;
                next($links_col_2);
                ?>
              </a>
            </li>

            <?php
            endfor
            ?>
          </ul>

          <h3 class="columns p-0 h-a text-right p-t-0-2">Links</h3>
        </div>

      </div>

    </section>
