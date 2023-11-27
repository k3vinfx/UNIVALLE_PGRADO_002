<?php
require_once 'model/itinerario.php';

class ItinerarioController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new itinerario();
    }

    //Llamado plantilla alternativa
    public function Index(){

        session_start();
        //require_once 'view/header.php';
        $clienteId = $_SESSION['Cliente_Id'];
        $clienteEdad = $_SESSION['Cliente_Edad'];
        $clienteCelular = $_SESSION['Cliente_Celular'];
        $clienteSexo = $_SESSION['Cliente_Sexo'];
        $clienteEmail = $_SESSION['Cliente_Email'];

        
       require_once 'view/itinerario/header.php';
       require_once 'view/itinerario/itinerario.php';
       require_once 'view/footerx.php';
    } 

    public function Crud_Aux(){
        $pvd = new itinerario();

        session_start();
        $clienteEmail = $_SESSION['Cliente_Email'];
        if(isset($_REQUEST['ver_id'])){
            $pvd = $this->model->Obtener($_REQUEST['ver_id']);
        }
        require_once 'view/categoria/header2.php';      
        require_once 'view/categoria/ver_imgmap.php';
        require_once 'view/footerx.php';
    }

    public function Crud_Aux_Itin(){
        $pvd = new itinerario();

        session_start();
        $clienteEmail = $_SESSION['Cliente_Email'];
        if(isset($_REQUEST['ver_id'])){
            $pvd = $this->model->Obtener($_REQUEST['ver_id']);
        }
        require_once 'view/itinerario/header2.php';      
        require_once 'view/categoria/ver_imgmap.php';
        require_once 'view/footerx.php';
    }



}
