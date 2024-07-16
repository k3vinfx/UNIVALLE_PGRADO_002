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

    
    //Llamado plantilla principal Gatronomia 
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

    //Llamado plantilla principal Pub Bares 
    public function Index_2(){
        session_start();
        $clienteId = $_SESSION['Cliente_Id'];
        $clienteEdad = $_SESSION['Cliente_Edad'];
        $clienteCelular = $_SESSION['Cliente_Celular'];
        $clienteSexo = $_SESSION['Cliente_Sexo'];
        $clienteEmail = $_SESSION['Cliente_Email'];
   
        require_once 'view/categoria/header.php';
        require_once 'view/categoria/cat_pubBaresTop.php';
        require_once 'view/categoria/footerx.php';
    }

    public function Index_por_busqueda_RNN(){
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
       
        require_once 'view/categoria/cat_gastronomia_busqueda.php';


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


 /*   public function NuevoPreparado(){
        $pvd = new principal();
        $recomendaciones = [];
        if(isset($_REQUEST['X'])){
            $recomendaciones = $this->model->MenuTipoRecomendacionGet($_REQUEST['X']);
        }
        echo json_encode($recomendaciones);
    }*/


    // armado de esqueleto para luego dar la respuesta
    public function Solicitud_Busqueda_Input(){
        $pvd = new categoria();
        $resultados = [];

         $email = trim(filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_STRING));
      //  var_dump($email); // Solo para depuración
        $clienteSexo = $this->model->VerificarSexo($email);
        $clienteEdad = $this->model->VerificarEdad($email);
        $pvd->compania = filter_input(INPUT_POST, 'dato1_compania', FILTER_SANITIZE_STRING);
        $pvd->precio = filter_input(INPUT_POST, 'dato2_precio', FILTER_SANITIZE_STRING);
        $pvd->horario = filter_input(INPUT_POST, 'dato3_horario', FILTER_SANITIZE_STRING);
        $pvd->edad = $this->model->VerificarEdad($email);  
        $pvd->sexo = $this->model->VerificarSexo($email);

        // Usar filter_input para limpiar las entradas del usuario
           //Registro al modelo proveedor.
      
        $resultados = $this->model->Buscar_solicitud_cliente($pvd);


       // $resultados= ($verSexo);
       echo json_encode($resultados);
      // echo json_encode(['Cliente_Id' => $clienteId]);

     //  echo json_encode($pvd);

    }

    public function ObtenerRecomendacionPorID(){
        $pvd = new categoria();
        $resultados2 = [];

          $aux = (filter_input(INPUT_POST, 'aux', FILTER_SANITIZE_STRING));
          $resultados2 = $this->model->ObtenerRecomendacionPorID($aux);

      // echo json_encode($resultados2);


   
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