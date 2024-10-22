<?php
ob_start();
require_once('../../../components/dashboardHtml.php');
?>

<div class="form">
    <form method="post" action="">
        <div>
            <label>Name: </label>
            <input type="text" name="Name" placeholder="Name city" required />
        </div>
        <input type="submit" value="save" />
    </form>

    <?php
    require_once("../../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Name'])) {
        $Name = $_POST['Name'];

        $query = "INSERT INTO `city` (`idCity`, `Name`) VALUES (NULL, '$Name')";
    
        if ($obj_conexion->query($query) === False) {
            echo "Error, cloud not create a new city, cause: " . $obj_conexion->error;
        }

        header("Location: /Order_Management_System/pages/Settings/Settings.php");
        exit;
    }
    ?>
</div>

<?php
require_once('../../../components/finishedHtml.php');
ob_end_flush();
?>