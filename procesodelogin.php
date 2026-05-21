<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit();
}

$correo = $_POST['Correo'];
$contrasena = $_POST['Contrasena'];

$sql = "SELECT IDUsuario, Rol, Contrasena FROM usuario WHERE Correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows !== 1) {
    header("Location: index.php?error=Correo no encontrado");
    exit();
}

$usuario = $resultado->fetch_assoc();

if ($contrasena !== $usuario['Contrasena']) {
    header("Location: index.php?error=Contrasena incorrecta");
    exit();
}

$_SESSION['IDUsuario'] = $usuario['IDUsuario'];
$_SESSION['Rol']       = $usuario['Rol'];

$rol = strtolower($usuario['Rol']);

switch ($rol) {
    case 'tecnico':
        header("Location: admin_listado.php");
        break;

    case 'profesor':
        header("Location: solicitud_profesor.php");
        break;

    case 'usuario':
        header("Location: solicitud_usuario.php");
        break;

    default:
        header("Location: index.php");
        break;
}

exit();
?>