<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Los mejores 10 lugares</h1>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table">
              <thead class="thead-dark">
                <tr>
                  <th>Código Nodo</th>
                  <th>Nombre del Nodo</th>
                  <th>Atractivo</th>
                  <th>Compañía</th>
                  <th>Horario</th>

                  <th>Acciones del Nodo</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->MenuLista() as $r): ?>
                  <tr>
                    <td><?php echo $r->ID; ?></td>
                    <td><?php echo $r->TITULO; ?></td>
                    <td><?php echo $r->categorias; ?></td>
                    <td><?php echo $r->ESTADO; ?></td>
                    <td><?php echo $r->FECHA; ?></td>
                    <td>
                      <a href="?c=principal&a=Crud_Aux&Neurona_Id=<?php echo $r->Neurona_Id; ?>" class="btn btn-success"><i class='fas fa-edit'></i>Registrar</a>
                    </td>
              
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
