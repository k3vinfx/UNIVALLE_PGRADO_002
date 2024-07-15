<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  
		  <img src="assets/img/logo-negativo.png" width="105px">


  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
	  Selecione una Categoria
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
	  	 <i class="fas fa-utensils"></i>
            <span>Calificados</span>
	  </a>
	  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=principal&a=Nuevo">Los mejores 10 lugares</a>
		  <a class="collapse-item" href="index.php?c=principal">Lista de lugares</a>	  </div>
	  </div>
  </li>

  <!-- Nav Item - Productos Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-map-marker-alt"></i>
            <span>Visitados</span>
	  </a>
	  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
			  <a class="collapse-item" href="?c=alternativa&a=Nuevo">Nuevo Alternativa</a>
			  <a class="collapse-item" href="index.php?c=alternativa">Listado de Alternativas</a>
		  </div>
	  </div>
  </li>

  <!-- Nav Item - Clientes Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-hiking"></i>
            <span>Pendiente de Vicita</span>
	  </a>
	  <div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=principal&a=Nuevo">Los mejores 10 lugares</a>
		  <a class="collapse-item" href="index.php?c=principal">Lista de lugares</a>
		  </div>
	  </div>
  </li>

  <?php //if ($_SESSION['rol'] == 1) { ?>

  <?php //} ?>

  <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>

