<?php 

    $conexion = new mysqli_connect('mysql:host=193.203.175.91; dbname=u838621046_sis_neurona;charset=utf8', 'u838621046_admin', 'dellFX007');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>