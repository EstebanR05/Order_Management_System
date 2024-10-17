<?php require_once ("../../components/principalHtml.php"); ?>

<div class="row">
    <div class="large-12 columns">
        <h2>Control de registro AstroService</h2>
    </div>
</div>

<div class="row">
    <div class="large-6 columns">
        <!--Formulario Para Enviar el Usuario y Clave a MYSQL usando el metodo POST-->
        <form method="post" action="">
            <input type="text" name="nombre" placeholder="Ingresa el nombre" required />
            <input type="text" name="direccion" placeholder="Ingresa la direccion" required />
            <input type="number" name="codCiudad" placeholder="Ingresa el codCiudad" required />
            <input type="email" name="email" placeholder="Ingresa el email" required />
            <input type="text" name="nombreDeUsuario" placeholder="Ingresa el nombreDeUsuario" required />
            <input type="password" name="contrasena" placeholder="Ingresa el contrasena" required />
            <input type="submit" value="Registrarse" />
        </form>
        <br />
        <p>
            <a href="login.php">¿Tienes una cuenta? Ingresa aquí</a>
        </p>
        <?php
        // Conexión a la base de datos
        require_once("../../includes/conexion.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Obtener datos del formulario
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $codCiudad = $_POST['codCiudad'];
            $email = $_POST['email'];
            $nombreDeUsuario = $_POST['nombreDeUsuario'];
            $contrasena = $_POST['contrasena'];

            // Crear la consulta SQL para insertar un nuevo cliente
            $query = "INSERT INTO cliente 
                                (idCliente, nombre, direccion, codCiudad, email, nombreDeUsuario, contrasena) VALUES 
                                (null, '$nombre', '$direccion', $codCiudad, '$email', '$nombreDeUsuario', '$contrasena')";

            // Ejecutar la consulta
            if ($obj_conexion->query($query) === TRUE) {
                echo "Usuario registrado con éxito";
                header('Location: login.php');
            } else {
                echo "Error al registrar el usuario: " . $obj_conexion->error;
            }

            // Cerrar la conexión
            $obj_conexion->close();
        }
        ?>
    </div>
</div>

<?php require_once ("../../components/finishedHtml.php"); ?>