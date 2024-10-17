<?php require_once('../../components/dashboardHtml.php'); ?>

<div class="row">
    <div class="large-12 columns">
        <h4>Consultar por Id Cliente</h4>

        <?php
        require_once("../../includes/conexion.php");

        // Verifica si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idCliente'])) {
            $idCliente = $_POST['idCliente'];

            // Consultar el cliente que se quiere editar
            $query = "SELECT * FROM cliente WHERE idCliente='$idCliente'";
            $resultado = $obj_conexion->query($query);

            // Verifica si se encontró el cliente
            if ($resultado->num_rows > 0) {
                $cliente = $resultado->fetch_assoc();
        ?>
                <!-- Formulario de edición -->
                <form method="post" action="">
                    <input type="hidden" name="idCliente" value="<?php echo $cliente['idCliente']; ?>" />
                    <label>Nombre: </label>
                    <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required />
                    <label>Dirección: </label>
                    <input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" required />
                    <label>Email: </label>
                    <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required />
                    <label>Nombre de Usuario: </label>
                    <input type="text" name="nombreDeUsuario" value="<?php echo $cliente['nombreDeUsuario']; ?>" required />
                    <input type="submit" value="Actualizar" />
                </form>

        <?php
            } else {
                echo "<p>No se encontró ningún cliente con ese ID.</p>";
            }
        }

        // Manejo de actualización
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
            // Actualiza el cliente en la base de datos
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
            $nombreDeUsuario = $_POST['nombreDeUsuario'];
            $idCliente = $_POST['idCliente']; // Captura de nuevo el idCliente

            $updateQuery = "UPDATE cliente SET nombre='$nombre', direccion='$direccion', email='$email', nombreDeUsuario='$nombreDeUsuario' WHERE idCliente='$idCliente'";
            $obj_conexion->query($updateQuery);
            header("Location: usuarios.php"); // Redirigir después de actualizar
            exit; // Asegúrate de detener la ejecución después de redirigir
        }
        ?>
    </div>
</div>

<?php require_once('../../components/finishedHtml.php'); ?>