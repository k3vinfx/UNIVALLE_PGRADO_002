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
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card-header bg-primary text-white">Editar Alternativa..</div>
            <div class="card">
                <form id="frm-editar" action="?c=alternativa&a=Editar" method="post" enctype="multipart/form-data" class="card-body p-2" autocomplete="off">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    
                    <input type="hidden" name="id_recomendacion" value="<?php echo $pvd->ID; ?>" />

                    <div class="form-group">
                        <label for="nombre">Nombre de la Alternativa</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $pvd->TITULO; ?>" class="form-control" placeholder="Ingresa el Nombre de la Alternativa">
                    </div>

                    <!-- Ubicación, Categoría, Precio y Descripción -->
                    <div class="form-row">
                        <!-- Más campos de formulario aquí... -->
                    </div>

                    <!-- Mostrar imágenes actuales -->
                    <div class="form-group">
                        <label>Imágenes Actuales:</label>
                        <div class="row">
                            <?php if (!empty($pvd->archivo1)): ?>
                                <div class="col-md-4">
                                    <img src="<?php echo $pvd->archivo1; ?>" alt="Imagen 1" class="img-thumbnail">
                                    <input type="checkbox" name="eliminar_archivo1" value="1"> Eliminar
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($pvd->archivo2)): ?>
                                <div class="col-md-4">
                                    <img src="<?php echo $pvd->archivo2; ?>" alt="Imagen 2" class="img-thumbnail">
                                    <input type="checkbox" name="eliminar_archivo2" value="1"> Eliminar
                                </div>
                            <?php endif; ?>
                            <!-- Repite el bloque para las demás imágenes -->
                        </div>
                    </div>

                    <!-- Cargar nuevas imágenes -->
                    <div class="form-group">
                        <label for="archivo" class="control-label">Subir Nuevas Imágenes (Opcional)</label>
                        <input type="file" class="form-control" id="archivo" name="archivo[]" multiple>
                        <label class="custom-file-label" for="archivo">Escoja un Archivo de Imagen o Varias Imágenes</label>
                    </div>

                    <input type="submit" value="Guardar Cambios" class="btn btn-primary">
                    <a href="?c=alternativa" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#frm-editar").submit(function(){
        return $(this).validate();
    });
});
</script>

<br>
<script>
    $(document).ready(function(){
        $("#frm-editar").submit(function(){
            return $(this).validate();
        });
    })
</script>
