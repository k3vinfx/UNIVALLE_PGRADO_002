<h1 class="page-header">
    Nuevo Registro de Alternativa
</h1>


<script>
        $(document).ready(function () {

            viewProcesar();
            function viewProcesar() {
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').hide();
              $('#lb_entrada_4').hide();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').hide();
              $('#entrada_4').hide();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
      
        
            }


            $("#num_entrada").on("change", function () {
                var valorSeleccionado = parseInt($(this).val());

                if (valorSeleccionado == 2) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    
                    $('#entrada_2').show();
                    $('#entrada_3').hide();
                    $('#entrada_4').hide();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();
                    
                    $('#lb_entrada_2').show();
                    $('#lb_entrada_3').hide();
                    $('#lb_entrada_4').hide();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();

                } 
      

                if (valorSeleccionado == 3) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_3').show();
                    $('#entrada_4').hide();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();

                    $('#lb_entrada_3').show();
                    $('#lb_entrada_4').hide();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();

                } 

                if (valorSeleccionado == 4) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_4').show();
                    $('#entrada_5').hide();
                    $('#entrada_6').hide();

                    $('#lb_entrada_4').show();
                    $('#lb_entrada_5').hide();
                    $('#lb_entrada_6').hide();
                }  

                if (valorSeleccionado == 5) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#entrada_5').show();
                    $('#entrada_6').hide();

                    $('#lb_entrada_5').show();
                    $('#lb_entrada_6').hide();
                } 

                if (valorSeleccionado == 6) {
                    // El valor seleccionado es 2 o 3, realiza la acción deseada aquí
                    $('#lb_entrada_6').show();
                    $('#entrada_6').show();
                }               
            });


        });
    </script>

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
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 m-auto">
            <div class="card-header bg-primary text-white">
            Alternativa
            </div>
            <div class="card">
                <form id="frm-nuevo" action="?c=alternativa&a=Guardar" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="form-group">
                        <label for="nombre">Nombre de la Alternativa</label>
                        <input type="text" placeholder="Ingrese nombre" name="titulo" id="titulo" class="form-control">
                    </div>
                
                    


                    <div class="form-group">
              
                    <label id="lb_entrada_1">Categoria de la Alternativa</label>
                    <select class="custom-select selevt" name="categoria" id="categoria" >
                    <option  value="0">Seleccion </opcion>
                    <?php foreach ($this->model->MenuTipo() as $Tipo): ?>
                        <option  value="<?php echo $Tipo->Categoria_id; ?>">
                            <?php echo $Tipo->Categoria_nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>       
                    <?php endforeach; ?>
                    </select>                 
                    </div>             


                    <div class="form-group">
                        <label for="telefono">Precio</label>
                        <input type="number" step="5" placeholder="Ingrese el Precio de la Alternativa" name="costo" id="costo" class="form-control" min="0" max="1000">
                    </div>
             

             
                    <div class="form-group">
                    <label id="lb_entrada_1">Categoria de la Alternativa</label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Cargar Ubicación Mapa
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="saveChangesButton">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                            <div id="map" style="height: 300px;"></div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="contacto">Ubicacion de la Alternativa</label>
                        <input type="text" placeholder="Ingrese ubicacion de la alternativa" name="ubicacion" id="ubicacion" class="form-control">
                        <input type="text"  name="latlong" id="latlong" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="direccion">Descripcion</label>
                        <input type="text" placeholder="Ingrese Direccion" name="descripcion" id="descripcion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status" class="control-label">Estado</label>
                        <select name="estado" id="estado" class="custom-select selevt">
                        <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Activo</option>
                        <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Images</label>
                        <div class="custom-file">
                        <input type="hidden" name="meta_data" id="meta_data" class="form-control">
                 
                        <input type="file" class="form-control" id="archivo" name="archivo" multiple>      
                          <label class="custom-file-label" for="archivo">Escoje un Archivo de Imagen o Varias Imagenes</label>
                        </div>
                        <div id="file-info" class="mt-2"></div>
                    </div>
        

                    <input type="submit" value="Guardar Alternativa" class="btn btn-primary">
                    <a href="?c=principal" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function(){
            
        var map = L.map('map').setView([-16.489689,-68.119293], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var gcs = L.esri.Geocoding.geocodeService();
        var currentMarker;

        map.on('click', (e)=>{
        var lat = Number(e.latlng.lat.toFixed(6));
        var lng = Number(e.latlng.lng.toFixed(6));
        if (currentMarker) {
            map.removeLayer(currentMarker);
        }
        currentMarker = L.marker(e.latlng).addTo(map);
        
        gcs.reverse().latlng(e.latlng).run((err, res)=>{
            if(err) return;
          //  alert(res.latlng);

         //   document.getElementById("text1").value = lat;
            document.getElementById("text2").value = lng;

       
            let latLngStr = e.latlng;

          //  let latLngStr = "LatLng(-16.485331, -68.119304)";
            document.getElementById("text1").value = lat;
            document.getElementById("latlong").value = lat + "," + lng ;
          //  currentMarker = L.marker(res.latlng).addTo(map).bindPopup(res.address.Match_addr).openPopup();
          //  currentMarker.bindPopup(res.address.Match_addr).openPopup();
          var popupContent = "";
          var inputContent = "";
            if (res.address.Match_addr) {
                popupContent += res.address.Match_addr + "<br>";
             //   popupContentInfo += res.address.Match_addr ;
            }
            if (res.address.Street) {
                popupContent += "Calle: " + res.address.Street + "<br>";
                inputContent += "Calle: " + res.address.Street + ", ";
  
            }
            if (res.address.Neighborhood) {
                popupContent += "Barrio: " + res.address.Neighborhood + "<br>";
           //    inputContent += "Barrio: " + res.address.Neighborhood + ", ";
       }
            // ... (puedes agregar más detalles aquí)

            // Mostrar la información en el popup
            currentMarker.bindPopup(popupContent).openPopup();

            document.getElementById("text3").value = res.address.Match_addr;

            });
        });

        $('#archivo').on('change', function() {
            var files = $(this)[0].files;
            var fileInfo = "";
            var jsonFiles = []; 
            
            if (files.length === 0) { 
                fileInfo = "No se ha seleccionado ningún archivo.";
            } else {
                fileInfo = `Se han seleccionado ${files.length} archivo(s):<br>`;
                for (var i = 0; i < files.length; i++) {
                    fileInfo += `- ${files[i].name}<br>`;
                    jsonFiles.push({

                        id: i,
                        data: files[i].name
                    });

                }
                var jsonFilesString = JSON.stringify(jsonFiles); // Convertir el array de objetos a una cadena JSON
            
                document.getElementById("meta_data").value = jsonFilesString;

               console.log(jsonFilesString);

            }

            $('#file-info').html(fileInfo); // Actualizar el contenido del elemento con la información del archivo
        });

        $('#myModal').on('shown.bs.modal', function () {
                map.invalidateSize();
            });

        document.getElementById("saveChangesButton").addEventListener("click", function() {
            var txt=  document.getElementById("text3").value ;
            document.getElementById("ubicacion").value = txt;
           
            // Aquí puedes agregar el código para modificar el contenido en tu archivo original.

            if (txt && txt.trim() !== "") { // Asegurarse de que txt no sea null, undefined o una cadena vacía
                $('#myModal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();   
          }

        });

        var modal = document.getElementById("myModal");

            // Obtiene el botón que abre el modal
            var btn = document.getElementById("openModalButton");

            // Obtiene el elemento <span> que cierra el modal
            var span = document.getElementsByClassName("close")[0];

            // Cuando el usuario hace clic en el botón, abre el modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // Cuando el usuario hace clic en <span> (x), cierra el modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // Cuando el usuario hace clic en cualquier lugar fuera del modal, lo cierra
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        // Función para guardar los cambios
        document.getElementById("saveChangesButton").onclick = function() {
            var text1Value = document.getElementById("text1").value;
            var text2Value = document.getElementById("text2").value;

            // Aquí puedes agregar el código para modificar el contenido en tu archivo original.
            console.log("Text1: " + text1Value + ", Text2: " + text2Value);
        }

        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>
