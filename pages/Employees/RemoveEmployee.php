<?php
require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idUser'])) {
    $idUser = $_POST['idUser'];
    $deleteQuery = "DELETE FROM users WHERE idUser=" . $idUser;
    $obj_conexion->query($deleteQuery);
    header("Location: Employees.php");
}
