 <!-- Begin Page Content -->


 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-0 text-gray-800">Itinerario</h1>

</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
<div class="row">

<div class="col-lg-12 mx-auto">


      <!-- Custom content-->
      <?php foreach($this->model->MenuLista1() as $r): ?>

      <div class="container mt-10 mb-8">
          <div class="d-flex justify-content-center row">
              <div class="col-md-12">
                  <div class="row p-2 bg-white border rounded mt-2">
                      <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $r->CARGA1; ?>" alt="Imagen no disponible" width="250" ></div>
                      <div class="col-md-6 mt-1">

                      <!-- ANALISIS DE IA -->

                              <h5>ID: <?php echo $r->ID; ?>/<?php echo $r->TITULO; ?></h5>
                              <div class="d-flex flex-row">
                                  <div class="ratings mr-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></div><span>Calificación</span>
                              </div>
                              <div class="mt-1 mb-1 spec-1"><span>Descripción</span><span class="dot"></span></div>
                              <p class="text-justify para mb-2">
                              <?php echo $r->DESCRIPCION; ?> <br><br>
                              </p> 
                              </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                              <div class="d-flex flex-row align-items-center">
                                  <h4 class="mr-1">Bs <?php echo $r->COSTO; ?>.00</h4>
                              </div>
                              <h6 class="text-success">Gastos minimo en el lugar</h6>
                              <div class="d-flex flex-column mt-4">
                         
                              <button data-toggle="modal" data-target="#modalCalificacion">Califica tu Visita</button>
                              <a href="?c=itinerario&a=Crud_Aux_Itin&ver_id=<?php echo $r->ID; ?>"class="btn btn-danger btn-sm mt-2"><i class='fas fa-edit'></i> Ver Mapa y Imagenes</a>         
   
                            </div>

                            <div class="modal fade" id="modalCalificacion" tabindex="-1" role="dialog" aria-labelledby="modalCalificacionLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalCalificacionLabel">Califica tu Visita</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- Aquí puedes poner tu formulario de calificación -->
                                  <form id="formCalificacion">

                                  <div class="form-group">
                                  <label for="validationCustom04" class="form-label">Cantidad de Estrellas</label>
                                  <select class="form-control" id="validationCustom04" required>
                                    <option selected disabled value="">Cuantas estrellas nos das...</option>
                                    <option value="1">&#9733; 1 Estrella</option>
                                    <option value="2">&#9733;&#9733; 2 Estrellas</option>
                                    <option value="3">&#9733;&#9733;&#9733; 3 Estrellas</option>
                                    <option value="4">&#9733;&#9733;&#9733;&#9733; 4 Estrellas</option>
                                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; 5 Estrellas</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid state.
                                  </div>
                                </div>


                                    <!--   <div class="form-group">
                                      <label for="comentarios">Comentarios:</label>
                                      <textarea class="form-control" id="comentarios" rows="3"></textarea>
                                    </div>-->

                                    
                                    <!-- Aquí puedes agregar campos de calificación, como estrellas o números -->
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <button type="button" class="btn btn-primary" onclick="enviarCalificacion()">Enviar Calificación</button>
                                </div>
                              </div>
                            </div>
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


<script>
$(document).ready(function(){
    $("#frm-nueva-neurona").submit(function(){
        return $(this).validate();
    });
})
</script>

