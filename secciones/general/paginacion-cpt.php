<?php if ($q->max_num_pages > 1): ?>
<nav class="paginacion columns p-0 p-t-1 p-b-2">

  <div class="nav-previous columns small-6 text-left"><?php echo previous_posts_link( '< Anterior' ); ?></div>

  <div class="nav-next columns small-6 text-right"><?php echo next_posts_link( 'Siguiente >',$q->max_num_pages ); ?></div>

</nav>
<?php endif; ?>
