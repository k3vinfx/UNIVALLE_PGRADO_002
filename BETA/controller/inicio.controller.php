
<?php
//Se incluye el modelo donde conectará el controlador..........

require_once 'model/inicio.php';

class InicioController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
       $this->model = new inicio();

    }

    //Llamado plantilla principal
    public function Index(){
        //require_once 'view/header.php';

  
        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/footerx.php';
       // require_once 'view/footerx.php';
    }
    public function Login_Session(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //require_once 'view/header.php';
        $clienteId = $_SESSION['Cliente_Id'];
        $clienteEdad = $_SESSION['Cliente_Edad'];
        $clienteCelular = $_SESSION['Cliente_Celular'];
        $clienteSexo = $_SESSION['Cliente_Sexo'];
        $clienteEmail = $_SESSION['Cliente_Email'];
    
  
        require_once 'view/login_session/header.php';
        require_once 'view/login_session/index.php';
        require_once 'view/login_session/footer.php';
       // require_once 'view/footerx.php';
    }


    public function Categoria(){
        //require_once 'view/header.php';
        session_start();
  
     //   require_once 'view/registro/header.php';
        require_once 'view/registro/index.php';
       // require_once 'view/header.php';
       // require_once 'view/footerx.php';
    }

    public function Registrar(){
        //require_once 'view/header.php';

  
     //   require_once 'view/registro/header.php';
        require_once 'view/registro/index.php';
       // require_once 'view/header.php';
       // require_once 'view/footerx.php';
    }
    public function Login(){
        //require_once 'view/header.php';

  
       // require_once 'view/registro/header.php';
        require_once 'view/login/index.php';
       // require_once 'view/header.php';
       // require_once 'view/footerx.php';
    }

    public function LoginError(){
        //require_once 'view/header.php';

  
       // require_once 'view/registro/header.php';
        require_once 'view/login/indexLoginError.php';
       // require_once 'view/header.php';
       // require_once 'view/footerx.php';
    }

    public function LoginFaltaPagar(){
        //require_once 'view/header.php';
        session_start();
  
       // require_once 'view/registro/header.php';
        require_once 'view/cliente/preciosd.php';
       // require_once 'view/header.php';
       // require_once 'view/footerx.php';
    }

    public function GuardarPago(){
        $pvd = new inicio();

        $pvd->dato1 = $_POST['cliente_idx'];
        
        if(isset($_FILES['archivo1']) && $_FILES['archivo1']['error'] == 0){
            $archivo1 = $_FILES['archivo1'];
            $archivo=$archivo1;
            $valor = 1;
            // Código para manejar el archivo1...
        } else {
            // Código en caso de que archivo1 no se haya cargado correctamente...
      
        }
        
        if(isset($_FILES['archivo2']) && $_FILES['archivo2']['error'] == 0){
            $archivo2 = $_FILES['archivo2'];
            $archivo=$archivo2;
            $valor = 2;
            // Código para manejar el archivo2...
        } else {
            // Código en caso de que archivo2 no se haya cargado correctamente...
       
        }
        
        if(isset($_FILES['archivo3']) && $_FILES['archivo3']['error'] == 0){
            $archivo3 = $_FILES['archivo3'];
            $archivo=$archivo3;
            $valor = 3;
            // Código para manejar el archivo3...
        } else {
            // Código en caso de que archivo3 no se haya cargado correctamente...
     
        }

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
           $pvd->dato3 = $nuevaRuta;
           $pvd->dato2= $valor;

           $this->model->RegistrarpPago($pvd); 

       
        } else {
            echo json_encode([
                'error' => true,
                'message' => 'Datos no recibidos correctamente.'
            ]);
        }
    }
    

    
    public function Guardar(){
        $pvd = new inicio();
    
        // Usar filter_input para limpiar las entradas del usuario

        $pvd->dato1_nombre = filter_input(INPUT_POST, 'nombres', FILTER_SANITIZE_STRING);
        $pvd->dato2_apellidos = filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING);
        // ... hacer lo mismo para otros campos ...
   
        $pvd->dato3_pais = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
        $pvd->dato4_edad = filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_STRING);
        $pvd->dato5_celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
        $pvd->dato6_sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
        $pvd->dato7_email = filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'pass2', FILTER_SANITIZE_STRING);
        $pvd->dato8_pass2 = password_hash($password, PASSWORD_DEFAULT);
    
        $pvd->dato9_compania = filter_input(INPUT_POST, 'compania', FILTER_SANITIZE_STRING);
 
       

        $entrada1 = isset($_POST['entrada1']) ? 1 : 0;
        $pvd->dato1_entrada = $entrada1;
        $pvd->dato2_entrada = isset($_REQUEST['entrada2']) ? $_REQUEST['entrada2'] : 0;
        $pvd->dato3_entrada = isset($_REQUEST['entrada3']) ? $_REQUEST['entrada3'] : 0;
        $pvd->dato4_entrada = isset($_REQUEST['entrada4']) ? $_REQUEST['entrada4'] : 0;
        $pvd->dato5_entrada = isset($_REQUEST['entrada5']) ? $_REQUEST['entrada5'] : 0;
        $pvd->dato6_entrada = isset($_REQUEST['entrada6']) ? $_REQUEST['entrada6'] : 0;
        // ... y así sucesivamente para otros datos ...
    
        //Registro al modelo proveedor.

       
        $this->model->Registrar($pvd);
        
        $pvd->dato_id = $this->model->ObtenerCel(filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING));
        $valor = $pvd->dato_id;
            
        if ($valor !== false) {
            $clienteId = $valor->Cliente_Id;
            echo "El Cliente_Id es: " . $clienteId;
        } else {
            echo "No se encontró un registro con ese número de celular.";
        }
    
        $this->model->Registrar_Interes($pvd);
    
        header('Location: index.php?c=inicio&a=Index');
        exit(); // Siempre usa exit después de un header de redirección.
    }
    
    public function CorreoGET(){
        
                
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            
            // Verificar la acción específica
            if ($action === 'CorreoExiste') {
                // Obtener el valor enviado en la solicitud
                $valor = $_POST['valor'];
                
                // Asegurándonos de que la propiedad model esté correctamente configurada y accesible
                if(isset($this->model)) {
                    // Llamar al método CorreoExiste con el valor
                    $result = $this->model->CorreoExiste($valor);
                    
                    // Devolver los datos como JSON
                    echo json_encode($result);
                    exit; // Asegurarse de que no se envíe ninguna otra salida
                } else {
                    // Manejo de error si model no está seteado
                    echo json_encode(['error' => 'Model no está definido.']);
                }
            }
        }


       
    }


   
    public function Logeo(){
        session_start();
        // Crear una instancia de la clase inicio
        $pvd = new inicio();
        
        // Validar y sanear las entradas del usuario
        $email = filter_input(INPUT_POST, 'email_x', FILTER_SANITIZE_EMAIL);

        $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        
        // Verificar si los datos sanitizados no están vacíos o son falsos
        if (isset($_POST['email_x']) && isset($_POST['password']) ) {
            // Asignar las variables sanitizadas a los atributos del objeto $pvd
            $pvd->dato1_email = $email;
        
            // Obtener el hash almacenado en la base de datos para el usuario con el email proporcionado
            $storedHash = $this->model->ObtenerHashPorEmail($email);
            
            if ($storedHash !== false && password_verify($password, $storedHash)) {
                // La contraseña es correcta
                // Continúa con la lógica de inicio de sesión o redirige al usuario autenticado
                // ...
               
                $verActivo = $this->model->VerificarActivo($email);
                
                if ($verActivo == 1 ) {

                      $datosUsuario = $this->model->ObtenerDatosUsuarioPorEmail($email);


                    if ($datosUsuario !== false) {
                        // Almacenar los datos del usuario en la sesión
                        $_SESSION['Cliente_Id'] = $datosUsuario['Cliente_Id'];
                        $_SESSION['Cliente_Edad'] = $datosUsuario['Cliente_Edad'];
                        $_SESSION['Cliente_Celular'] = $datosUsuario['Cliente_Celular'];
                        $_SESSION['Cliente_Sexo'] = $datosUsuario['Cliente_Sexo'];
                        $_SESSION['Cliente_Email'] = $datosUsuario['Cliente_Email'];
            


                        // Redirigir al usuario autenticado a su página principal o a donde sea necesario
                       // header('Location: pagina_principal.php');
                       // exit();
                       echo '<form id="sessionForm" action="index.php?c=inicio&a=Login_Session" method="post">';
                       echo '<input type="text" name="Cliente_Id" value="' . $_SESSION['Cliente_Id'] . '">';
                       echo '<input type="hidden" name="Cliente_Edad" value="' . $_SESSION['Cliente_Edad'] . '">';
                       echo '<input type="hidden" name="Cliente_Celular" value="' . $_SESSION['Cliente_Celular'] . '">';
                       echo '<input type="hidden" name="Cliente_Sexo" value="' . $_SESSION['Cliente_Sexo'] . '">';
                       echo '<input type="text" name="Cliente_Email" value="' . $_SESSION['Cliente_Email'] . '">';
                       echo '</form>';
                       
                       // Automáticamente enviar el formulario usando JavaScript
                       echo '<script>document.getElementById("sessionForm").submit();</script>';
                       exit();

                    } else {
                        echo "No se pudieron obtener los datos del usuario.";
                    }



                    
                }else{
                    $datosUsuario = $this->model->ObtenerDatosUsuarioPorEmail($email);
                    
 
                    $_SESSION['Cliente_Id'] = $datosUsuario['Cliente_Id'];
                    $_SESSION['Cliente_Email'] = $datosUsuario['Cliente_Email'];

                    echo '<input type="text" name="Cliente_Id" value="' . $_SESSION['Cliente_Id'] . '">';
                    echo '<input type="text" name="Cliente_Email" value="' . $_SESSION['Cliente_Email'] . '">';
               

     
                    $verActivoS = $this->model->VerificarActivoPago($email);
                
                    if ($verActivoS !== false ) {
                
                        ?> 
             
             <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                       
                       document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            title: 'Verificación en Proceso',
                            text: 'Tu pago está siendo verificado, por favor espera mientras procesamos la información.',
                            icon: 'info',
                            confirmButtonText: 'Entendido'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'index.php?c=inicio&a=Index';
                            }
                        });
                    });
                    </script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

       
                    <?php


                    }else{
                        $datosUsuario = $this->model->ObtenerDatosUsuarioPorEmail($email);
                    
                        if ($datosUsuario !== false) {
                            // Almacenar los datos del usuario en la sesión
                            $_SESSION['Cliente_Id'] = $datosUsuario['Cliente_Id'];
                            $_SESSION['Cliente_Edad'] = $datosUsuario['Cliente_Edad'];
                            $_SESSION['Cliente_Celular'] = $datosUsuario['Cliente_Celular'];
                            $_SESSION['Cliente_Sexo'] = $datosUsuario['Cliente_Sexo'];
                            $_SESSION['Cliente_Email'] = $datosUsuario['Cliente_Email'];
                                 
                        header('Location: index.php?c=inicio&a=LoginFaltaPagar');
                        }else {

                        }    
 
                    



                         // VENCIO SU CUENTA
                 

                    }
                    
                }

          
            } else {
                // La contraseña es incorrecta
              //  echo "La contraseña es incorrecta.";

              header('Location: index.php?c=inicio&a=LoginError');
              
                
              ?> 

<script>

         </script>       
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


             <?php
            }
        } else {
            echo "Datos de inicio de sesión no válidos.";
        }
    }
   
}
