<!-- Begin Page Content -->


<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-6">
		<h1 class="h3 mb-0 text-gray-800">RNN</h1>
		<a href="?c=principal&a=Nuevo" class="btn btn-primary">Nuevo</a>
	</div>
    
	<div class="row">
		<div class="col-lg-12">

			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">

                    <tr>
                        <th >Código Nodo</th>
                        <th >Nombre del Nodo</th>
                        <th >Atractivo</th>
                        <th >Compañia</th>
                        <th >Horario</th>
                        <th >Edad</th>
                        <th >Costo</th>
                        <th >Entradado</th>
                        <th >Entrenar</th>
              
                        <th >Acciones del Nodo</th>
                
                    </tr>
                </thead>
                <tbody>

    <?php foreach($this->model->MenuLista() as $r): ?>
        <tr>
            <td><?php echo $r->Neurona_Id; ?></td>
            <td><?php echo $r->Neurona_Nombre; ?></td>
            <td><?php echo $r->Nombre_Recomendacion; ?></td>
            <td><?php echo $r->Cantidad_Personas; ?></td>
            <td><?php echo $r->Horario; ?></td>
            <td><?php echo $r->Edad; ?></td>
            <td><?php echo $r->Costo; ?></td>
        
             <td><?php if ($r->Entrenada == 1) {
                echo "Entrenado";
            } else {
                echo "No Entrenado";
            }?></td>
            <td>
                <a href="?c=principal&a=Crud_Aux&Neurona_Id=<?php echo $r->Neurona_Id; ?>"class="btn btn-success"><i class='fas fa-edit'></i>Entrenar / Editar</a>         
            </td>

            <td>
                <a href="?c=principal&a=Crud&Neurona_Id=<?php echo $r->Neurona_Id; ?>"class="btn btn-success"><i class='fas fa-edit'></i></a>
         
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->Neurona_Id; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
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

