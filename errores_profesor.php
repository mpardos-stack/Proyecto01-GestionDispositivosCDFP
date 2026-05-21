<?php
session_start();

if (!isset($_SESSION['IDUsuario']) || $_SESSION['Rol'] !== 'Profesor') {
    header("Location: index.php?error=Inicia_Sesion");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Errores</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="profesor.css">
            <link rel="stylesheet" href="errorescomun.css">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<header>
    <a href="solicitud_profesor.php"><img src="img/logolargo.png" width="150" height="65" alt="Retorno a la Selección de Peticiones"></a>
    <a href="logout.php"><button type="button" class="btn">Cerrar Sesión</button></a>
</header>

<nav>
    <a href="solicitud_profesor.php"><img src="img/writingicon.png" width="70" height="70" alt="Selección de Peticiones"></a><br>
    <a href="solicituduserprofesor.php"><img src="img/calendaricon.png" width="70" height="70" alt="Solicitud de Usuario"></a><br>
    <a href="consultabsdprofesor.php"><img src="img/paperclockicon.png" width="70" height="70" alt="Consulta BSD"></a><br>
    <a href="errores_profesor.php"><img src="img/warningicon.png" width="70" height="70" alt="Errores (Profesorado)"></a><br>
</nav>
<div class="rectangulo"><br>
    <h1>Reportes Incidencias</h1>
    <form action="solicituduserprofesor.php">
    <textarea id="problema" name="problema" rows="20" cols="140" placeholder="Inserte aquí su problema"></textarea><br>
    <input type="submit" value="Guardar">
    </form>
</form>
</div>

</div>

</body>
</html>
