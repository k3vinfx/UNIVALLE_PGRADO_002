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
  <h4 class="h4 mb-1 text-gray-700">Lugares Gastronómicos... </h4>
  <input type="hidden" name="correo" id="correo" value="<?php echo trim(htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8')); ?>">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md card bg-info text-white"> <!-- 'col-12' for small screens, 'col-md' for medium to larger screens -->
        <div class="card-body">
          <h5 class="card-title">
            <i class="fa fa-search" style="font-size: 20px;"></i> ¿Dónde quieres ir?
          </h5>
          <div class="d-flex align-items-center mt-2">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Radios1" id="Radios1">
              <label class="form-check-label" for="Radios1">
                Busqueda por nombre de lugar&nbsp;
              </label>
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Radios2" id="Radios2">
              <label class="form-check-label" for="Radios2">
                Busqueda por tipo de lugar (I.A.)
              </label>
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Radios3" id="Radios3">
              <label class="form-check-label" for="Radios3">
                Ver Todo
              </label>
            </div>

          </div>
          <div class="input-group mb-4" id="additionalFields">
            <select name="precio" id="precio" class="form-select-outline-secondary">
              <option value="1">Muy Económico</option>
              <option value="2">Económico</option>
              <option value="3">Moderado</option>
              <option value="4">Premium</option>
            </select>
            <select name="compania" id="compania" class="form-select-outline-secondary">
              <option value="1">Visita Individual</option>
              <option value="2">Visita con un Amigo</option>
              <option value="3">Visita con un Pareja</option>
              <option value="4">Salida Familiar o en Grupo</option>
            </select>
            <select name="horario" id="horario" class="form-select-outline-secondary">
              <option value="1">Ir en la mañana</option>
              <option value="2">Ir en la tarde</option>
              <option value="3">Ir en la noche</option>
            </select>
            
            <input type="text" class="form-control" placeholder="Nombre del lugar" name="textoX" id="textoX" aria-label="Nombre del lugar">
            <button onclick="buscarDatosEnviados()" class="btn btn-secondary" type="button" id="buscar_lugar">Buscar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" name="resultadosCont" id="resultadosCont">
    <div class="col-lg-12 mx-auto">
      <?php 
      $contador = 0;
      $index = 0; // Initialize index for zebra striping
      foreach($this->model->MenuLista1() as $r): 
        // Determine the background color based on even/odd index
        $bgColor = $index % 2 === 0 ? 'background-color: #f0f0f0;' : 'background-color: #dcdae8;'; 
        $contador++;
      ?>
         <div class="container mt-10 mb-8 resultadoFila">
        <div class="d-flex justify-content-center row">
          <div class="col-md-12">
            <div class="row p-2 border rounded mt-2" style="<?php echo $bgColor; ?>">
              <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250"></div>
              <div class="col-md-6 mt-1">
                <h5 class="tituloLugar">ID: <?php echo $r->ID; ?>/<?php echo $r->TITULO; ?></h5>
                <div class="d-flex flex-row">
                  <div class="ratings mr-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <span>Calificación</span>
                </div>
                <div class="mt-1 mb-1 spec-1"><span>Descripción</span><span class="dot"></span></div>
                <p class="text-justify para mb-2">
                  <?php echo $r->DESCRIPCION; ?><br><br>
                </p> 
              </div>
              <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">Bs <?php echo $r->COSTO; ?>.00</h4>
                </div>
                <h6 class="text-success">Gastos minimo en el lugar</h6>
                <div class="d-flex flex-column mt-4">
                  <button onclick="confirmarAgregarVisita('<?php echo $r->ID; ?>', '<?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>')">Agregar Visita</button>
                  <a href="?c=categoria&a=Crud_Aux&ver_id=<?php echo $r->ID; ?>" class="btn btn-danger btn-sm mt-2"><i class='fas fa-edit'></i> Ver Mapa y Imagenes</a>         
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
</div>

<!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/brain.js@2.0.0-beta.18/dist/browser.js"></script>

