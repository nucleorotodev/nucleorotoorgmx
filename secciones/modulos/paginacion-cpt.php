  <nav class="paginacion columns p-0 p-t-1 p-b-2 color-blanco color-terciario-0-hover">

    <div class="nav-previous columns small-6 text-left">
      <?php //echo previous_posts_link( '< Anterior' ); ?>
      <?php echo get_previous_posts_link( '< Anteriores' );?>
    </div>

    <div class="nav-next columns small-6 text-right">
      <?php //echo next_posts_link( 'Siguiente >',$q->max_num_pages ); ?>
      <?php echo get_next_posts_link( 'Siguientes >',$q->max_num_pages  );?>
    </div>

  </nav>
