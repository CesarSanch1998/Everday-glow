<?php 

    session_start(); // se inicia seccion
    $nombre = $_SESSION['nombre'];   // almacena el nombre mandado de la seccion en la variable $nombre para ser usado como referencia en la bienvenida

    if(isset($_SESSION['nombre'])){// verifica si la variable nombre dentro de $_SESSION posee algun valor dentro

        if($_SESSION['nivel'] == "cliente"){         // verifica si $_SESSION nivel lo compara y si es cliente lo manda a su pagina cliente.php
            
            header("Location: cliente.php");

          } else if($_SESSION['nivel'] == "entrenador"){ // si el nivel que entra en esta pagina es entrenador le muestra esta pagina
            
          

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Hola soy un admin</h1>
    <a href="salir.php"> Salir </a>
</body>
</html>
<?php 

}
    }else{   // cuyo caso no se halla detectado valor alguno en $_SESSION se mandara nuevamente al login

        header('Location: login.php');  // funcion manda de nuevo al login.php

    }

?>