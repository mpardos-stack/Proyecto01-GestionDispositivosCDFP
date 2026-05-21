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
    <title>Selección de Peticiones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="profesor.css">
        <link rel="stylesheet" href="solicituduser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
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

<form action="solicituduserprofesor.php" class="selector-row">
    <p class="label-text">Tipos de Requerimiento:</p>
    <div class="button-group">
        <label class="button">
            <input type="radio" name="eleccion" value="opcion1" checked>
            Incidencia
        </label>
        <label class="button">
            <input type="radio" name="eleccion" value="opcion2">
            Solicitud
        </label><br>


    <label for="ubicacion">Ubicación:</label>
    <select name="aulas" id="aulas">
        <option value="aula1">Aula 1</option>
        <option value="aula2">Aula 2</option>
        <option value="aula3">Aula 3</option>
        <option value="aula4">Aula 4</option>
        <option value="aula5">Aula 5</option>
        <option value="aula6">Aula 6</option>
        <option value="aula7">Aula 7</option>
    </select>
    
    <label for="planta"></label>
    <select name="plantas" id="plantas">
        <option value="planta1">Planta 1</option>
        <option value="planta2">Planta 2</option>
        <option value="planta3">Planta 3</option>
    </select> 
    
    <select name="cursos" id="cursos">
        <option value="daw">DAW</option>
        <option value="asir">ASIR</option>
    </select><br>
    
    <label for="tipoequipo">Tipo de Equipo:</label>
    <select name="equipos" id="equipos">
        <option value="portatiles">Portátiles</option>
        <option value="ratones">Ratones</option>
        <option value="cargadores">Cargadores</option>
    </select><br>
    <label for="nequipo">Número de Equipo:</label>
    <input type="text" id="nequipo" name="nequipo"><br><br>

    <textarea id="comentarios" name="comentarios" rows="20" cols="140" placeholder="Inserte aquí algún comentario (Opcional)"></textarea><br><input type="submit" value="Guardar">

</div>


</div>



</body>
</html>