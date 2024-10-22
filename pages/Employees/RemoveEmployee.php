<?php
require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idCliente'])) {
    $idCliente = $_POST['idCliente'];

    // Elimina el cliente de la base de datos
    $deleteQuery = "DELETE FROM cliente WHERE idCliente='$idCliente'";
    $obj_conexion->query($deleteQuery);
    header("Location: usuarios.php"); // Redirigir después de eliminar
}
?>
