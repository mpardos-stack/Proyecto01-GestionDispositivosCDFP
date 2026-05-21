<?php
session_start();

if (!isset($_SESSION['IDUsuario']) || $_SESSION['Rol'] !== 'Tecnico') {
    header("Location: index.php?error=Inicia_Sesion");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estadísticas</title>
    <link rel="icon" type="image/x-icon" href="Assets\logo.png">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<header>
    <a href="admin_listado.php"><img src="img/logolargo.png" width="150" height="65" alt="Retorno al Menú de Administrador"></a>
    <div class="botones">
        <a href="mensajes.php"><img src="img/bellicon.png" width="45" height="45" alt="Buzón de Mensajes"></a>
        <a href="logout.php"><button type="button" class="btn">Cerrar Sesión</button></a> 
    </div>
</header>

<nav>
    <a href="admin_listado.php"><img src="img/monitoricon.png" width="70" height="70" alt="Menú de Administrador"></a><br>
    <a href="requerimientosadmin.php"><img src="img/settingsicon.png" width="70" height="70" alt="Gestión de Solicitudes"></a><br>
    <a href="estadisticas_admin.php"><img src="img/piecharticon.png" width="70" height="70" alt="Estadísticas"></a><br>
    <a href="consultabsd.php"><img src="img/calendaricon.png" width="70" height="70" alt="Gestión de Incidencias"></a><br>
    <a href="errores_admin.php"><img src="img/warningicon.png" width="70" height="70" alt="Errores (Administrador)"></a><br>
</nav>

<div class="rectangulo">
    
</div>

</body>
</html>