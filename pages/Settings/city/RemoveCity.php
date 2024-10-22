<?php
require_once("../../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idCity'])) {
    $idCity = $_POST['idCity'];
    $deleteQuery = "DELETE FROM city WHERE `idCity` = '$idCity'";
    $obj_conexion->query($deleteQuery);
    header("Location: ../../../pages/Settings/Settings.php");
}
