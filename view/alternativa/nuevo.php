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
                        <label for="contacto">Ubicacion de la Alternativa</label>
                        <input type="text" placeholder="Ingrese ubicacion de la alternativa" name="ubicacion" id="ubicacion" class="form-control">
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

                    <div class="form-row">
                        <div class="form-group col-md-3">
                        <label for="telefono">Latitud</label>
                        <input type="text" step="1" placeholder="Ingrese su latitud" 
                        name="Latitud" id="Latitud" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="telefono">Longitud</label>
                        <input type="text" step="1" placeholder="Ingrese su longitud" 
                        name="Longitud" id="Longitud" class="form-control" >
                        </div>
                    
                        <div class="form-group col-md-4">
                        <label for="telefono">Longitud</label>
                        <input type="text" step="1" placeholder="Ingrese su longitud" 
                        name="Longitud" id="Longitud" class="form-control" >
                        </div>
                    
                    </div>

                    <div class="form-group">
                        <label for="telefono">Precio</label>
                        <input type="number" step="5" placeholder="Ingrese el Precio de la Alternativa" name="costo" id="costo" class="form-control" min="0" max="1000">
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
                        <input type="file" class="form-control" id="archivo" name="archivo" multiple>      
                          <label class="custom-file-label" for="archivo">Escoje un Archivo de Imagen o Varias Imagenes</label>
                        </div>
                    </div>
        

                    <input type="submit" value="Guardar Alternativa" class="btn btn-primary">
                    <a href="?c=principal" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>


</div>



<script>
    $(document).ready(function(){
        $("#frm-nuevo").submit(function(){
            return $(this).validate();
        });
    })
</script>
