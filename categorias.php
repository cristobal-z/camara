<?php if($_SESSION['iniciar'] == 1): ?>
<div class="list-group">


  <a href="ingresar_oferta.php" class="list-group-item <?php if($titulo_pagina == "Ingresar Oferta"){echo "active";} ?>">Subir Oferta</a>
  <a href="eliminar_oferta.php" class="list-group-item <?php if($titulo_pagina == "Eliminar Oferta")echo "active"; ?>">ELiminar / Editar Ofertas </a>
  <a href="inicio.php" class="list-group-item <?php if($titulo_pagina == "Inicio")echo "active"; ?>">Inicio</a>
  <a href="crear.php" class="list-group-item <?php if($titulo_pagina == "")echo "active"; ?>">Agregar administrador nuevo</a>

</div>

<?php endif ?>

<?php if($_SESSION['iniciar'] == NULL) : ?>
  <div class="list-group">
    <a href="index.php" class="list-group-item <?php if($titulo_pagina == "Inicio")echo "active"; ?>">Inicio</a>

   <a href="lo.php" class="list-group-item <?php if($titulo_pagina == "Iniciar session")echo "active"; ?>">Ingresar</a>

  </div>

<?php endif ?>
