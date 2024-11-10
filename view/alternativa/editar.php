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
                                    <td>
                                          <!-- Botón de Editar -->
                        <button onclick="window.location.href='?c=categoria&a=EditarImagenes&id=<?php echo $pvd->idFK; ?>'" class="btn btn-primary">
                            Editar Imágenes
                        </button>
                                    </td>
                                </tr>
                            </table>

                      
                    </div>
                </div>
                
 
            </div>
        </div>
    </div>
</div>

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

                    <input type="hidden" name="id_recomendacion" value="<?php echo $pvd->ID; ?>" />
                  
                     <div class="form-group">
                         <label for="inputEmail4">Nombre de la Alternativa</label>
                             <input type="text" name="nombre" id="nombre"
                      value="<?php echo $pvd->TITULO;?>"
                     class="form-control"  placeholder="Ingresa el Nombre de la Neurona">
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

                x
        

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
        $("#frm-editar").submit(function(){
            return $(this).validate();
        });
    })
</script>
