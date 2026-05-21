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
    <title>Consulta de Históricos</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="profesor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<header>
    <a href="solicitud_profesor.php"><img src="img/logolargo.png" width="150" height="65" alt="Retorno a la Selección de Peticiones"></a>
    <a href="logout.php"><button type="button" class="btn">Cerrar Sesión</button>
</header>

<nav>
    <a href="solicitud_profesor.php"><img src="img/writingicon.png" width="70" height="70" alt="Selección de Peticiones"></a><br>
    <a href="solicituduserprofesor.php"><img src="img/calendaricon.png" width="70" height="70" alt="Solicitud de Usuario"></a><br>
    <a href="consultabsdprofesor.php"><img src="img/paperclockicon.png" width="70" height="70" alt="Consulta BSD"></a><br>
    <a href="errores_profesor.php"><img src="img/warningicon.png" width="70" height="70" alt="Errores (Profesorado)"></a><br>
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

$sql = "SELECT * FROM ticket JOIN equipo ON equipo.IDEquipo = ticket.IDEquipo";
$resultado = $conexion->query($sql);

// Mostrar resultados en tabla HTML
if ($resultado && $resultado->num_rows > 0) {
    echo "<table border='1' cellpadding='5' width=100%>";
    echo "<tr>
            <th>Ticket</th>
            <th>Tipo de Requerimiento</th>
            <th>Nº Equipo</th>
            <th>Estado</th>
          </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$fila['IDTicket']."</td>
                <td>".$fila['Tipo']."</td>
                <td>".$fila['IDEquipo']."</td>
                <td>".$fila['Estado']."</td>
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