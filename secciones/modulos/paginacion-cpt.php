  <nav class="paginacion columns p-0 p-t-1 p-b-2 color-blanco color-terciario-0-hover">
<?php
    $pags = 9999; //
     echo paginate_links( array(
        'base' => str_replace( $pags, '%#%', get_pagenum_link( $pags ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages
    ) );

    wp_reset_postdata();

    ?>
  </nav>
