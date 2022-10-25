<?php

include 'conexion.php'; //incluyo el archivo conexion.php

session_start();

$correo = $_POST['correo'];
$contra = $_POST['contraseña'];

$validad_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' AND contrasena ='$contra'");

if(mysqli_num_rows($validad_login) > 0){         // verifica si existe una columna con ambos datos correctos 

$datos = mysqli_fetch_array($validad_login);    // combierte los datos obtenidos en la consulta en un array para poder obtener datos por separado

if($datos['nivel'] == "cliente"){              // verifica el tipo de usuario cliente o entrenador

    $nombrecliente = $datos['nombre'];         // crea una variable $nombreusuario y le pasa los datos ya con seccion iniciada el nombre del usuario

    $nivel = $datos['nivel'];                 

    $_SESSION['nombre'] = $nombrecliente;      //indica que la seccion actual obtendra el nombre obtenido anteriormente

    $_SESSION['nivel'] = $nivel;

    header("Location: cliente.php");            //envia al cliente a su pagina de inicio
    
 } else if($datos['nivel'] == "entrenador"){     // verifica el tipo de usuario cliente o entrenador
   
    $nombrecliente = $datos['nombre'];         // crea una variable $nombreusuario y le pasa los datos ya con seccion iniciada el nombre del usuario

    $nivel = $datos['nivel'];                 

    $_SESSION['nombre'] = $nombrecliente;      //indica que la seccion actual obtendra el nombre obtenido anteriormente

    $_SESSION['nivel'] = $nivel;

    header("Location: admin.php");                //envia al entrenador a su pagina de inicio
    
 
 }
}else{                                            //cuyo caso los datos de inicio no coincidan con ninguno mandara un error 
    $_SESSION['nombre'] = null;      

    $_SESSION['nivel'] = null;

    $datos = null;
    echo
             '
             <script>
            alert("Error Contraseña o Correo incorrectos!");
            window.location ="./login.php";
             </script>
              '; 
 }
mysqli_close($conexion);                      /// se cierra la conexion con la base de datos
?>