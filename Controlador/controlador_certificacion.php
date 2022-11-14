<?php
    session_start();
    if (!empty($_POST["btnIngresar"])) {
        if (!empty($_POST['code'])) {
                $code = $_POST["code"];
                $sql = $conexion -> query(" SELECT * FROM user WHERE code = '$code' ");
                if ($datos = $sql -> fetch_object()) {
                    $_SESSION['ID'] = $datos -> id;
                    $_SESSION['Nombres(s)'] = $datos -> Nombres;
                    $_SESSION['Apellido(s)'] = $datos -> Apellido;
                    $_SESSION['Matrícula'] = $datos -> Matricula;
                    header('location: profile_certificaciones.php');
                }
        }else {
            echo "campos vacios";
        }
    }    

?>

