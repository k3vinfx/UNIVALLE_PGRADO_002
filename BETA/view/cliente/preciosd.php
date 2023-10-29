
<style>

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
main {
    margin: 0;
    height: 100vh;
    background: radial-gradient(circle, blue, fuchsia, red);
    overflow: scroll; /* Esta línea puede estar causando el problema */
    display: flex; 
    flex-direction: column;
    align-items: center; 
    justify-content: center; 

}

@media only screen and (min-width: 300px) and (max-width: 600px) { 
    main {


        height: 330vh;
        /* Código específico para pantallas entre 601px y 1024px (ej. tabletas) */
    }
}
@media only screen and (min-width: 700px) and (max-width: 900px) { 
    main {


        height: 300vh;
        /* Código específico para pantallas entre 601px y 1024px (ej. tabletas) */
    }
}

  .custom-file-upload {
    display: inline-block;
    background: indigo;
    padding: 10px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    transition: background 0.3s;
  }

  .custom-file-upload:hover {
    background: darkindigo;
  }

  input[type="file"] {
    display: none; /* Hide the default input */
  }
</style>


<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // Asegura que la sesión esté activa

// Asegúrate de que Cliente_Id esté establecido en la sesión antes de intentar usarlo
if(isset($_SESSION['Cliente_Id'])) {
    $clienteId = $_SESSION['Cliente_Id'];
} else {
    $clienteId = '';
}
?>

<!-- HTML sigue... -->



<head>
    <meta charset="utf-8">
    <title>Precios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="view/cliente/estilo.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    
</head>


