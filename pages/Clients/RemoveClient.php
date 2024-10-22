<?php
require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idClient'])) {
    $idClient = $_POST['idClient'];

    // Elimina el cliente de la base de datos
    $deleteQuery = "DELETE FROM client WHERE idClient=". $idClient;
    $obj_conexion->query($deleteQuery);
    header("Location: Clients.php"); // Redirigir después de eliminar
}
?>
