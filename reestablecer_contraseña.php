<!DOCTYPE html>
<html>
    <head>
        <title>Reestablecer Contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="img/logo.png">
        <link rel="stylesheet" href="perfil.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    </head>
    
    <body>
    <header>
        <img src="img/logolargo.png" width="150" height="65" alt="Logo del Centro Campus Digital FP">   
    </header> 
    <h1>Reestablecer contraseña</h1>
    <form action="index.php" method="POST">
        <label for="Correo">Introduzca su Correo Electrónico:</label>
        <input type="text" id="Correo" name="Correo" size=100 placeholder="ejemplo@campusdigitalfp.com" required><br><br>
        <textarea id="problema" name="problema" rows="20" cols="140" placeholder="Inserte aquí el por qué necesita reestablecer su contraseña"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
    </body>
</html>