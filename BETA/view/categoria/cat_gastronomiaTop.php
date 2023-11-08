<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h4 mb-2 text-gray-800">Los mejores 10 lugares Gastronómicos C...</h1>

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

<br>
  
 <div class="row">

    <div class="col-lg-12 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow mx-auto">

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <?php foreach($this->model->MenuLista1() as $r): ?>

<div class="container mt-10 mb-8">
    <div class="d-flex justify-content-center row">
        <div class="col-md-12">
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250" ></div>
                <div class="col-md-6 mt-1">
                    <h5>ID: <?php echo $r->ID; ?>/<?php echo $r->TITULO; ?></h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i></div><span>123</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify para mb-2">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br>
                    </p> 
                    </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Bs 13.99</h4>
                    </div>
                    <h6 class="text-success">Gastos minimo en el lugar</h6>
                    <div class="d-flex flex-column mt-4">
                      <button class="btn btn-primary btn-sm mt-2" type="button">Agregar Vicita</button> 
                     <button class="btn btn-danger btn-sm mt-2" type="button">Ver Mapa</button> 
                     <button class="btn btn-secondary btn-sm mt-2" type="button">Ver Imagenes</button></div>
                </div>
            </div>
        </div>
    </div>
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

<!-- /.container-fluid -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir CSS para Magnific Popup -->
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