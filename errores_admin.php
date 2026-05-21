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
    <title>Errores</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="profesor.css">
            <link rel="stylesheet" href="errorescomun.css">

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
<div class="rectangulo"><br>
    <h1>Reportes Incidencias</h1>
    <form action="admin_listado.php">
    <textarea id="problema" name="problema" rows="20" cols="140" placeholder="Inserte aquí su problema"></textarea><br>
    <input type="submit" value="Guardar">
    </form>
</form>
</div>

</div>

</body>
</html>