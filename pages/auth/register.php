<?php
// Conexión a la base de datos
require_once("../../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $lastName = $_POST['lastName'];
    $Email = $_POST['email'];
    $Password = $_POST['Password'];
    $NickName = $_POST['NickName'];
    $Address = $_POST['Address'];
    $City_idCity = $_POST['City_idCity'];

    $query = "INSERT INTO users 
    (`idUser`, `Name`, `lastName`, `Email`, `Password`, `NickName`, `Address`, `City_idCity`, `Rols_idRol`) VALUES 
    (null, '$Name', '$lastName', '$Email', '$Password', '$NickName', '$Address', $City_idCity, 2)";

    if ($obj_conexion->query($query) === False) {
        echo "Error al registrar el usuario: " . $obj_conexion->error;
    }

    echo "Usuario registrado con éxito";
    header('Location: index.php');
    $obj_conexion->close();
}
