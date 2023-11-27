<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'controller/categoria.controller.php';

require_once 'model/categoria.php';

class CategoriaController{


    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
       $this->model = new categoria();

    }

    
    //Llamado plantilla principal
    public function Index_1(){
        //require_once 'view/header.php';
        session_start();
        //require_once 'view/header.php';
        $clienteId = $_SESSION['Cliente_Id'];
        $clienteEdad = $_SESSION['Cliente_Edad'];
        $clienteCelular = $_SESSION['Cliente_Celular'];
        $clienteSexo = $_SESSION['Cliente_Sexo'];
        $clienteEmail = $_SESSION['Cliente_Email'];
  
        require_once 'view/categoria/header.php';
       // require_once 'view/categoria/menu.php';
       
        require_once 'view/categoria/cat_gastronomiaTop.php';


        require_once 'view/categoria/footerx.php';
      //  require_once 'view/footerx.php';
       // require_once 'view/footerx.php';
    }

    public function Index1(){
        //require_once 'view/header.php';

        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/login_session/footerx.php';
       // require_once 'view/footerx.php';
    }

    public function Crud_Aux(){
        $pvd = new categoria();

        session_start();
        $clienteEmail = $_SESSION['Cliente_Email'];
        if(isset($_REQUEST['ver_id'])){
            $pvd = $this->model->Obtener($_REQUEST['ver_id']);
        }
        require_once 'view/categoria/header2.php';      
        require_once 'view/categoria/ver_imgmap.php';
        require_once 'view/footerx.php';
    }


    public function Crud_Aux_Registrar(){
        $pvd = new categoria();
   

        $email = filter_input(INPUT_POST, 'idEmail', FILTER_SANITIZE_STRING);
        // Usar filter_input para limpiar las entradas del usuario
        $verActivo = $this->model->VerificarEmail($email);

        $pvd->dato1 = filter_input(INPUT_POST, 'idProducto', FILTER_SANITIZE_STRING);
        $pvd->dato2 = $verActivo;

    
        //Registro al modelo proveedor.

       
        $this->model->RegistrarItinerario($pvd);


    }
    public function Crud_Aux_Buscar_Balancear(){
        $pvd = new categoria();
   

        $email = filter_input(INPUT_POST, 'dato_entrada1', FILTER_SANITIZE_STRING);
        // Usar filter_input para limpiar las entradas del usuario
        $verActivo = $this->model->VerificarEmail($email);

        $pvd->dato1 = filter_input(INPUT_POST, 'idProducto', FILTER_SANITIZE_STRING);
        $pvd->dato2 = $verActivo;

    
        //Registro al modelo proveedor.

       
        $this->model->RegistrarItinerario($pvd);


    }



}