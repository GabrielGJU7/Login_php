<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind script Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <style>
        body {
            background-color: #EDF2F7;
        }
    </style>

    <?php
        include 'model/controlador_login.php';
    ?>

    <title><?php echo $_SESSION['Nombres(s)'] . ' ' .$_SESSION['Apellido(s)'] ?></title>
</head>
<body>

    <div class="flex item-center justify-center">
        <div class="bg-white w-2/3 mt-10 rounded-lg">
            <div class="flex items-center justify-center pt-10 flex-col">
                <img src="https://static.vecteezy.com/system/resources/previews/002/275/847/non_2x/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" alt="profile" class="rounded-full w-32">
                <h1 class='text-gray-800 font-semibold text-xl mt-5'>Gabriel Jacobo Ulloa</h1>
                <h1 class="text-gray-400 text-sm " >FORMACION DE INSTRUCTORES</h1>
                
            </div>
            <div class="flex justify-between p-4">
                <div>
                    <h1 class="text-xs uppercase text-gray-500 mb-3">IDMEX-1026-PEUI840212-DIR00200</h1>
                    <h1 class="text-sm text-yellow-500 uppercase">PACKPLUS</h1>
                </div>
                <div>
                    <h1 class='text-sm text-sky-500 py-1 px-2 mt-6 uppercase'>Ishaveha Centro</h1>
                </div>
            </div>  
                <div class="flex items-center justify-center mt-3 mb-6 flex-col">
                    <h1 class="text-base text-gray-500 mb-6">Documentos</h1>
                    <div class="flex mt-2">
                        <button class="text-xs text-sky-300 border-2 py-1 px-2 border-sky-300 p-1 mr-3 h-10 w-10">Id</button>
                        <button class="text-xs text-sky-300 border-2 py-1 px-2 border-sky-300 p-1 mr-3">DC3</button>
                        <button class="text-xs text-sky-300 border-2 py-1 px-2 border-sky-300 p-1 mr-3">Score</button>
                    </div>
                </div>
                
        </div>
</body>
</html>