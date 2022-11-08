<?php
    session_start();
    if (!empty($_POST["btnIngresar"])) {
        if (!empty($_POST['code'])) {
                $code = $_POST["code"];
                $sql = $conexion -> query(" SELECT * FROM user WHERE code = '$code' ");
                if ($datos = $sql -> fetch_object()) {
                    $_SESSION['ID'] = $datos -> id;
                    $_SESSION['Nombres(s)'] = $datos -> nombre;
                    $_SESSION['Apellido(s)'] = $datos -> apellido;
                    $_SESSION['Matrícula'] = $datos -> matricula;
                    header('location: inicio_pp.php');
                }
        }else {
            echo "campos vacios";
        }
    }    

?>

