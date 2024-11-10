
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
                        <!-- Botón de Editar -->
                        <button onclick="window.location.href='?c=categoria&a=EditarImagenes&id=<?php echo $pvd->idFK; ?>'" class="btn btn-primary">
                            Editar Imágenes
                        </button>
                    </div>
                </div>
                
                <!-- Información adicional -->
                <div class="align-items-right align-content-left col-md-5 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Bs <?php echo $pvd->costo; ?>.00</h4>
                    </div>
                    <h6 class="text-success">Gastos mínimo en el lugar</h6>
                    <h5>Lugar: <?php echo $pvd->titulo; ?> </h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span>123</span>
                    </div>
                    <p class="text-justify para mb-2">
                        <?php echo $pvd->descrip; ?>
                    </p>
                    <div class="d-flex flex-column mt-4">
                        <button onclick="confirmarAgregarVisita('<?php echo $pvd->idFK; ?>', '<?php echo htmlspecialchars($clienteEmail, ENT_QUOTES, 'UTF-8'); ?>')">Agregar Visita</button>
                        <a href="?c=categoria&a=Index_1" class="btn btn-success btn-sm mt-2"><i class='fas fa-edit'></i> Regresar</a>
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
