<?php
ob_start();
require_once('../../../components/dashboardHtml.php');
?>

<div class="form">
    <?php
    require_once("../../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idCity'])) {
        $idCity = $_POST['idCity'];
        $query = "SELECT * FROM city WHERE idCity='$idCity'";
        $resultado = $obj_conexion->query($query);

        if ($resultado->num_rows > 0) {
            $users = $resultado->fetch_assoc();
    ?>
            <!-- Formulario de edición -->
            <form method="post" action="">
                <input type="hidden" name="idCity" value="<?php echo $users['idCity']; ?>" />
                <div>
                    <label>Name: </label>
                    <input type="text" name="Name" value="<?php echo $users['Name']; ?>" required />
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
        $idCity = $_POST['idCity'];

        $updateQuery = "UPDATE city SET Name='$Name' WHERE idCity='$idCity'";
        $obj_conexion->query($updateQuery);
        header("Location: /Order_Management_System/pages/Settings/Settings.php");
        exit;
    }
    ?>
</div>

<?php
require_once('../../../components/finishedHtml.php');
ob_end_flush();
?>