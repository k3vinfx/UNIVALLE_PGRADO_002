<?php
//Se incluye el modelo donde conectará el controlador.

require_once 'model/imgmap.php';

class ImgMap{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
       $this->model = new imgmap();

    }

    //Llamado plantilla principal
    public function Index(){
        //require_once 'view/header.php';

  
        require_once 'view/categoria/header.php';
       // require_once 'view/categoria/menu.php';
        require_once 'view/imgmap/ver.php';
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