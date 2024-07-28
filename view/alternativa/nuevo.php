<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Nueva Alternativa Turística</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <style>
    .container {
      margin-top: 20px;
    }
    .modal-body {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="page-header text-center">Registro Nueva Alternativa Turística</h1>
    <div class="card">
      <div class="card-header bg-primary text-white">
        Alternativa
      </div>
      <div class="card-body">
        <form id="frm-nuevo" action="?c=alternativa&a=Guardar" method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre de la Alternativa</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-tag"></i></span>
              </div>
              <input type="text" placeholder="Ingrese nombre" name="titulo" id="titulo" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="categoria">Categoría de la Alternativa</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-list"></i></span>
              </div>
              <select class="custom-select" name="categoria" id="categoria">
                <option value="0">Seleccionar</option>
                <!-- Opciones generadas dinámicamente -->
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="precio">Precio</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
              </div>
              <input type="number" step="5" placeholder="Ingrese el Precio de la Alternativa" name="costo" id="costo" class="form-control" min="0" max="1000">
            </div>
          </div>
          <div class="form-group">
            <label for="imagenes">Cargar Imágenes del Alternativa</label>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
              <i class="fas fa-upload"></i> Cargar Imágenes
            </button>
          </div>
          <div class="modal" id="myModal1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Imágenes</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <label for="img1">Imagen 1:</label>
                  <input type="file" class="form-control mb-2" id="img1" name="img1">
                  <label for="img2">Imagen 2:</label>
                  <input type="file" class="form-control mb-2" id="img2" name="img2">
                  <label for="img3">Imagen 3:</label>
                  <input type="file" class="form-control mb-2" id="img3" name="img3">
                  <label for="img4">Imagen 4:</label>
                  <input type="file" class="form-control mb-2" id="img4" name="img4">
                  <label for="img5">Imagen 5:</label>
                  <input type="file" class="form-control mb-2" id="img5" name="img5">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" id="saveChangesButtonImg">Guardar Cambios</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="mapa">Cargar Ubicación Mapa</label>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              <i class="fas fa-map-marker-alt"></i> Cargar Ubicación Mapa
            </button>
          </div>
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Coordenadas</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <label for="text1">Latitud:</label>
                  <input type="text" id="text1" class="form-control mb-2">
                  <label for="text2">Longitud:</label>
                  <input type="text" id="text2" class="form-control mb-2">
                  <label for="text3">Dirección:</label>
                  <input type="text" id="text3" class="form-control mb-2">
                </div>
                <div id="map" style="height: 300px;"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" id="saveChangesButton">Guardar Cambios</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="ubicacion">Ubicación de la Alternativa</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
              <input type="text" placeholder="Ingrese ubicación de la alternativa" name="ubicacion" id="ubicacion" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
              </div>
              <input type="text" placeholder="Ingrese descripción" name="descripcion" id="descripcion" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="estado">Estado</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
              </div>
              <select name="estado" id="estado" class="custom-select">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Alternativa</button>
          <a href="?c=principal" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Regresar</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js" integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ==" crossorigin=""></script>
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js" integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA==" crossorigin=""></script>
  <script>
    $(document).ready(function(){
      var map = L.map('map').setView([-16.489689,-68.119293], 15);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      var gcs = L.esri.Geocoding.geocodeService();
      var currentMarker;

      map.on('click', (e) => {
        var lat = Number(e.latlng.lat.toFixed(6));
        var lng = Number(e.latlng.lng.toFixed(6));
        if (currentMarker) {
          map.removeLayer(currentMarker);
        }
        currentMarker = L.marker(e.latlng).addTo(map);

        gcs.reverse().latlng(e.latlng).run((err, res) => {
          if (err) return;

          document.getElementById("text1").value = lat;
          document.getElementById("text2").value = lng;
          document.getElementById("latlong").value = lat + "," + lng;

          var popupContent = "";
          if (res.address.Match_addr) {
            popupContent += res.address.Match_addr + "<br>";
          }
          if (res.address.Street) {
            popupContent += "Calle: " + res.address.Street + "<br>";
          }
          if (res.address.Neighborhood) {
            popupContent += "Barrio: " + res.address.Neighborhood + "<br>";
          }

          currentMarker.bindPopup(popupContent).openPopup();
          document.getElementById("text3").value = res.address.Match_addr;
        });
      });

      $('#saveChangesButton').on('click', function() {
        var txt = document.getElementById("text3").value;
        document.getElementById("ubicacion").value = txt;

        if (txt && txt.trim() !== "") {
          $('#myModal').modal('hide');
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
        }
      });

      $('#saveChangesButtonImg').on('click', function(e) {
        e.preventDefault();
        $('#myModal1').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
      });

      function actualizarRegistroYUI(inputElement, infoElementId) {
        var files = $(inputElement)[0].files;
        var fileInfo = "";

        if (files.length > 0) {
          var archivo = files[0].name;
          if (!esExtensionValida(archivo)) {
            fileInfo = "Formato no permitido. Seleccione un archivo de imagen (.jpg, .jpeg, .png, .gif).";
            $(inputElement).val('');
          } else if (Object.values(archivosSeleccionados).includes(archivo)) {
            fileInfo = "Este archivo ya ha sido seleccionado.";
            $(inputElement).val('');
          } else {
            var inputId = $(inputElement).attr('id');
            archivosSeleccionados[inputId] = archivo;
            fileInfo = `Archivo seleccionado: ${archivo}`;
          }
        } else {
          fileInfo = "No se ha seleccionado ningún archivo.";
        }

        $('#' + infoElementId).html(fileInfo);
      }

      var archivosSeleccionados = {};
      function esExtensionValida(nombreArchivo) {
        var extensionesPermitidas = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        return extensionesPermitidas.test(nombreArchivo);
      }

      $('#img1').on('change', function() { actualizarRegistroYUI(this, 'file-info1'); });
      $('#img2').on('change', function() { actualizarRegistroYUI(this, 'file-info2'); });
      $('#img3').on('change', function() { actualizarRegistroYUI(this, 'file-info3'); });
      $('#img4').on('change', function() { actualizarRegistroYUI(this, 'file-info4'); });
      $('#img5').on('change', function() { actualizarRegistroYUI(this, 'file-info5'); });
    });
  </script>
</body>
</html>
