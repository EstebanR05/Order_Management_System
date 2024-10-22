<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="form">
    <?php
    require_once("../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idClient'])) {
        $idClient = $_POST['idClient'];
        $query = "SELECT * FROM client WHERE idClient='$idClient'";
        $resultado = $obj_conexion->query($query);

        if ($resultado->num_rows > 0) {
            $cliente = $resultado->fetch_assoc();
    ?>
            <!-- Formulario de edición -->
            <form method="post" action="">
                <input type="hidden" name="idClient" value="<?php echo $cliente['idClient']; ?>" />
                <div>
                    <label>Nombre: </label>
                    <input type="text" name="Name" value="<?php echo $cliente['Name']; ?>" required />
                </div>
                <div>
                    <label>Email: </label>
                    <input type="email" name="Email" value="<?php echo $cliente['Email']; ?>" required />
                </div>
                <div>
                    <label>Dirección: </label>
                    <input type="text" name="Address" value="<?php echo $cliente['Address']; ?>" required />
                </div>
                <div>
                    <label>City: </label>
                    <input type="text" name="City_idCity" value="<?php echo $cliente['City_idCity']; ?>" required />
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
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $City_idCity = $_POST['City_idCity'];
        $idClient = $_POST['idClient'];

        $updateQuery = "UPDATE client SET Name='$Name', Email='$Email', Address='$Address', City_idCity='$City_idCity' WHERE idClient='$idClient'";
        $obj_conexion->query($updateQuery);
        header("Location: /Order_Management_System/pages/Clients/Clients.php");
        exit;
    }
    ?>
</div>

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>