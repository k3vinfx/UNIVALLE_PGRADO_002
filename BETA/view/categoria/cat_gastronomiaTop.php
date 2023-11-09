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
  <h1 class="h4 mb-2 text-gray-800">Los mejores 10 lugares Gastronómicos</h1>

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


<script>
    $(document).ready(function(){ 


      $('#x21').on('click', function() { 
        
        alert('ID: ');
      
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
   


                
  
    


        $('#myModal').on('shown.bs.modal', function () {
                map.invalidateSize();
            });

       

        // Obtiene el botón que abre el modal
        var modal = document.getElementById("myModal1");

        // Obtiene el botón que abre el modal




        var modal = document.getElementById("myModal");

            // Obtiene el botón que abre el modal
            var btn = document.getElementById("openModalButton");

            // Obtiene el elemento <span> que cierra el modal
            var span = document.getElementsByClassName("close")[0];

            // Cuando el usuario hace clic en el botón, abre el modal 
        
            // Cuando el usuario hace clic en <span> (x), cierra el modal
        

            // Cuando el usuario hace clic en cualquier lugar fuera del modal, lo cierra
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        // Función para guardar los cambios
       

        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>

