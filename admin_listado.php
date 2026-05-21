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
    <title>Menú de Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
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
        	<?php

$host = "localhost"; 
$usuario = "root";    
$clave = "";           
$bd = "basedatos";    
$puerto = 3306;  

$conexion = new mysqli($host, $usuario, $clave, $bd, $puerto);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM usuario JOIN ticket ON ticket.IDEquipo = usuario.IDEquipo JOIN equipo ON equipo.IDEquipo = usuario.IDEquipo";
$resultado = $conexion->query($sql);

// Mostrar resultados en tabla HTML
if ($resultado && $resultado->num_rows > 0) {
    echo "<table border='1' cellpadding='5' width=100%>";
    echo "<tr>
            <th>Ticket</th>
            <th>Tipo Requerimiento</th>
            <th>Planta</th>
            <th>Curso</th>
            <th>Nº Equipo</th>
            <th>Estado</th>
            <th>Técnico</th>
          </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$fila['IDTicket']."</td>
                <td>".$fila['Tipo']."</td>
                <td>".$fila['Planta']."</td>
                <td>".$fila['Curso']."</td>
                <td>".$fila['IDEquipo']."</td>
                <td>".$fila['Estado']."</td>
                <td>".$fila['IdTecnicoAsignado']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros en la tabla usuario.";
}

$conexion->close();
?>
    
</div>

</body>
</html>