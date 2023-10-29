<?php
require_once 'model/alternativa.php';

class AlternativaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new alternativa();
    }

    //Llamado plantilla alternativa
    public function Index(){
       require_once 'view/alternativa/header.php';
       require_once 'view/alternativa/alternativa.php';
       require_once 'view/footerx.php';
    } 
    public function NuevoEntrenamiento(){
        $pvd = new alternativa();

        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/alternativa-entrenamiento.php';
        require_once 'view/footerx.php';
    }



    public function Entrenar(){
        $pvd = new alternativa();

        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/entrenar.php';
        require_once 'view/footerx.php';
    }

    public function Crud(){
        $pvd = new alternativa();

        if(isset($_REQUEST['Recomendacion_id'])){
            $pvd = $this->model->ObtenerX($_REQUEST['Recomendacion_id']);
        }
        require_once 'view/alternativa/header.php';      
        require_once 'view/alternativa/editar.php';
        require_once 'view/footerx.php';
    }
    public function Crud_Aux(){
        $pvd = new alternativa();

        if(isset($_REQUEST['Neurona_Id'])){
            $pvd = $this->model->Obtener($_REQUEST['Neurona_Id']);
        }
        require_once 'view/alternativa/header.php';      
        require_once 'view/alternativa/alternativa-editar-entrenamiento.php';
        require_once 'view/footerx.php';
    }

    public function NuevoIN(){
        $pvd = new alternativa();
        $alert = '<div class="alert alert-primary" role="alert">
                         Registrado
                    </div>';
        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/nuevo.php';
        require_once 'view/footerx.php';
    }

    public function Nuevo(){
        $pvd = new alternativa();
      
        require_once 'view/alternativa/header.php';
        require_once 'view/alternativa/nuevo.php';
        require_once 'view/footerx.php';
    }


    public function Guardar(){

        $pvd = new alternativa();

        $archivo = $_FILES['archivo'];

        // Verifica si se subió correctamente el archivo
        if ($archivo['error'] === UPLOAD_ERR_OK) {
            // Accede a la información del archivo
            $nombreArchivo = $archivo['name'];
            $tipoArchivo = $archivo['type'];
            $tamanioArchivo = $archivo['size'];
            $rutaTemporal = $archivo['tmp_name'];

            // Haz lo que necesites con el archivo, como moverlo a una ubicación deseada
            // Por ejemplo:
            $nuevaRuta = "img/" . $nombreArchivo;
            move_uploaded_file($rutaTemporal, $nuevaRuta);

            // Asigna la ruta del archivo a tu objeto o modelo
            $pvd->archivo = $nuevaRuta;
        } else {
            // Manejar errores de carga de archivos si es necesario
            echo "Error al subir el archivo.";
        }

        //Captura de los datos del formulario (vista).
        $pvd->titulo = $_REQUEST['titulo'];
        $pvd->ubicacion = $_REQUEST['ubicacion'];
        $pvd->categoria = $_REQUEST['categoria'];
        $pvd->costo = $_REQUEST['costo'];
        $pvd->descripcion = $_REQUEST['descripcion'];
        $pvd->estado = $_REQUEST['estado'];
        $pvd->archivo = $nuevaRuta;


        //Registro al modelo proveedor.
        $this->model->Registrar($pvd);
     
        header('Location: index.php?c=alternativa&a=NuevoIN');
        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
       
    }


    public function Editar(){
        $pvd = new alternativa();
        $pvd->valor_id = $_REQUEST['id_recomendacion'];
        $pvd->valor_1 = $_REQUEST['nombre'];
        $pvd->valor_2 = $_REQUEST['ubicacion'];
        $pvd->valor_3 = $_REQUEST['categoria'];
        $pvd->valor_4 = $_REQUEST['costo'];
        $pvd->valor_5 = $_REQUEST['descripcion'];
        $pvd->valor_6 = $_REQUEST['archivo'];
        $pvd->valor_7 = $_REQUEST['estado'];
     

        $this->model->Actualizar($pvd);

        header('Location: index.php?c=alternativa');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Recomendacion_id']);
        header('Location: index.php?c=alternativa');
        $alert = '<div class="alert alert-danger" role="alert">
                         Eliminado
                    </div>';
    }
}
