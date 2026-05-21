<?php
session_start();

$error_login = null;
if (isset($_GET['error'])) {
    $error_login = htmlspecialchars($_GET['error']);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="login.css">


</head>
<body>
<div class="rectangulo">
    <h1>Inicio de Sesión</h1>
    <form action="procesodelogin.php" method="POST">
        <label for="Correo">Correo:</label>
        <input type="text" id="Correo" name="Correo" size=100 placeholder="ejemplo@campusdigitalfp.com" required><br><br>
         <label for="password">Contraseña:</label>
        <input type="password" id="Contrasena" name="Contrasena" size=100 placeholder="**********" required><br><br>
        <label for="ubicacion"></label>
        <input class="btn" type="submit" value="Iniciar Sesión">  
    </form><br>
    <a href="reestablecer_contraseña.php">¿Has olvidado tu contraseña?</a>
</div>


</body>
