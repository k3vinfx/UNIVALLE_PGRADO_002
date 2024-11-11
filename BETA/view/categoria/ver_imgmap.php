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
    background-color: black;
}
/*Valores de las imagenes*/
#slider img{
    margin: 10 auto;
    -moz-transition: opacity 2s;
    -webkit-transition: opacity 2s;
    transition: opacity 2s;
    width: 300px;
    height: 300px;
    position: absolute;
    opacity: 0;
}
/*Para que la primera imagen este activa al inicio*/
#slider img:nth-child(1){
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



<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h4 mb-2 text-gray-800">Mapa de ubicación / <?php echo $pvd->nombre;?> </h1>

  <!-- Agregar título con color diferente -->

  <!-- Tabla de datos -->

  <input type="hidden"  name="ubicacion" id="ubicacion" class="form-control"   value="<?php echo $pvd->latlong;?>">
                        </div>
  
 <div class="row">

    <div class="col-lg-14 mx-auto">

      <!-- List group-->
        <!-- list group item-->
      
          <!-- Custom content-->

        <div id="map" style="height: 300px;"></div>
           <div class="container mt-14 lg-14 mb-4">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <div class="row p-5 bg-white border rounded mt-1">
                             <div class="col-md-6 mt-1">
                                  <div id="slider">
                                    <img src="<?php echo $pvd->img1; ?>" alt="">
                                    <img src="<?php echo $pvd->img2; ?>" alt="">
                                    <img src="<?php echo $pvd->img3; ?>" alt="">
                                    <img src="<?php echo $pvd->img4; ?>" alt="">
                                    <img src="<?php echo $pvd->img5; ?>" alt="">

                                  </div>
                              <div>
                            <br>
                            <table>
                                <tr>
                                    <td id="izquierda">
                                        <input type="button" value="anterior" id="izquierda">
                                    </td>
                                    <td id="derecha">
                                        <input type="button" value="siguiente" id="derecha">
                                    </td>
                                </tr>
                            </table>
                        </div>                              
                    </div>

                  <div class="align-items-right align-content-left col-md-5 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Bs <?php echo $pvd->costo; ?>.00</h4>
                    </div>
                    <h6 class="text-success">Gastos minimo en el lugar</h6>

                    <h5>Lugar: <?php echo $pvd->titulo; ?> </h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i></div><span>123</span>
                    </div>

                    <p class="text-justify para mb-2">
                    <?php echo $pvd->descrip; ?>

                     </p> 
                    <div class="d-flex flex-column mt-4">
                     

                      <button onclick="confirmarAgregarVisita('<?php echo $pvd->idFK; ?>', '<?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>')">Agregar Visita</button>
                                 
                      <a href="?c=categoria&a=Index_1"class="btn btn-success btn-sm mt-2"><i class='fas fa-edit'></i>Regresar</a>         
                    </div>
                </div>
            </div>
            <!-- End -->
         </li>
       </ul>
      <!-- End -->
    </div>
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


<script>
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

        var valorPorDefecto = $('#ubicacion').val();


       var latLng = valorPorDefecto.split(',');
        var map = L.map('map').setView([parseFloat(latLng[0]), parseFloat(latLng[1])], 15); 
       // -14.256619,-69.707772
       // var map = L.map('map').setView([valorPorDefecto], 15);

       var gcs = L.esri.Geocoding.geocodeService();

       var marker = L.marker([parseFloat(latLng[0]), parseFloat(latLng[1])]).addTo(map); 

       
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


      
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






        $('#myModal').on('shown.bs.modal', function () {
                map.invalidateSize();
            });

       

        // Obtiene el botón que abre el modal
        var modal = document.getElementById("myModal1");

        // Obtiene el botón que abre el modal
        // Función para guardar los cambios
       
       /*Contador inicializado en cero*/
        var contador=0;

  
       // var obj=document.getElementById('slider');
      //  var obj2=obj.getElementsByTagName('img');

      //  var contador = 0;
       var obj2 = $('#slider img'); // Suponiendo que tienes un div con id="slider" que contiene las imágenes

        // Asignar evento de clic al botón con id="derecha"
        $('#derecha').on('click', function() {
            obj2.eq(contador).css('opacity', 0); // Ocultar la imagen actual
            if (contador <= 3) {
                contador++;
            } else {
                contador = 0;
            }
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
            });

        
        function cambiarManual(sentido)
        {
            if (sentido=="DER") {
                obj2[contador].style.opacity=0;
                if (contador<6) 
                {
                    contador++;
                    obj2[contador].style.opacity=1;
                    console.log('Contador vale ' + contador + ' Longitud ' + obj2.length);
                }
                else
                {
                    contador=0;
                    obj2[contador].style.opacity=1;
                    console.log('Contador vale ' + contador + ' Longitud ' + obj2.length);
                }
            }
            else if (sentido=="IZQ") 
            {
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
            }
        }

        function cambiarImg(){	        

            if(contador==obj2.length){
                for(var i=0; i<obj2.length; i++){
                    obj2[i].style.opacity='0';
                    contador--;
                }
                obj2[contador].style.opacity='1';
            }
            else
            {
                obj2[contador].style.opacity='1';
                contador++;
            }
            
        }



        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>

