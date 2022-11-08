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
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
  <!-- login container -->
  <div class="bg-indigo-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">
      <h2 class="font-bold text-2xl text-[#002D74]">Pack Plus</h2>
      <?php
        include 'model/conexion.php';
        include 'Controlador/controlador_login.php';
      ?>
      <p class="text-xs mt-4 text-[#002D74]">Si usted cuenta con Pack Plus ingrese su mátricula</p>

      <form method='post' class="flex flex-col gap-4">
      
        <input class="p-2 mt-8 rounded-xl border" type="text" name="code" placeholder="Mátricula">
        <button name='btnIngresar' class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300" type="submit" value="Ingresar">Ingresar</button>
      </form>

      <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
        <hr class="border-gray-400">
        <p class="text-center text-sm"></p>
        <hr class="border-gray-400">
      </div>

      <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
      <div class="space-x-2 flex text-sm">
        <label>
          <input class="sr-only peer" name="size" type="radio" value="xs" />
          <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/768px-Facebook_Logo_%282019%29.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="s" />
          <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="m" />
          <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://www.freepnglogos.com/uploads/whatsapp-logo-png-hd-2.png" alt="">
          </div>
        </label>
        <label>
          <input class="sr-only peer" name="size" type="radio" value="xl" />
          <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt="">
          </div>
        </label>
      </div>
    </div>

      <div class="mt-3 text-center text-xs flex justify-between items-center text-[#002D74]">
        <p>Derechos Reservados ISHAVEHA Certificadora y Capacitadora Profesional S.A. de C.V.</p>
      </div>
    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="https://i.imgur.com/Y2BqimI.png">
    </div>
  </div>
</section>
    {{{body}}}
    
  </body>
</html>