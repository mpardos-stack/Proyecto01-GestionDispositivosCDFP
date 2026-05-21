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
        <title>Buzón de Mensajes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="img/logo.png">
        <link rel="stylesheet" href="mensajes.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    </head>
    
    <body>
    <header>
        <a href="admin_listado.php"><img src="img/logolargo.png" width="150" height="65" alt="Retorno al Menú de Administrador"></a>
        <nav class="botones">
            <a href="mensajes.php"><img src="img/bellicon.png" width="45" height="45" alt="Buzón de Mensajes"></a>
            <a href="logout.php"><button type="button" class="btn">Cerrar Sesión</button></a>
        </nav>
    </header> 
    <h2>Tareas Disponibles</h2>
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
            <th>Tipo</th>
            <th>Ubicación</th>
            <th>Nº Equipo</th>
            <th>Estado</th>
            <th>Técnico</th>
          </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$fila['IDTicket']."</td>
                <td>".$fila['Tipo']."</td>
                <td>".$fila['Planta']."</td>
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


    </body>
</html>