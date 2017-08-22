<ul id="menu-lista">

<?php
for ($i=0; $i < 5; $i++):
  ?>

  <li class="w-a columns p-l-1 p-r-1 h-100 align-right">

    <a href="" class="row p-0 h-100 align-middle">

      <div class="columns h-a p-0 text-shadow">

        <?php echo "Elemento " . $i; ?>

      </div>

    </a>

  </li>

<?php endfor; ?>

</ul>
