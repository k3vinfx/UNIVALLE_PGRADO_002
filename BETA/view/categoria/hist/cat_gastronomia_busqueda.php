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

<style>







  
</style>




<div class="container-fluid">
  <!-- Page Heading -->
  <h4 class="h4 mb-1 text-gray-700">Lugares Gastronómicos.. </h4>
  <input type="text" name="correo" id="correo" value="<?php echo trim(htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8')); ?>">

             

     <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md card bg-info text-white"> <!-- 'col-12' for small screens, 'col-md' for medium to larger screens -->
            <div class="card-body">
              <h5 class="card-title"> <!-- Changed 'h7' to 'h5' for proper HTML heading level -->
                <i class="fa fa-search" style="font-size: 20px;"></i> ¿Dónde quieres ir?
              </h5>

              <div class="d-flex align-items-center mt-2">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios1" id="Radios1" >
                      <label class="form-check-label" for="exampleRadios1">
                          Busqueda por tipo de lugar&nbsp;
                      </label>
                  </div>
                    &nbsp;&nbsp;&nbsp;
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios2" id="Radios2" >
                      <label class="form-check-label" for="exampleRadios2">
                      Busqueda por nombre de lugar
                      </label>
                  </div>
               </div>

              <div class="input-group mb-4">
              <select name="precio" id="precio"  class="form-select-outline-secondary">
                    <option value="1">Muy Económico..</option>
                    <option value="2">Económico</option>
                    <option value="3">Moderado</option>
                    <option value="4">Premium</option>
                </select>
                <select name="compania" id="compania"  class="form-select-outline-secondary">
                  <option value="1">Visita Individual</option>
                  <option value="2">Visita con un Amigo</option>
                  <option value="3">Visita con un Pareja</option>
                  <option value="4">Salida Familiar o en Grupo</option>
                </select>
                <select name="horario" id="horario"  class="form-select-outline-secondary">
                  <option value="1">Ir en la mañana</option>
                  <option value="2">Ir en la tarde</option>
                  <option value="3">Ir en la noche</option>
                </select>
                <input type="text" class="form-control" placeholder="Nombre del lugar"  name="textoX" id="textoX"   aria-label="Nombre del lugar">
                <button  onclick="buscar_DatosEnviados()" class="btn btn-secondary" type="button" id="buscar_lugar">Buscar</button>

                <button onclick="buscar_DatosEnviados( '<?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>')">Agregar Visita</button>
              </div>
            </div>
          </div>
        </div>
    </div>



			
  <!-- Agregar título con color diferente -->


  <!-- Tabla de datos -->



  <div class="row">
  <div class="col-lg-12 mx-auto">
    <?php 
    $index = 0; // Initialize index for zebra striping
    foreach($this->model->MenuLista1() as $r): 
      // Determine the background color based on even/odd index
      $bgColor = $index % 2 === 0 ? 'background-color: #f0f0f0;' : 'background-color: #dcdae8;'; 
    ?>
    <!-- Custom content -->
    <div class="container mt-10 mb-8">
      <div class="d-flex justify-content-center row">
        <div class="col-md-12">
          <!-- Apply zebra striping style here -->
          <div class="row p-2 border rounded mt-2" style="<?php echo $bgColor; ?>">
            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250" ></div>
            <div class="col-md-6 mt-1">
              <!-- ANALYSIS OF IA -->
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
    <?php 
    $index++; // Increment index after each row
    endforeach; ?>
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
<script src="https://unpkg.com/brain.js@2.0.0-beta.18/dist/browser.js"></script>
<script>
  $(document).ready(function() {

    function toggleFields() {
        if ($('#Radios1').is(':checked')) {
            $('#compania').hide();
            $('#horario').hide();
            $('#precio').hide();
      

            console.log("Campos ocultos");
        } else {
            $('#additionalFields').show();
            console.log("Campos mostrados");
        }
    }


    console.log('script cargado');
    const net = new brain.NeuralNetwork();
const data = [

    <?php foreach ($this->model->MenuLista3() as $dato): ?>
    {
        input: {
            persona: <?php echo $dato->peso1; ?>, 
            comp: <?php echo $dato->peso2; ?>, 
            horario: <?php echo $dato->peso3; ?>,
            edad: <?php echo $dato->peso4; ?>,
            gasto: <?php echo $dato->peso5; ?>,
            sexo: <?php echo $dato->peso6; ?>,
            // ... otros valores ...+
        },
        output: { resultadoEsperado: <?php echo $dato->peso7; ?> } // Ajustar según tus datos
    },
    <?php endforeach; ?>
];

net.train(data);

// necesito los datos de la persona y un barrido por descendente de busqueda 1 x 1
// del entrenamiento y buscar y scar el dato en el entrenamiento
/*
function Predecir() {
    const Nuevo_dato1 = parseFloat(document.getElementById('estornudos').value);
    const Nuevo_dato2 = parseFloat(document.getElementById('escalosfrios').value);
    const Nuevo_dato3 = parseFloat(document.getElementById('fiebre').value);
    // Realizar una predicción
    // PONER LA SALIDA EN SQL OUTPUT
    // META LOS DATOS Q TENGA EN PAPEL
    // RESULTADO ESPERADO 
    // REDUNDANCIA DE DATOS
    // ESTAN AGRUPADO POR GRUPO
    // MAXIO MINIMO DE ERROR 0.5 EPS
    const output = net.run({ estornudo: Nuevo_dato1, FIBRE:Nuevo_dato2  , escalosfrios:Nuevo_dato3  });

    const predictionResult = document.getElementById('result');
    predictionResult.textContent = 'Resultado de la predicción: ' + JSON.stringify(output);

    console.log('Resultado de la predicción:', output);

}*/

const output = net.run({ COMP: 0.30 });


//const predictionResult = document.getElementById('result');
 // const predictionResult.textContent = 'Resultado de la predicción: ' + JSON.stringify(output);

console.log('Resultado de la predicción:', JSON.stringify(output));
var valor = $('#campoEjemplo').val();



               // window.location.href = "?c=producto&a=Eliminar&idProducto=" + idProducto;
      
               function buscar_DatosEnviados() {
                // contrastar respuesta con 3 datos de entrada y contrastar con los datos que el usuario tiene por defecto y luego recomendar ... 
               var precio = $('#precio').val();
               var compania = $('#compania').val();
               var horario = $('#horario').val();
               var correo = $('#correo').val().trim();


                $.ajax({
                      url: '?c=categoria&a=Solicitud_Busqueda_Input', // Asegúrate de que esta es la URL correcta
                      type: 'POST',
                      async: true,
                      // data: { dato1_compania: compania_var, dato2_horario: horario_var , dato3_precio: precio_var   }, // Pasa ambos ID y EMAIL como parte de los datos
                       data: {correo:correo, dato1_compania: compania ,dato2_precio: precio ,dato3_horario: horario  }, // Pasa ambos ID y EMAIL como parte de los datos

                      success: function(response) {
                        console.log(response);
                        // Si todo va bien, muestra el swal de éxito
                       // Swal.fire(
                       //   '¡Agregado!',
                       //   'La visita ha sido agregada exitosamente.',
                       //   'success'
                       // );
                       console.log('Respuesta del servidor:', response);

                       
                      },
                      error: function(xhr, status, error) {
                        // Manejo del error
                        console.error(error);
                      }
                    });

                  /*  $.ajax({
                      url: '?c=categoria&a=Solicitud_Busqueda_Input_Sexo', // Asegúrate de que esta es la URL correcta
                      type: 'POST',
                      async: true,
                      // data: { dato1_compania: compania_var, dato2_horario: horario_var , dato3_precio: precio_var   }, // Pasa ambos ID y EMAIL como parte de los datos
                       data: {correo:correo}, // Pasa ambos ID y EMAIL como parte de los datos

                      success: function(response) {
                        console.log(response);
                        // Si todo va bien, muestra el swal de éxito
                       // Swal.fire(
                       //   '¡Agregado!',
                       //   'La visita ha sido agregada exitosamente.',
                       //   'success'
                       // );
                       console.log('Respuesta del servidor:', response);
                      },
                      error: function(xhr, status, error) {
                        // Manejo del error
                        console.error(error);
                      }
                    });*/

              }
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


 });


        

</script>