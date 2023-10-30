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

<!-- Luego SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#email1').on('change', function(){
         
            var valorSeleccionado = $("#email1").val();
         
            $.ajax({
                url: '?c=inicio&a=CorreoGET',
                method: 'POST',
                data: {
                    
                    action: 'CorreoExiste',
                    valor: valorSeleccionado
                },
                dataType: 'json',
                success: function (data) {
                    console.log('Respuesta del servidorss:', data);
                    $.each(data, function (key, value) {
                        if (value.Cliente_Id!=null){
                            Swal.fire('Correo Electronico' , 'Error, usuario ya existe registrado con este correo intete otro porfavor', 'error');
                          //$('#email1').text('');
                            $("#email1").val('');
                        }else{
                      
                        }
                  
                    });
             
                },
                error: function (xhr, status, error) {     
                console.log('Ha ocurrido un error:');
                console.log('Status:', status);
                console.log('Error:', error);
                console.log('XHR:', xhr);
                console.log('Código de estado HTTP:', xhr.status);
                console.log('Texto de estado HTTP:', xhr.statusText);
                console.log('Respuesta del servidor:', xhr.responseText);
               }   
            });

     
    });

    const selectEdad = document.getElementById('edad');

        for(let i = 15; i <= 90; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.text = i + ' años';
            selectEdad.appendChild(option);
        }

        const paises = [
        "Afganistán",
        "Albania",
        "Alemania",
        "Andorra",
        "Angola",
        "Antigua y Barbuda",
        "Arabia Saudita / Arabia Saudí",
        "Argelia",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaiyán",
        "Bahamas",
        "Bangladés",
        "Barbados",
        "Baréin",
        "Bélgica",
        "Belice",
        "Bielorrusia",
        "Benín",
        "Birmania / Myanmar",
        "Bolivia",
        "Bosnia y Herzegovina / Bosnia-Herzegovina",
        "Botsuana",
        "Brasil",
        "Brunei Darussalam",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Bután",
        "Cabo Verde",
        "Camboya",
        "Camerún",
        "Canadá",
        "Catar",
        "República Centroafricana",
        "Chad",
        "República Checa / Chequia",
        "Chile",
        "China",
        "Chipre",
        "Colombia",
        "Comoras",
        "República del Congo",
        "República Democrática del Congo",
        "Corea del Norte",
        "Corea del Sur",
        "Costa de Marfil",
        "Costa Rica",
        "Croacia",
        "Cuba",
        "Dinamarca",
        "Dominica",
        "República Dominicana",
        "Ecuador",
        "Egipto",
        "El Salvador",
        "Emiratos Árabes Unidos",
        "Eritrea",
        "Eslovaquia",
        "Eslovenia",
        "España",
        "Estados Unidos",
        "Estonia",
        "Etiopía",
        "Filipinas",
        "Finlandia",
        "Fiyi",
        "Francia",
        "Gabón",
        "Gambia",
        "Georgia",
        "Ghana",
        "Granada",
        "Grecia",
        "Guatemala",
        "Guinea",
        "Guinea-Bisáu",
        "Guinea Ecuatorial",
        "Guyana",
        "Haití",
        "Honduras",
        "Hungría",
        "India",
        "Indonesia",
        "Irak",
        "Irán",
        "Irlanda",
        "Islandia",
        "Israel",
        "Italia",
        "Jamaica",
        "Japón",
        "Jordania",
        "Kazajistán",
        "Kenia",
        "Kirguistán",
        "Kiribati",
        "Kuwait",
        "Laos",
        "Lesoto",
        "Letonia",
        "Líbano",
        "Liberia",
        "Libia",
        "Liechtenstein",
        "Lituania",
        "Luxemburgo",
        "Macedonia del Norte",
        "Madagascar",
        "Malasia",
        "Malaui",
        "Maldivas",
        "Mali / Malí",
        "Malta",
        "Marruecos",
        "Islas Marshall",
        "Mauricio",
        "Mauritania",
        "México",
        "Micronesia",
        "Moldavia",
        "Mónaco",
        "Mongolia",
        "Montenegro",
        "Mozambique",
        "Namibia",
        "Nauru",
        "Nepal",
        "Nicaragua",
        "Níger",
        "Nigeria",
        "Noruega",
        "Nueva Zelanda / Nueva Zelandia",
        "Omán",
        "Países Bajos",
        "Pakistán",
        "Palaos",
        "Palestina",
        "Panamá",
        "Papúa Nueva Guinea",
        "Paraguay",
        "Perú",
        "Polonia",
        "Portugal",
        "Reino Unido",
        "Ruanda",
        "Rumania / Rumanía",
        "Rusia",
        "Islas Salomón",
        "Samoa",
        "San Cristóbal y Nieves",
        "San Marino",
        "San Vicente y las Granadinas",
        "Santa Lucía",
        "Santo Tomé y Príncipe",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leona",
        "Singapur",
        "Siria",
        "Somalia",
        "Sri Lanka",
        "Suazilandia / Esuatini",
        "Sudáfrica",
        "Sudán",
        "Sudán del Sur",
        "Suecia",
        "Suiza",
        "Surinam",
        "Tailandia",
        "Tanzania",
        "Tayikistán",
        "Timor Oriental",
        "Togo",
        "Tonga",
        "Trinidad y Tobago",
        "Túnez",
        "Turkmenistán",
        "Turquía",
        "Tuvalu",
        "Ucrania",
        "Uganda",
        "Uruguay",
        "Uzbekistán",
        "Vanuatu",
        "Ciudad del Vaticano",
        "Venezuela",
        "Vietnam",
        "Yemen",
        "Yibuti",
        "Zambia",
        "Zimbabue",
        // ... (puedes agregar todos los países que necesites aquí)
    ];

    const selectPais = document.getElementById('pais');

    for(let i = 0; i < paises.length; i++) {
        const option = document.createElement('option');
        option.value = paises[i];
        option.text = paises[i];
        selectPais.appendChild(option);
    }

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
            !document.getElementById('email1').value.trim() ||
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
                <form id="frm-principal-neurona" action="?c=inicio&a=Guardar" class="register-form" method="post">
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
                                <select name="pais" id="pais" class="form-select">
                                    <option value="0">Selecciona su Pais</option>
                                    <!-- Las opciones de edad se generarán dinámicamente con JavaScript -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label  class="required">Email</label>
                                <input type="email" name="email1" id="email1" class="form-control" />
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
                                <select name="edad" id="edad" class="form-select">
                                    <option value="0">Selecciona tu edad</option>
                                    <!-- Las opciones de edad se generarán dinámicamente con JavaScript -->
                                </select>

                              
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
                          
                                                        <br>                            <hr class="my-2">
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


    <!-- Agrega tus scripts personalizados aquí -->
</body>
<br><br>
</html>