<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ishaveha - Login</title>
    
    <!-- Tailwind script Link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body>
  <div class="flex min-h-screen items-center justify-center">


<div class="min-h-1/2 bg-indigo-100   rounded-2xl">

    <div class="mx-4 sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-16 font-semibold text-gray-500 flex-col">
        <img src="./img/logo.png" alt="" class="w-32 h-auto">

        <h1 class="font-bold text-2xl text-[#002D74]">Certificaciones</h1>
        <?php
        include 'model/conexion.php';
        include 'Controlador/controlador_certificacion.php';
        ?>
        <p class="text-xs mt-4 text-[#002D74]">Si usted cuenta con alguna certificación ingrese su mátricula</p>
        <form method='post' class="flex flex-col gap-4">
          <input class="w-full p-2  rounded-md   focus:border-blue-700"
              placeholder="Matricula" type="text" name="code">
          <button class="w-full p-2  bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300"
              type="submit" name='btnIngresar' value="Ingresar">Ingresar</button>
        </form>
            
        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200 item-center justify-center">
      <div class="space-x-2 flex text-sm">
        <label>
          <input class="sr-only peer" name="size" type="radio" value="xs" />
          <div class="w-5 h-5 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://cdn-icons-png.flaticon.com/512/20/20673.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="s" />
          <div class="w-5 h-5 rounded-full flex items-center justify-center text-slate-700">
            <img src="https://cdn-icons-png.flaticon.com/512/87/87390.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="m" />
          <div class="w-5 h-5 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://www.pngplay.com/wp-content/uploads/12/WhatsApp-Logo-PNG-Background.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="xl" />
          <div class="w-5 h-5 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://cdn-icons-png.flaticon.com/512/48/48968.png" alt="">
          </div>
        </label>
      </div>
    </div>
      <div class="mt-3 text-center text-xs flex justify-between items-center text-[#002D74]">
          <p>Derechos Reservados ISHAVEHA Certificadora y Capacitadora Profesional S.A. de C.V.</p>
      </div>
    </div>


</div>

</div>

    <!-- Modal toggle -->

    <!-- Main modal -->
    <div id="default-modal" data-modal-show="true" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                        PackPlus
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                    Base de datos para certificaciones internacionales: Constancia Certificada, Certificado y/o Diploma Certificado.

                    <br>
                    <br>

                    No te dejes sorprender, este registro no incluye Título, ID (cédula laboral), Kardex (tira de materias), ni DC3 (constancia STPS).
                    </p>
                    <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                        
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-toggle="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
  </body>
</html>