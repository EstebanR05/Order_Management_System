<?php
// Conexión a la base de datos
require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $codCiudad = $_POST['codCiudad'];
    $email = $_POST['email'];
    $nombreDeUsuario = $_POST['nombreDeUsuario'];
    $contrasena = $_POST['contrasena'];

    // Crear la consulta SQL para insertar un nuevo cliente
    $query = "INSERT INTO cliente 
                                (idCliente, nombre, direccion, codCiudad, email, nombreDeUsuario, contrasena) VALUES 
                                (null, '$nombre', '$direccion', $codCiudad, '$email', '$nombreDeUsuario', '$contrasena')";

    // Ejecutar la consulta
    if ($obj_conexion->query($query) === TRUE) {
        echo "Usuario registrado con éxito";
        header('Location: index.php');
    } else {
        echo "Error al registrar el usuario: " . $obj_conexion->error;
    }

    // Cerrar la conexión
    $obj_conexion->close();
}
