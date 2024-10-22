<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="form">
    <?php
    require_once("../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idCliente'])) {
        $idCliente = $_POST['idCliente'];
        $query = "SELECT * FROM cliente WHERE idCliente='$idCliente'";
        $resultado = $obj_conexion->query($query);

        if ($resultado->num_rows > 0) {
            $cliente = $resultado->fetch_assoc();
    ?>
            <!-- Formulario de edición -->
            <form method="post" action="">
                <input type="hidden" name="idCliente" value="<?php echo $cliente['idCliente']; ?>" />

                <div>
                    <label>Nombre: </label>
                    <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required />
                </div>

                <div>
                    <label>Dirección: </label>
                    <input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" required />
                </div>

                <div>
                    <label>Email: </label>
                    <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required />
                </div>

                <div>
                    <label>Nombre de Usuario: </label>
                    <input type="text" name="nombreDeUsuario" value="<?php echo $cliente['nombreDeUsuario']; ?>" required />
                </div>

                <input type="submit" value="Actualizar" />
            </form>
    <?php
        } else {
            echo "<p>No se encontró ningún cliente con ese ID.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $nombreDeUsuario = $_POST['nombreDeUsuario'];
        $idCliente = $_POST['idCliente'];

        $updateQuery = "UPDATE cliente SET nombre='$nombre', direccion='$direccion', email='$email', nombreDeUsuario='$nombreDeUsuario' WHERE idCliente='$idCliente'";
        $obj_conexion->query($updateQuery);
        header("Location: /Order_Management_System/pages/user/usuarios.php");
        exit;
    }
    ?>
</div>

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>