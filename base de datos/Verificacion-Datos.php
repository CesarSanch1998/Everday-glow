<?php

include 'conexion.php';

$usu = $_POST['usuario'];
$contra = $_POST['contraseña'];

$validad_login = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='$usu' AND contraseña ='$contra'");

if(mysqli_num_rows($validad_login) > 0){
    // $_SESSION['usuario'] = $usuario;
    echo '<script> window.location ="index-slide.html"; </script>';
        exit();
 } else{

    echo
             '
             <script>
            alert("Error Contraseña o Correo incorrectos!");
            window.location ="index.html";
             </script>
              ';
 }

?>