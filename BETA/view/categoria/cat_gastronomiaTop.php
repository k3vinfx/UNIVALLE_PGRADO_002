 <!-- Load Leaflet from CDN -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
    integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
    integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
    crossorigin=""></script>


<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h4 mb-2 text-gray-800">Los mejores 10 lugares Gastronómicos  </h1>

  <input type="hidden" name="correo" id = "correo"  value=" <?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>">
            

			
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

    
          <!-- Custom content-->
          <?php foreach($this->model->MenuLista1() as $r): ?>

          <div class="container mt-10 mb-8">
              <div class="d-flex justify-content-center row">
                  <div class="col-md-12">
                      <div class="row p-2 bg-white border rounded mt-2">
                          <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250" ></div>
                          <div class="col-md-6 mt-1">

                          <!-- ANALISIS DE IA -->

                                  <h5>ID: <?php echo $r->ID; ?>/<?php echo $r->TITULO; ?></h5>
                                  <div class="d-flex flex-row">
                                      <div class="ratings mr-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i></div><span>Calificación</span>
                                  </div>
                                  <div class="mt-1 mb-1 spec-1"><span>Descripción</span><span class="dot"></span></div>
                                  <p class="text-justify para mb-2">
                                  <?php echo $r->DESCRIPCION; ?> <br><br>
                                  </p> 
                                  </div>
                                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                  <div class="d-flex flex-row align-items-center">
                                      <h4 class="mr-1">Bs <?php echo $r->COSTO; ?>.00</h4>
                                  </div>
                                  <h6 class="text-success">Gastos minimo en el lugar</h6>
                                  <div class="d-flex flex-column mt-4">
                             
                                  <button onclick="confirmarAgregarVisita('<?php echo $r->ID; ?>', '<?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>')">Agregar Visita</button>
                                  <a href="?c=categoria&a=Crud_Aux&ver_id=<?php echo $r->ID; ?>"class="btn btn-danger btn-sm mt-2"><i class='fas fa-edit'></i> Ver Mapa y Imagenes</a>         
       
                                </div>

                     
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Incluir CSS para Magnific Popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

<!-- Incluir JS para Magnific Popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
               // window.location.href = "?c=producto&a=Eliminar&idProducto=" + idProducto;
      

               function confirmarAgregarVisita(idProducto, idEmail) {
                Swal.fire({
                  title: '¿Está seguro de Agregar Visita?',
                  text: "Esta acción registrará su visita",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sí, agregarla',
                  cancelButtonText: 'Cancelar'
                }).then((result) => {
                  if (result.isConfirmed) {
                    // Aquí realizarías la llamada AJAX a tu servidor para agregar la visita
                    $.ajax({
                      url: '?c=categoria&a=Crud_Aux_Registrar', // Asegúrate de que esta es la URL correcta
                      type: 'POST',
                      data: { idProducto: idProducto, idEmail: idEmail }, // Pasa ambos ID y EMAIL como parte de los datos
                      success: function(response) {
                        // Si todo va bien, muestra el swal de éxito
                        Swal.fire(
                          '¡Agregado!',
                          'La visita ha sido agregada exitosamente.',
                          'success'
                        );
                      },
                      error: function(xhr, status, error) {
                        // Manejo del error
                        Swal.fire(
                          'Error',
                          'Hubo un problema al agregar la visita, por favor intente nuevamente.',
                          'error'
                        );
                      }
                    });
                  }
                });
              }



        


    $(document).ready(function(){ 

        // Función para guardar los cambios
       

        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>