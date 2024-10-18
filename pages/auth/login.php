<?php
// Conexión a la base de datos
include("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos del formulario
    $user = $_POST['user'];
    $clave = $_POST['pass'];

    // Consulta SQL para verificar las credenciales
    $var_consulta = "SELECT * FROM cliente WHERE email = '$user' AND contrasena = '$clave'";
    $var_resultado = $obj_conexion->query($var_consulta);

    // Verificar si el usuario fue encontrado
    if ($var_resultado->num_rows > 0) {
        // Usuario autenticado
        echo "Usuario Autenticado Bienvenido $user";
        header('Location: /Order_Management_System/pages/dashboard.php');
        exit();
    } else {
        // Usuario no autenticado
        header('Location: index.html');
        exit();
    }
}
