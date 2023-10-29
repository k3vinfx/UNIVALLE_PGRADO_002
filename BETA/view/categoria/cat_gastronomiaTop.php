<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h4 mb-2 text-gray-800">Los mejores 10 lugares Gastronómicos ...</h1>

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
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table">
              <thead class="thead-dark">
                <tr>
                  <th>Código </th>
      
                  <th>Atractivo</th>
                  <th>Imagen</th>
  

                  <th>Acciones del Nodo</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->MenuLista1() as $r): ?>
                  <tr>
                    <td><?php echo $r->Recomendacion_id; ?></td>
                    <td><?php echo $r->Recomendacion_titulo; ?></td>
                    <td>
                      <a href="<?php echo $r->Recomendacion_ruta_carga; ?>" class="popup-link">
                          <img src="<?php echo $r->Recomendacion_ruta_carga; ?>" width="200"/>
                      </a>
                  </td>
                    <td>
                      <a href="?c=principal&a=Crud_Aux&Neurona_Id=<?php echo $r->Recomendacion_id; ?>" class="btn btn-success"><i class='fas fa-edit'></i>Registrar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
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