<?php
include 'conexion.php';
$nombreusu = $_POST['nombreusu'];
$apellidousu = $_POST['apellidousu'];
$correousu = $_POST['correousu'];
$contrausu = $_POST['contrausu'];
$nivelusu = $_POST['nivelusu'];
//encriptando contraseña 
//$contrausu = hash('sha512',$contrausu);

//insertar datos obtenidos de el formulario a un abase de datos 
$query = "INSERT INTO usuarios(nombre,apellido,correo,contrasena,nivel) VALUE('$nombreusu','$apellidousu','$correousu','$contrausu','$nivelusu')";

                //tomando valos de correo en x columna y almacenandolo en esta variable
                $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correousu'");
        //verificando si el correo se repite en alguna columna y su valor es mayor a 0        
 if(mysqli_num_rows($verificar_correo) > 0)
 {
        echo
             '
             <script>
            alert("Este correo ya esta registrado intente otro por favor!");
            window.location ="./index.html";
             </script>
              ';
              //cortando toda ejecucion si el correo se repite
              exit();
 } 
 $ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado con exito!!");
    window.location ="./index.html";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Usuario no registrado!!");
    window.location ="./index.html.html";
    </script>
    ';
}
mysqli_close($conexion);
?>