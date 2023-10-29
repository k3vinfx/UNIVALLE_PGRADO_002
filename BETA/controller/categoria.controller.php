<?php
//Se incluye el modelo donde conectará el controlador.

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

}