<script>

  
function buscarDatosEnviados() {
  var precio = $('#precio').val();
  var compania = $('#compania').val();
  var horario = $('#horario').val();
  var correo = $('#correo').val().trim();
  var aux_D = 0;

  $.ajax({
    url: '?c=categoria&a=Solicitud_Busqueda_Input',
    type: 'POST',
    data: { correo: correo, dato1_compania: compania, dato2_precio: precio, dato3_horario: horario },
    success: function(response) {
      console.log('Respuesta del servidor:', response);
      var info = JSON.parse(response);
      var resultadosContainer = $('#resultadosCont');
      var requests = [];

      resultadosContainer.empty();

      for (var i = 0; i < info.length; i++) {
        var aux = info[i].id_recomen;
        aux_D++;

        var request = $.ajax({
          url: '?c=categoria&a=ObtenerRecomendacionPorID',
          type: 'POST',
          async: false,
          data: { aux: aux },
          success: function(response) {
            console.log('Respuesta del servidor 3:', response);
            var info = JSON.parse(response);

            var resultadoDiv = $('<div>').addClass('container mt-10 mb-8');
            var innerDiv = $('<div>').addClass('d-flex justify-content-center row');
            var contentDiv = $('<div>').addClass('col-md-12');

            var bgColor = info.index % 2 === 0 ? '#f0f0f0' : '#dcdae8';
            var rowDiv = $('<div>').addClass('row p-2 border rounded mt-2').css('background-color', bgColor);

            var imageColDiv = $('<div>').addClass('col-md-3 mt-1');
            var imagen = $('<img>').addClass('img-fluid img-responsive rounded product-image')
                                  .attr('src', info.CARGA1)
                                  .attr('alt', 'Imagen no disponible')
                                  .attr('width', '250');
            imageColDiv.append(imagen);

            var detailsColDiv = $('<div>').addClass('col-md-6 mt-1');
            detailsColDiv.append($('<h5>').text('ID: ' + info.ID + '/' + info.TITULO));

            var ratingsDiv = $('<div>').addClass('d-flex flex-row');
            var starsDiv = $('<div>').addClass('ratings mr-2');
            for (var j = 0; j < 4; j++) {
              starsDiv.append($('<i>').addClass('fa fa-star'));
            }
            ratingsDiv.append(starsDiv);
            ratingsDiv.append($('<span>').text('Calificación'));
            detailsColDiv.append(ratingsDiv);

            detailsColDiv.append($('<div>').addClass('mt-1 mb-1 spec-1').html('<span>Descripción</span><span class="dot"></span>'));
            detailsColDiv.append($('<p>').addClass('text-justify para mb-2').text(info.DESCRIB));

            var actionColDiv = $('<div>').addClass('col-md-3 mt-1 border-left');
            actionColDiv.append($('<button>').text('Agregar Visita').on('click', function() {
              confirmarAgregarVisita(info.ID, info.clienteEmail);
            }));

            var link = $('<a>')
              .attr('href', '?c=categoria&a=Crud_Aux&ver_id=' + info.ID)
              .addClass('btn btn-danger btn-sm mt-2')
              .html('<i class="fas fa-edit"></i> Ver Mapa y Imágenes');
            actionColDiv.append(link);

            rowDiv.append(imageColDiv, detailsColDiv, actionColDiv);

            contentDiv.append(rowDiv);
            innerDiv.append(contentDiv);
            resultadoDiv.append(innerDiv);
            resultadosContainer.append(resultadoDiv);
          },
          error: function(xhr, status, error) {
            console.error(error);
          }
        });
        requests.push(request);
      }

      console.log('res:', aux_D);

      $.when.apply(null, requests).done(function() {
        console.log('Todas las solicitudes AJAX se han completado.');
      });
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
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
      $.ajax({
        url: '?c=categoria&a=Crud_Aux_Registrar',
        type: 'POST',
        data: { idProducto: idProducto, idEmail: idEmail },
        success: function(response) {
          Swal.fire(
            '¡Agregado!',
            'La visita ha sido agregada exitosamente.',
            'success'
          );
        },
        error: function(xhr, status, error) {
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

$(document).ready(function() {
  function toggleFields1() {
    if ($('#Radios1').is(':checked')) {
      $('#precio').hide();
      $('#compania').hide();
      $('#horario').hide();
      $('#textoX').show();
    } 
  }

  function toggleFields2() {
    if ($('#Radios2').is(':checked')) {
      $('#precio').show();
      $('#compania').show();
      $('#horario').show();
      $('#textoX').hide();
    } 
  }

  $('#Radios1').on('change', function() {
    if ($(this).is(':checked')) {
      $('#Radios2').prop('checked', false);
      toggleFields1();
    }
    console.log("precionado 1");
  });

  $('#Radios2').on('change', function() {
    if ($(this).is(':checked')) {
      $('#Radios1').prop('checked', false);
      toggleFields2();
      console.log("Radios2 seleccionado, Radios1 deseleccionado");
    }
  });


  $('#textoX').on('input', function() {
    console.log("datos entra..");
    var searchText = $(this).val().toLowerCase();
    $('.resultadoFila').each(function() {
      var tituloLugar = $(this).find('.tituloLugar').text().toLowerCase();
   
      console.log("buscando..",tituloLugar);
      if (tituloLugar.includes(searchText)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  // Inicialmente ocultar los campos si el radio button 'Radios1' está seleccionado
  toggleFields1();

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
        sexo: <?php echo $dato->peso6; ?>
      },
      output: { resultadoEsperado: <?php echo $dato->peso7; ?> }
    },
    <?php endforeach; ?>
  ];

  net.train(data);
});
</script>
