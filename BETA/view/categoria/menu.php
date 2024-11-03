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
  <a class="nav-link" href="?c=categoria&a=Index_1">
	  	 <i class="fas fa-utensils"></i>
            <span>Gastronomicas</span>
	  </a>
	 
  </li>

  <!-- Nav Item - Productos Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link" href="?c=categoria&a=Index_2">  
		<i class="fas fa-map-marker-alt"></i>
            <span>Pubs - Bares</span>
	  </a>
	
  </li>

  <!-- Nav Item - Clientes Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link" href="?c=categoria&a=Index_3">  
	  <i class="fas fa-hiking"></i>
            <span>Museo - Historia</span>
	  </a>
  </li>

  <!-- Nav Item - Clientes Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link" href="?c=categoria&a=Index_4">  
	  <i class="fas fa-university"></i>
            <span>Plazas y Centros Culturales</span>
	  </a>
  </li>
  <!-- Nav Item - Utilities Collapse Menu --> 
  <li class="nav-item">
  <a class="nav-link" href="?c=categoria&a=Index_5">  
	  <i class="fas fa-cocktail"></i>
            <span>Tiendas & Artesanias</span>
	  </a>
  </li>

  
  <li class="nav-item">
  <a class="nav-link" href="?c=categoria&a=Index_6">  
	  <i class="fas fa-star"></i>
            <span>Fiestas Festivas por Temporada</span>
	  </a>
  </li>

  <?php //if ($_SESSION['rol'] == 1) { ?>

  <?php //} ?>

  <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>

