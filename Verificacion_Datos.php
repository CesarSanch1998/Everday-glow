<?php

include 'conexion.php';

$correo = $_POST['correo'];
$contra = $_POST['contraseña'];

$validad_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' AND contrasena ='$contra'");

if(mysqli_num_rows($validad_login) > 0){
    // $_SESSION['usuario'] = $usuario;
    echo '<script> window.location ="./index-slide.html"; </script>';
        exit();
 } else{

    echo
             '
             <script>
            alert("Error Contraseña o Correo incorrectos!");
            window.location ="./index.html";
             </script>
              ';
 }

?>