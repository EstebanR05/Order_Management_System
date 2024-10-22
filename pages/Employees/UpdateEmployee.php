<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="form">
    <?php
    require_once("../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idUser'])) {
        $idUser = $_POST['idUser'];
        $query = "SELECT * FROM users WHERE idUser='$idUser'";
        $resultado = $obj_conexion->query($query);

        if ($resultado->num_rows > 0) {
            $users = $resultado->fetch_assoc();
    ?>
            <!-- Formulario de edición -->
            <form method="post" action="">
                <input type="hidden" name="idUser" value="<?php echo $users['idUser']; ?>" />
                <div>
                    <label>Name: </label>
                    <input type="text" name="Name" value="<?php echo $users['Name']; ?>" required />
                </div>
                <div>
                    <label>lastName: </label>
                    <input type="text" name="lastName" value="<?php echo $users['lastName']; ?>" required />
                </div>
                <div>
                    <label>Email: </label>
                    <input type="text" name="Email" value="<?php echo $users['Email']; ?>" required />
                </div>
                <div>
                    <label>Password: </label>
                    <input type="text" name="Password" value="<?php echo $users['Password']; ?>" required />
                </div>
                <div>
                    <label>NickName: </label>
                    <input type="text" name="NickName" value="<?php echo $users['NickName']; ?>" required />
                </div>
                <div>
                    <label>Address: </label>
                    <input type="text" name="Address" value="<?php echo $users['Address']; ?>" required />
                </div>
                <div>
                    <label>City: </label>
                    <input type="text" name="City_idCity" value="<?php echo $users['City_idCity']; ?>" required />
                </div>
                <div>
                    <label>Rol: </label>
                    <input type="text" name="Rols_idRol" value="<?php echo $users['Rols_idRol']; ?>" required />
                </div>
                <input type="submit" value="Actualizar" />
            </form>
    <?php
        } else {
            echo "<p>No se encontró ningún cliente con ese ID.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Name'])) {
        $Name = $_POST['Name'];
        $lastName = $_POST['lastName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $NickName = $_POST['NickName'];
        $Address = $_POST['Address'];
        $City_idCity = $_POST['City_idCity'];
        $Rols_idRol = $_POST['Rols_idRol'];
        $idUser = $_POST['idUser'];

        $updateQuery = "UPDATE users SET Name='$Name', lastName='$lastName', Email='$Email', Password='$Password', NickName='$NickName', Address='$Address', City_idCity='$City_idCity', Rols_idRol='$Rols_idRol' WHERE idUser='$idUser'";
        $obj_conexion->query($updateQuery);
        header("Location: /Order_Management_System/pages/Employees/Employees.php");
        exit;
    }
    ?>
</div>

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>