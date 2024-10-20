<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="../BETA/assets/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  
		  <img src="assets/img/logo-negativo.png" width="105px">

	  <div class="sidebar-brand-text mx-3">Categorias</div>
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
	  <a class="nav-link collapsed" href="?c=categoria&a=Index_1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
	  	 <i class="fas fa-utensils"></i>
            <span>Gastronomicas</span>
	  </a>
	 
  </li>

  <!-- Nav Item - Productos Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="?c=categoria&a=Index_2" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-map-marker-alt"></i>
            <span>Lugares</span>
	  </a>
	
  </li>

  <!-- Nav Item - Clientes Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-hiking"></i>
            <span>Aventura</span>
	  </a>
	  <div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=principal&a=Nuevo">Los mejores 10 lugares</a>
		  <a class="collapse-item" href="index.php?c=principal">Lista de lugares</a>
		  </div>
	  </div>
  </li>

  <!-- Nav Item - Clientes Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-university"></i>
            <span>Cultural</span>
	  </a>
	  <div id="collapseClientes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=principal&a=Nuevo">Nuevo tipo de RRN</a>
		  <a class="collapse-item" href="index.php?c=principal">Listado de RNN</a>
		  </div>
	  </div>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-cocktail"></i>
            <span>Vida Nocturna</span>
	  </a>
	  <div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=entrada&a=Nuevo">Nuevo tipo de Entrada</a>
		  <a class="collapse-item" href="?c=entrada&a=Listado">Listado de Entradas</a>
		  </div>		
	  </div>
  </li>

  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-shopping-bag"></i>
            <span>Tiendas Artesanales</span>
	  </a>
	  <div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=entrada&a=Nuevo">Nuevo tipo de Entrada</a>
		  <a class="collapse-item" href="?c=entrada&a=Listado">Listado de Entradas</a>
		  <a class="collapse-item" href="?c=categoria&a=Nuevo">Nuevo tipo de Categoria</a>
		  <a class="collapse-item" href="?c=categoria&a=Listado">Listado de Categoria</a>
		  </div>		
	  </div>
  </li>

  <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="true" aria-controls="collapseUtilities">
	  <i class="fas fa-star"></i>
            <span>Reseñas</span>
	  </a>
	  <div id="collapseProveedor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
		  <div class="bg-white py-2 collapse-inner rounded">
		  <a class="collapse-item" href="?c=entrada&a=Nuevo">Nuevo tipo de Entrada</a>
		  <a class="collapse-item" href="?c=entrada&a=Listado">Listado de Entradas</a>
		  <a class="collapse-item" href="?c=categoria&a=Nuevo">Nuevo tipo de Categoria</a>
		  <a class="collapse-item" href="?c=categoria&a=Listado">Listado de Categoria</a>
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

