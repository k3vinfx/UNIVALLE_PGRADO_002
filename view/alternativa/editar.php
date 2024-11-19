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

        
#slider{
    margin: 0 auto;
    width: 310px;
    height: 300px;
    overflow:hidden;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
}
/*Valores de las imagenes*/
.slider-img {
    position: absolute;
    width: auto;
    height: 100%;
    max-height: 300px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slider-img.active {
    opacity: 1;
}

table{
    margin: 0 auto;
    width: 300px;
    height: auto;
    overflow:hidden;
    background-color: white;
    border: 0;
}

#izquierda{
    text-align: right;
}
#derecha{
    text-align: left;
}
</style>
<h1 class="page-header">
    Editar Alternativa
</h3>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>$(document).ready(function() {





  // Obtener el valor por defecto del select
  var valorPorDefecto1 = $('#entrada_1').val();
  var valorPorDefecto2 = $('#entrada_2').val();
  var valorPorDefecto3 = $('#entrada_3').val();
  var valorPorDefecto4 = $('#entrada_4').val();
  var valorPorDefecto5 = $('#entrada_5').val();
  var valorPorDefecto6 = $('#entrada_6').val();

  var cont=1;

 
  if(valorPorDefecto2>0){
    cont=2;
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
  if(valorPorDefecto3>0){
    cont=3;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').hide();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').hide();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto4>0){
    cont=4;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').hide();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').hide();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto5>0){
    cont=5;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').show();
              $('#lb_entrada_6').hide();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').show();
              $('#entrada_6').hide();
  }
  if(valorPorDefecto6>0){
    cont=6;
              $('#lb_entrada_1').show();
              $('#lb_entrada_2').show();
              $('#lb_entrada_3').show();
              $('#lb_entrada_4').show();
              $('#lb_entrada_5').show();
              $('#lb_entrada_6').show();

              $('#entrada_1').show();
              $('#entrada_2').show();
              $('#entrada_3').show();
              $('#entrada_4').show();
              $('#entrada_5').show();
              $('#entrada_6').show();
  }
  console.log("Valor por defecto: " + cont);

  $('#num_entradas').val(4);





           
       

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

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Editar Alternativa</h5>
                </div>
                <div class="card-body">
                    <!-- Formulario -->
                    <form id="frm-editar" action="?c=alternativa&a=Editar" method="post" enctype="multipart/form-data" autocomplete="off">
                        
                        <!-- Información básica -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nombre">Nombre de la Alternativa</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el Nombre de la Alternativa" value="<?php echo $pvd->TITULO; ?>" />
                            </div>
                            <div class="col-md-6">
                                <label for="categoria">Categoría</label>
                                <select class="form-select" name="categoria" id="categoria">
                                    <option value="<?php echo $pvd->IDCAT; ?>"><?php echo $pvd->categorias; ?></option>
                                    <?php foreach ($this->model->MenuTipo() as $Tipo): ?>
                                        <option value="<?php echo $Tipo->Categoria_id; ?>"><?php echo $Tipo->Categoria_nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Slider de imágenes -->
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div id="slider" class="m-auto">
                                    <img src="<?php echo $base_url . $pvd->img1; ?>" alt="Imagen 1" class="img-fluid slider-img active">
                                    <img src="<?php echo $base_url . $pvd->img2; ?>" alt="Imagen 2" class="img-fluid slider-img">
                                    <img src="<?php echo $base_url . $pvd->img3; ?>" alt="Imagen 3" class="img-fluid slider-img">
                                    <img src="<?php echo $base_url . $pvd->img4; ?>" alt="Imagen 4" class="img-fluid slider-img">
                                    <img src="<?php echo $base_url . $pvd->img5; ?>" alt="Imagen 5" class="img-fluid slider-img">
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-outline-secondary me-2" id="izquierda">Anterior</button>
                                    <button type="button" class="btn btn-outline-secondary" id="derecha">Siguiente</button>
                                </div>
                                <div class="mt-3">
                                    <label for="imgX">Imagen Nueva</label>
                                    <input type="file" id="imgX" name="imgX" class="form-control w-50 mx-auto">
                                    <button type="button" class="btn btn-success mt-2" id="saveChangesButtonImg">Guardar Cambios</button>
                                </div>
                            </div>
                        </div>

                        <!-- Detalles adicionales -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="costo">Precio</label>
                                <input type="number" class="form-control" id="costo" name="costo" value="<?php echo $pvd->COSTO; ?>" placeholder="Ingrese el precio">
                            </div>
                            <div class="col-md-4">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $pvd->descr; ?>" placeholder="Descripción">
                            </div>
                            <div class="col-md-4">
                                <label for="estado">Estado</label>
                                <select class="form-select" name="estado" id="estado">
                                    <option value="1" <?php echo $status == 1 ? 'selected' : ''; ?>>Activo</option>
                                    <option value="0" <?php echo $status == 0 ? 'selected' : ''; ?>>Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Ubicación y mapa -->
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ingrese ubicación de la alternativa" value="<?php echo $pvd->ubicacion; ?>">
                            </div>
                            <div class="col-md-4 text-center">
                                <label>&nbsp;</label>
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <i class="fas fa-map-marker-alt"></i> Cargar Ubicación Mapa
                                </button>
                            </div>
                        </div>

                        <!-- Modal del mapa -->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mapModalLabel">Seleccionar Ubicación</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="mapx" style="height: 300px;"></div>
                                    </div>

                                    <div class="modal-body">
                                        <label for="text1">Latitud:</label>
                                        <input type="text" id="text1" class="form-control mb-2" required>
                                        <label for="text2">Longitud:</label>
                                        <input type="text" id="text2" class="form-control mb-2" required>
                                        <label for="text3">Dirección:</label>
                                        <input type="text" id="text3" class="form-control mb-2" required>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" id="saveChangesButton">Guardar Cambios</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botones de acción -->
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary w-100">Editar Alternativa</button>
                            </div>
                            <div class="col-md-6">
                                <a href="?c=alternativa" class="btn btn-danger w-100">Regresar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<script>
    $(document).ready(function(){

        var valorPorDefecto = $('#ubicacion').val();


            var latLng = valorPorDefecto.split(',');
            var mapx = L.map('mapx').setView([parseFloat(latLng[0]), parseFloat(latLng[1])], 15); 
            // -14.256619,-69.707772
            // var map = L.map('map').setView([valorPorDefecto], 15);

            var gcs = L.esri.Geocoding.geocodeService();

            var marker = L.marker([parseFloat(latLng[0]), parseFloat(latLng[1])]).addTo(mapx); 


            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mapx);



        //https://mappinggis.com/2016/08/calculo-de-rutas-en-un-mapa-web-de-leaflet/
   
        gcs.reverse().latlng([parseFloat(latLng[0]), parseFloat(latLng[1])]).run((err, res)=>{
            if(err) return;
  
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
            marker.bindPopup(popupContent).openPopup();

            document.getElementById("text3").value = res.address.Match_addr;

            });


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


       // var obj=document.getElementById('slider');
      //  var obj2=obj.getElementsByTagName('img');
       /*Contador inicializado en cero*/
       var contador=0;
       $('#id_aux').val(contador);
       var obj2 = $('#slider img'); // Suponiendo que tienes un div con id="slider" que contiene las imágenes

        // Asignar evento de clic al botón con id="derecha"
        $('#derecha').on('click', function() {
            obj2.eq(contador).css('opacity', 0); // Ocultar la imagen actual
            if (contador <= 3) {
                contador++;
            } else {
                contador = 0;
            }
            $('#id_aux').val(contador);
            obj2.eq(contador).css('opacity', 1); // Mostrar la siguiente imagen
            console.log('Contador vale ' + contador + ' Longitud ' + obj2.length);
        });

        $('#izquierda').on('click', function() {
            obj2[contador].style.opacity=0;
                if (contador!=0) 
                {
                    contador--;
                    obj2[contador].style.opacity=1;
                }
                else
                {
                    contador=obj2.length-1;
                    obj2[contador].style.opacity=1;
                }
                $('#id_aux').val(contador);
            });

        $("#frm-editar").submit(function(){
            return $(this).validate();
        });

        $('#saveChangesButton').on('click', function(){
          
            var text1Value = $('#text1').val();
            var text2Value = $('#text2').val();
            // Aquí puedes agregar el código para modificar el contenido en tu archivo original.
            console.log("Text1: " + text1Value + ", Text2: " + text2Value);

            var txt = document.getElementById("text3").value;
            document.getElementById("ubicacion").value = txt;

            if (txt && txt.trim() !== "") {
                $('#myModal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }
            
        
        });
        $('#saveChangesButtonImg').on('click', function(){
        var formData = new FormData();
        var aux_numero = $('#id_aux').val();
        console.log("aux_numero",aux_numero);
        
        // Obtener el archivo seleccionado
        var fileInput = document.getElementById('imgX');
        if(fileInput.files.length > 0){
            formData.append('imgX', fileInput.files[0]);
           // alert('imagen para subir.',fileInput);
        } else {
            alert('Por favor, seleccione una imagen para subir.');
            return;
        }

        // Agregar otros datos necesarios
        formData.append('id_recomendacion', $('input[name="id_recomendacion"]').val());
        // Elimina 'nombreNuevo' si no es necesario

        // Enviar la solicitud AJAX
        var x="";

        if(aux_numero==0){x='?c=alternativa&a=EditarImagen1';console.log("Editar 1");}
        if(aux_numero==1){x='?c=alternativa&a=EditarImagen2';console.log("Editar 2");}
        if(aux_numero==2){x='?c=alternativa&a=EditarImagen3';console.log("Editar 3");}
        if(aux_numero==3){x='?c=alternativa&a=EditarImagen4';console.log("Editar 4");}
        if(aux_numero==4){x='?c=alternativa&a=EditarImagen5';console.log("Editar 5");}
        

        console.log("x:",x);
        console.log("contador:",aux_numero);
        
        
        $.ajax({

       
        url: x,
        type: 'POST',
        data: formData,
        contentType: false, // Importante para enviar archivos
        processData: false, // Importante para enviar archivos
        success: function(data) {
            console.log('Respuesta del servidor:', data);
        
        // Intentar parsear la respuesta a JSON en caso de que sea texto
        try {
            data = typeof data === 'string' ? JSON.parse(data) : data;
        } catch (e) {
            console.error('Error al parsear JSON:', e);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Respuesta no válida del servidor.'
            });
            return;
        }

        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: data.message
            }).then(() => {
                // Redireccionar o realizar otra acción si es necesario
             //   window.location.href = 'index.php?c=alternativa&a=NuevoIN';
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message
            });
        }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un problema al procesar la solicitud.'
            });
        }
    });
       
    });
    
    })

    
</script>
