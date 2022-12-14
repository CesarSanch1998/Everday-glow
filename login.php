<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <link rel="icon" href="./img/icon.png">
    <title>EveryDay Glow</title>
</head>
<body>

    <!-- container de registro -->
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="registro_usuario.php" method="POST">

        <!--<img class="logo-2" src="/images/logo-login.png" alt="">-->

        <h1>Crear Cuenta</h1>
        <span>utilize su Correo para registrarse</span>
        <input type="text" placeholder="Nombre" name="nombre" required/>
        <input type="text" placeholder="Apellido" name="apellido"/>
        <input type="email" id="signUpEmail"placeholder="Correo" name="correo" required/>
        <input type="password" placeholder="Contraseña" name="contra" required/>
        
        <div class="container-select">
          <div class="select-wrapper">
            <select class="select" name="nivel">
              <option value="1" selected="selected">Profesor</option>
              <option value="2">Alumno</option>
            </select>
            <span class="select-icon entypo-arrow-combo"></span>
          </div>
        </div>

        <button type="submit">Registrarse</button>
      </form>
    </div>
    <!-- container de inicio -->
    <div class="form-container sign-in-container">
      <form action="Verificacion_Datos.php" method="POST">
        <img class="logo" src="./images/logo-login.png" alt="">
        <h1>Mi Cuenta</h1>
        <span>Ingresa tu Cuenta</span>
        <input type="email" id="signInEmail" placeholder="Correo" name="correo" required/>
        <input type="password" placeholder="Contraseña" name="contraseña" required/>
        <button type="submit">Iniciar Sesion</button>
      </form>
    </div>
         <!-- Comentarios del Login -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Ya te Registraste!</h1>
          <p> Entonces Que Esperas Haz Click Aqui!</p>
          <button class="ghost" id="signIn" onClick="openSignIn()">Inciar Sesion</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Bienvenido a EveryDay Glow</h1>
          <p>Ingresa Aqui tus Datos Personales Si No Posees Una Cuenta </p>
          <button class="ghost" id="signUp" onClick="openSignUp()">Registrarse</button>
        </div>
      </div>
    </div>
  </div>
    <script src="./js/scripts-login.js"></script>
    <script src="./js/select-scripts.js"></script>
</body>
</html>
<?php 
    
    

?>