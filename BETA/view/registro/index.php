<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>

    body {
    
        display: grid;
        grid-template-columns: 1fr 3fr;
        
        background-color:   #fac8bb;
        font-family: 'Poppins', sans-serif;

        background-image: url('view/login/images/bg_2.jpg');
        background-size:  28% 100% ;
        background-position: left top;
        background-repeat: no-repeat;
    }

    .container {

        flex: 0 1 auto;
        grid-column: 2;
        border-radius: 20px; /* Border radius more prominent */    
        box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.5); /* Bigger shadow for a floating effect */
        border-radius: 10px;
        padding: 30px;
        max-width: 1000px;
        margin-left: 5%;
        margin-top: 2%;
        background-image: linear-gradient(to bottom right, #ececec, #fbfbfb);
    }

    
    h2 {
        color: #4F46E5;
        font-size: 28px;
        margin-bottom: 20px;
        text-align: center; 
        font-weight: 700;
    }

    .form-control {
    border: none;
    border-bottom: 1px solid #ccc;
    padding-left: 0;
    padding-right: 0;
    border-radius: 0;
    background: none; }
    .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }


    .btn-primary {
        /*...*/
        border-radius: 10px; /* Rounder buttons */
        font-weight: bold; /* Bold text on button */
        /*...*/
    }

    .btn-primary:hover {
        background-color: #3730A3;
    }

    .btn-secondary {
        background-color: #CBD5E1;
        border-radius: 10px;
        cursor: pointer;
        color: #000;
    }

    .form-submit {
        margin-top: 10px;
    }
    /* Other CSS styles... */

    /* Responsive Design */
    @media only screen and (max-width: 1200px) {
        body {
            grid-template-columns: 1fr; /* change grid to single column */
        }

        .container {
            margin-left: 15%;
        }
    }

    @media only screen and (max-width: 992px) {
        body {
            grid-template-columns: 1fr; /* change grid to single column */
        }

        .container {
            margin-left: 10%;
        }
    }

    @media only screen and (max-width: 768px) {
        body {
            grid-template-columns: 1fr; /* change grid to single column */
        }

        .container {
            padding: 20px;
            margin-left: 5%; /* reduce margin-left */
        }

        h2 {
            font-size: 24px;
        }
    }

    @media only screen and (max-width: 576px) {
        body {
            grid-template-columns: 1fr; /* change grid to single column */
        }

        .container {
            padding: 15px;
            margin-left: 0; /* remove margin-left */
            max-width: none; /* remove max-width */
        }

        h2 {
            font-size: 22px;
        }
    }


    label.required::after {
        content: '*';
        color: #FF4B5C;
        margin-left: 5px;
    }
  </style>
  
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">

                <div class="signup-img-content">
                   <h2>Regístrate ahora</h2>
                   <hr class="my-2">

                </div>
            </div>
            </br>
            <div class="signup-form">
                <form id="frm-principal-neurona" action="?c=inicio&a=GuardarPago" class="register-form" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombres" class="required">Nombres</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="apellidos" class="required">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="pais" class="required">País</label>
                                <input type="text" name="pais" id="pais" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email" class="required">Email</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="celular" class="required">Celular</label>
                                <input type="number" name="celular" id="celular" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="pass1" class="required">Contraseña</label>
                                <input type="password" name="pass1" id="pass1" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="pass2" class="required">Repita Contraseña</label>
                                <input type="password" name="pass2" id="pass2" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="edad" class="required">Edad</label>
                                <input type="text" name="edad" id="edad" class="form-control" />
                            </div>
                         
                        </div>
                        <div class="col-md-4">
        
                
                        <div class="form-group">
                                <label for="sexo"  class="fw-bold">Género</label>
                                <select name="sexo" id="sexo" class="form-select">
                                    <option value="0">Selecciona tu género</option>
                                    <option value="1">Masculino</option> 
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="compania" class="fw-bold">Visita con Compañía o Solo</label>
                                    <select name="compania" id="compania" class="form-select">
                                    <option value="0">Selecciona solo o con compañía</option>
                                    <option value="1">Solo</option> 
                                    <option value="2">En Pareja(Espos@ , Novio@)</option>
                                    <option value="3">Con Amigos</option>
                                    <option value="4">Con Familiares</option>
                                    <option value="5">Con Hijos y Sin Espos@</option>
                                    <option value="6">Con Hijos y Con Espos@</option> 
                                     <!-- Agrega más opciones aquí -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="estadia" class="fw-bold">Selecciona el tiempo que te quedarás</label>
                                <select id="estadia" name="estadia" class="form-select">
                                    <option value="0">Selecciona el tiempo de estadia </option>
                                    <option value="1">Entre 1 a 5 días</option> 
                                    <option value="2">Entre 1 a 2 semanas</option>
                                    <option value="3">Entre 3 a 4 semanas</option> 
                                    <option value="4">Entre 1 a 2 meses</option>
                                    <option value="5">Entre 2 a 3 meses</option> 
                                    <option value="6">Entre 3 a 6 meses</option>
                                    <option value="7">Entre 6 a 12 meses</option> 
                              
                                    <!-- Agrega más opciones aquí -->
                                </select>
                            </div>
                            <br>
                            <hr class="my-2">
                            <h6><strong>Selecciona al menos 3 casillas de gustos de interés que quieres conocer en La Paz</strong></h6>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada1" id="entrada1" value="1">
                                <label class="form-check-label" for="entrada1">Lugares para sacar fotografías únicas para subirlas a tus redes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada2" id="entrada2" value="2">
                                <label class="form-check-label" for="entrada2">Diversión y aventura</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada3" id="entrada3" value="3">
                                <label class="form-check-label" for="entrada3">Gastronomia Tipica y local</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada4" id="entrada4" value="4">
                                <label class="form-check-label" for="entrada4">Gastronomia Internacional al estilo PACEÑO</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada5" id="entrada5" value="5">
                                <label class="form-check-label" for="entrada5">Cultural y Historia</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada6" id="entrada6" value="6">
                                <label class="form-check-label" for="entrada6">Museos</label>
                            </div>
                        </div>
          

                        <div class="col-md-4">
                    
                             <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada8" id="entrada8" value="7">
                                <label class="form-check-label" for="entrada8">Vida Nocturna</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada9" id="entrada9" value="8">
                                <label class="form-check-label" for="entrada9">Murales de Arte Urbano  </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada10" id="entrada10" value="9">
                                <label class="form-check-label" for="entrada10">Pasajes y Calles</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada11" id="entrada11" value="10">
                                <label class="form-check-label" for="entrada11">Aretesanias Locales</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada12" id="entrada12" value="11">
                                <label class="form-check-label" for="entrada12">Musica Urbana</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada13" id="entrada13" value="12">
                                <label class="form-check-label" for="entrada13">Musica Rock</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="entrada14" id="entrada14" value="13">
                                <label class="form-check-label" for="entrada14">Musica Folcklorica</label>
                            </div>
                        



                            <!-- Agrega más casillas de verificación aquí -->
                            
                        </div>
                    </div>
    </br></br>
                    <div class="form-submit text-center">
                        <input type="submit" value="Registrar" class="btn btn-primary" id="submit" name="submit" />
                        <input type="reset" value="Reiniciar" class="btn btn-secondary" id="reset" name="reset" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() { 
        
    document.getElementById('frm-principal-neurona').addEventListener('submit', function(e){
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        var checkedCount = Array.prototype.slice.call(checkboxes).filter(x => x.checked).length;
        var pass1 = document.getElementById('pass1').value;
        var pass2 = document.getElementById('pass2').value;
      
        console.log(checkboxes);

        if (!document.getElementById('nombres').value.trim() || 
            !document.getElementById('apellidos').value.trim() ||
            !document.getElementById('pais').value.trim() ||
            !document.getElementById('email').value.trim() ||
            !document.getElementById('celular').value ||
            !document.getElementById('pass1').value.trim() ||
            !document.getElementById('pass2').value.trim() ||
            !document.getElementById('edad').value.trim()) {
         
            e.preventDefault(); // prevent form from SUBMITting
            Swal.fire('Campos Incompletos', 'Por favor, llene todos los campos', 'error');

        }
        
        var upperCaseChars = /[A-Z]/g;
        var numbers = /[0-9]/g;

        var errorMessage = "";
        // Comprobaciones de las validaciones

        if (pass1 !== pass2) {
            errorMessage = 'Las contraseñas no coinciden.';
        } 
       
         if(errorMessage !== "") {
            e.preventDefault(); // Prevenir la sumisión del formulario
            Swal.fire('Error en Contraseñas', errorMessage, 'error');
            return;
        }

        if (document.getElementById('sexo').value == 0 ||
            document.getElementById('compania').value == 0 ||
            document.getElementById('estadia').value == 0) {
            e.preventDefault(); // prevent form from SUBMITting
            Swal.fire('Selecciones Faltantes', 'Por favor, selecciona todas las opciones desplegables', 'error');
        }
        
        if(!checkedOne || checkedCount < 3){
            e.preventDefault(); // prevent form from SUBMITting
            Swal.fire('Selecciones Insuficientes', 'Por favor, selecciona al menos 3 casillas de interés', 'error');
         }
    });
});
</script>


    <!-- Agrega tus scripts personalizados aquí -->
</body>
<br><br>
</html>