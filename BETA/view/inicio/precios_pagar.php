
<style>
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


        height: 250vh;
        /* Código específico para pantallas entre 601px y 1024px (ej. tabletas) */
    }
}
@media only screen and (min-width: 700px) and (max-width: 900px) { 
    main {


        height: 240vh;
        /* Código específico para pantallas entre 601px y 1024px (ej. tabletas) */
    }
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Precios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
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


<body class="relative font-inter antialiased">

    <main class="relative min-h-screen flex flex-col justify-center bg-slate-50 overflow-hidden">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">

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
                                <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="../../?c=inicio&a=Registrar">
                                       Adquiere el Plan
                                </a>
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
                        </div>
                    </div>

                    <!-- Pricing tab 2 -->
                    <div class="dark h-full pricing-tab-2">
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
                                <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="../../?c=inicio&a=Registrar">
                                  Adquiere el Plan
                                </a>
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
                                <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="../../?c=inicio&a=Registrar">
                                  Adquiere el Plan
                                </a>
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
                        </div>
                    </div>
            
                </div>
            
            </div>
            <!-- End: Pricing table component -->

        </div>
    </main>



    <!-- Banner with links -->
    
</body>

</html>