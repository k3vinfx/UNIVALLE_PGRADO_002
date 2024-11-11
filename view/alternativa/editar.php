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
    <!-- Content Row -->

    
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card-header bg-primary text-white">
            Alternativa
            </div>
            <div class="card">
                <form id="frm-editar" action="?c=alternativa&a=Editar" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data">
                    <?php echo isset($alert) ? $alert : ''; ?>

                    <input type="text" name="id_recomendacion" id="id_recomendacion" value="<?php echo $pvd->ID; ?>" />
                  
                     <div class="form-group">
                         <label for="inputEmail4">Nombre de la Alternativa</label>
                             <input type="text" name="nombre" id="nombre"
                      value="<?php echo $pvd->TITULO;?>"
                     class="form-control"  placeholder="Ingresa el Nombre de la Neurona">
                    </div>
                    <?php
                    $base_url = "https://k3sys.cloud/kevs_pg1/BETA/";
                    ?>
                    <div class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <div class="row p-5 bg-white border rounded mt-1">
                             <div class="col-md-6 mt-1">
                                   <div id="slider">
                                        <img src="<?php echo $base_url . $pvd->img1; ?>" alt="Imagen 1">
                                        <img src="<?php echo $base_url . $pvd->img2; ?>" alt="Imagen 2">
                                        <img src="<?php echo $base_url . $pvd->img3; ?>" alt="Imagen 3">
                                        <img src="<?php echo $base_url . $pvd->img4; ?>" alt="Imagen 4">
                                        <img src="<?php echo $base_url . $pvd->img5; ?>" alt="Imagen 5">
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
                                    <table>
                                     </br>
                                    <tr>
                                     <!-- Cargar nuevas imágenes -->
                                     <td >

                                     <label for="img1">Imagen Nueva:</label>
                                     <input type="file" class="form-control mb-2" id="imgX" name="imgX" multiple>
                                               <button type="button" class="btn btn-success" id="saveChangesButtonImg">Guardar Cambios</button>
                 
                                </tr>
                            </table>
                        </div>                              
                    </div>

                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="direccion">Ubicacion</label>
                        <input type="text" placeholder="Ingrese Ubicacion"
                         name="ubicacion" id="ubicacion" class="form-control" 
                         value="<?php echo $pvd->ubicacion;?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label id="lb_entrada_1">Categoria</label>
                        <select class="custom-select selevt"  name="categoria" id="categoria" >
                    <option   value="<?php echo $pvd->IDCAT;?>"> <?php echo $pvd->categorias;?> </opcion>
                    <?php foreach ($this->model->MenuTipo() as $Tipo): ?>
                        <option  value="<?php echo $Tipo->Categoria_id ; ?>">
                            <?php echo $Tipo->Categoria_nombre; ?> <!-- Reemplaza "Nombre" con el nombre real de la columna que deseas mostrar en el select -->
                        </option>       
                    <?php endforeach; ?>
                    </select>    
                        </div>
                    </div>
                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="telefono">Precio</label>
                        <input type="number" step="1" placeholder="Ingrese el Precio de la Alternativa" 
                        name="costo" id="costo" class="form-control" min="0" max="1000" value="<?php echo $pvd->COSTO;?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="direccion">Descripcion</label>
                        <input type="text" placeholder="Ingrese Direccion"
                         name="descripcion" id="descripcion" class="form-control" value="<?php echo $pvd->descr;?>">
                        </div>
                    </div>
                 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="telefono">Latitud</label>
                        <input type="text" step="1" placeholder="Ingrese su latitud" 
                        name="Latitud" id="Latitud" class="form-control" value="1">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="telefono">Longitud</label>
                        <input type="text" step="1" placeholder="Ingrese su longitud" 
                        name="Longitud" id="Longitud" class="form-control" value="2">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                      <label for="status" class="control-label">Estado</label>
                        <select name="estado" id="estado" class="custom-select selevt">
                        <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Activo</option>
                        <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Inactivo</option>
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                             <label for="" class="control-label">Images</label>
                        <div class="custom-file">
                        <input type="file" class="form-control" id="archivo" name="archivo" multiple>      
                          <label class="custom-file-label" for="archivo">Escoje un Archivo de Imagen o Varias Imagenes</label>
                        </div>
                    </div>

                
        

                    <input type="submit" value="Editar Alternativa" class="btn btn-primary">
                    <a href="?c=alternativa" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<script>
    $(document).ready(function(){

        
       // var obj=document.getElementById('slider');
      //  var obj2=obj.getElementsByTagName('img');
       /*Contador inicializado en cero*/
       var contador=0;

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

        $("#frm-editar").submit(function(){
            return $(this).validate();
        });

        $('#saveChangesButtonImg').on('click', function(){
        var formData = new FormData();

        // Obtener el archivo seleccionado
        var fileInput = document.getElementById('imgX');
        if(fileInput.files.length > 0){
            formData.append('imgX', fileInput.files[0]);
            alert('imagen para subir.',fileInput);
        } else {
            alert('Por favor, seleccione una imagen para subir.');
            return;
        }

        // Agregar otros datos necesarios
        formData.append('id_recomendacion', $('input[name="id_recomendacion"]').val());
        // Elimina 'nombreNuevo' si no es necesario

        // Enviar la solicitud AJAX
        $.ajax({
        url: '?c=alternativa&a=EditarImagen1',
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
                window.location.href = 'index.php?c=alternativa&a=NuevoIN';
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
