<?php
// Conexión a la base de datos
include("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $clave = $_POST['pass'];

    $var_consulta = "SELECT * FROM users WHERE Email = '$user' AND Password = '$clave'";
    $var_resultado = $obj_conexion->query($var_consulta);

    if ($var_resultado->num_rows <= 0) {
        header('Location: index.html');
        exit();
    }

    echo "Usuario Autenticado Bienvenido $user";
    header('Location: /Order_Management_System/pages/dashboard.php');
    exit();
}
