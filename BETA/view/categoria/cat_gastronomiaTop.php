<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h4 mb-2 text-gray-800">Los mejores 10 lugares Gastronómicos </h1>

  <!-- Agregar título con color diferente -->
  <div class="row align-items-center">
    <div class="col-sm-3"> <!-- Dividir el espacio en dos columnas -->
      <div class="card bg-info text-white">
        <div class="card-body">
          <h7 class="card-title">Tipo de lugar:</h7>
          <!-- Agregar cuadro de selección (select box) para el tipo de lugar -->
          <select class="form-control">
            <option value="baratos">Lugares Baratos</option>
            <option value="normales">Lugares Normales</option>
            <option value="caros">Lugares Caros</option>
          </select>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4"> <!-- Dividir el espacio en dos columnas -->
      <div class="card bg-info text-white">
        <div class="card-body">
          <h7 class="card-title">¿Con quién irás?</h7>
          <!-- Agregar cuadro de selección (select box) para con quién irás -->
          <select class="form-control">
            <option value="solo">Solo</option>
            <option value="con_amigo">Con 1 amigo</option>
            <option value="con_pareja">Con mi pareja</option>
            <option value="con_familia">Con mi familia</option>
          </select>
        </div>
      </div>
    </div>

  <div class="col-sm-4"> <!-- Dividir el espacio en dos columnas -->
      <div class="card bg-info text-white">
        <div class="card-body">
          <h7 class="card-title">¿Horario?</h7>
          <!-- Agregar cuadro de selección (select box) para con quién irás -->
          <select class="form-control">
            <option value="solo">Mañana</option>
            <option value="con_amigo">Tarde</option>
            <option value="con_pareja">Noche</option>
  
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Tabla de datos -->


  
 <div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <?php foreach($this->model->MenuLista1() as $r): ?>
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">ID: <?php echo $r->ID; ?>/<?php echo $r->TITULO; ?> </h5>
              <p class="font-italic text-muted mb-0 small"><?php echo $r->TITULO; ?></p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">Gastos del lugar / $120.00</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>


            </div><img src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->
        <?php endforeach; ?>

        <!-- End -->


      </ul>
      <!-- End -->
    </div>
  </div>
</div>

 
</div>

<!-- /.container-fluid --><!-- Incluir CSS para Magnific Popup -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<!-- Incluir JS para Magnific Popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


    <script>
        $(document).ready(function() {
    $('.popup-link').magnificPopup({
        type: 'image'
        // otras opciones si las necesitas
    });
});