<div class="container">
<form action="?c=inicio&a=GuardarPago" method="post"  autocomplete="off"class="card-body p-2" enctype="multipart/form-data" id="fupForm">
<body class="relative font-inter antialiased">
<input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo htmlspecialchars($clienteId); ?>">
    <main class="relative min-h-screen flex flex-col justify-center bg-slate-50 overflow-hidden">


        <div class="w-full max-w-6xl mx-auto px-1 md:px-1 py-21">

            <!-- Pricing table component -->
            <div x-data="{ isAnnual: true }">
            
                <!-- Pricing toggle -->
             
            
                <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none">
            
                    <!-- Pricing tab 1 -->
                    <div class="h-full pricing-tab-1">                                
                        <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                            <div class="mb-5">
                                <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">x 1 MES</div>
                                <div class="inline-flex items-baseline mb-2">
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">Bs.</span>
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '200' : '35'"></span>
                                    <span class="text-slate-500 font-medium">/mes</span>
                                </div>
                                <div class="text-sm text-slate-500 mb-5">Sabemos que existen mas recomendaciones, pero con las nuestras son mas que suficientes</div>
                
                                <div class="form-group">
                                       
                                 <label for="archivo1" class="custom-file-upload">
                                     Adquiere el Plan Subiendo la Captura del Pago 
                                    </label>
                                    <input type="file" id="archivo1" name="archivo1" multiple>
                                    <p id="file-name1">Ningún archivo seleccionado</p>
                                </div>

                            </div>
                            <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">incluye:</div>
                            <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Alternativas Precisas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>8 diferentes categorias de recomendaciones turisticas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Remendaciones con Reseñas de los usuarios</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>100 diferentes recomendaciones de alternativas turisticas</span>
                                </li>
                            </ul>
                            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Registrar"/>
                        </div>
                    </div>

                    <!-- Pricing tab 2 -->
                    <div class="darkblue h-full pricing-tab-2">
                        <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                            <div class="absolute top-0 right-0 mr-6 -mt-4">
                                <div class="inline-flex items-center text-xs font-semibold py-1.5 px-3 bg-emerald-500 text-white rounded-full shadow-sm shadow-slate-950/5">El Mas Popular</div>
                            </div>
                            <div class="mb-5">
                                <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">x 3 MESES</div>
                                <div class="inline-flex items-baseline mb-2">
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">Bs.</span>
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '500' : '55'"></span>
                                    <span class="text-slate-500 font-medium">/mes</span>
                                </div>
                                <div class="text-sm text-slate-500 mb-5">Sabemos que existen mas recomendaciones, pero con las nuestras son mas que suficientes</div>
                                <div class="form-group">
                                       
                                       <label for="archivo2" class="custom-file-upload">
                                       Adquiere el Plan Subiendo la Captura del Pago 
                                          </label>
                                          <input type="file" id="archivo2" name="archivo2" multiple>
                                          <p id="file-name2">Ningún archivo seleccionado</p>
                                      </div>
                            </div>
                            <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">incluye:</div>
                            <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Alternativas Precisas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>8 diferentes categorias de recomendaciones turisticas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Remendaciones con Reseñas de los usuarios</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>100 diferentes recomendaciones de alternativas turisticas</span>
                                </li>
                               
                            </ul>
                            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Registrar"/>
                        </div>
                    

                    </div>

                    <!-- Pricing tab 3 -->
                    <div class="h-full pricing-tab-3">
                        <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                            <div class="mb-5">
                                <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">x 6 MESES</div>
                                <div class="inline-flex items-baseline mb-2">
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">Bs.</span>
                                    <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '700' : '85'"></span>
                                    <span class="text-slate-500 font-medium">/mes</span>
                                </div>
                                <div class="text-sm text-slate-500 mb-5">Sabemos que existen mas recomendaciones, pero con las nuestras son mas que suficientes</div>
                                      <div class="form-group">
                                       
                                       <label for="archivo3" class="custom-file-upload">
                                       Adquiere el Plan Subiendo la Captura del Pago 
                                          </label>
                                          <input type="file" id="archivo3" name="archivo3" multiple>
                                          <p id="file-name3">Ningún archivo seleccionado</p>
                                      </div>
                            </div>
                            <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">incluye:</div>
                            <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Alternativas Precisas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>8 diferentes categorias de recomendaciones turisticas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Remendaciones con Reseñas de los usuarios</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>100 diferentes recomendaciones de alternativas turisticas</span>
              
                                </li>
                
                            </ul>
                            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="Registrar"/>
                        </div>
                     
                    </div>
    
                </div>
              
            </div>
            <!-- End: Pricing table component -->


           </div>
    </main>

    </body>
    <!-- Banner with links -->
    </form> 
    </div>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.getElementById('archivo1').addEventListener('change', function() {
    const files = this.files;
    const fileNameElement = document.getElementById('file-name1');

    if (files.length > 1) {
      fileNameElement.innerText = `${files.length} archivos seleccionados`;
    } else if (files.length === 1) {
      fileNameElement.innerText = files[0].name;
      $("#archivo2").prop("disabled", true);
      $("#archivo3").prop("disabled", true);
    } else {
      fileNameElement.innerText = 'Ningún archivo seleccionado';
    }
  });
  document.getElementById('archivo2').addEventListener('change', function() {
    const files = this.files;
    const fileNameElement = document.getElementById('file-name2');

    if (files.length > 1) {
      fileNameElement.innerText = `${files.length} archivos seleccionados`;
    } else if (files.length === 1) {
      fileNameElement.innerText = files[0].name;
      $("#archivo1").prop("disabled", true);
      $("#archivo3").prop("disabled", true);
    } else {
      fileNameElement.innerText = 'Ningún archivo seleccionado';
    }
  });
  document.getElementById('archivo3').addEventListener('change', function() {
    const files = this.files;
    const fileNameElement = document.getElementById('file-name3');

    if (files.length > 1) {
      fileNameElement.innerText = `${files.length} archivos seleccionados`;
    } else if (files.length === 1) {
      fileNameElement.innerText = files[0].name;

      $("#archivo1").prop("disabled", true);
      $("#archivo2").prop("disabled", true);

    } else {
      fileNameElement.innerText = 'Ningún archivo seleccionado';
    }
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {

    $("#fupForm").on("submit", function (e) {
        // Evita que el formulario se envíe de la manera predeterminada
        e.preventDefault();
        
        // Haz algo antes de enviar el formulario, como validación o mostrar un loader...

        // Usar AJAX para enviar el formulario sin recargar la página
        $.ajax({
            url: $(this).attr('action'), // URL del servidor que manejará la petición
            type: $(this).attr('method'), // Método de envío del formulario (usualmente POST)
            data: new FormData(this), // Datos del formulario
            processData: false,
            contentType: false,
            success: function(data) {
                // Tu lógica de éxito aquí (mostrar mensaje, redirigir, etc.)
                console.log('Upload successful!', data);
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
            },
            error: function(xhr, status, error) {
                // Tu lógica de error aquí
                console.log('Upload failed!', xhr, status, error);
            }
        });
    });
});
</script>
