<?php 
include ('conexion.php');

session_start();
$json = file_get_contents('php://input');
$datos = json_decode($json,true);

print_r($datos);

if(is_array($datos)){
    
    
        $id_usuario = $_SESSION['id_usuario'];
        $id_transsacion = $datos['detalles']['id'];
        $estatus = $datos['detalles']['status'];
        $preciocurso = $datos['detalles']['purchase_units'][0]['amount']['value'];

            //$sql = $conexion -> prepare("INSERT INTO cursos_pagados(nombre_curso,costo_curso,id_relacion_cliente) 
           // VALUES(?,?,?)");

           $ejecutar = mysqli_query($conexion,"INSERT INTO cursos_pagados(nombre_curso,costo_curso,id_relacion_cliente) VALUES('Compra','$preciocurso','$id_usuario')");
           //$sql->execute([$id_transsacion,$preciocurso,$id_usuario]);
        
    


}
