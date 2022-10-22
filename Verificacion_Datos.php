<?php

include 'conexion.php';

session_start();

$correo = $_POST['correo'];
$contra = $_POST['contraseña'];

$validad_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' AND contrasena ='$contra'");

if(mysqli_num_rows($validad_login) > 0){
    $_SESSION['correo'] = $correo;
    header("Location: inicio.php");
    //echo '<script> window.location ="./index-slide.html"; </script>';
        exit();
 } else{

    header("Location: index.php");
    /*echo
             '
             <script>
            alert("Error Contraseña o Correo incorrectos!");
            window.location ="./index.html";
             </script>
              '; */
 }

?>